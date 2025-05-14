
document.addEventListener('DOMContentLoaded', function() {
  initSidebar();
  initNotifications();
  initStatCards();
  initActivityCards();
});

function initSidebar() {
  const navItems = document.querySelectorAll('nav ul li');
  
  navItems.forEach(item => {
    item.addEventListener('click', function() {
      navItems.forEach(navItem => navItem.classList.remove('active'));
      this.classList.add('active');
    });
  });
}

function initNotifications() {
  const notificationBell = document.querySelector('.notifications');
  
  notificationBell.addEventListener('click', function() {
    const currentCount = parseInt(this.querySelector('.badge').textContent);
    
    if (currentCount > 0) {
      this.querySelector('.badge').textContent = '0';
      
      showToast('All notifications cleared');
      
      setTimeout(() => {
        this.querySelector('.badge').textContent = '3';
      }, 5000);
    }
  });
}

function initStatCards() {
  const statCards = document.querySelectorAll('.stat-card');
  
  statCards.forEach(card => {
    card.addEventListener('mouseenter', function() {
      const icon = this.querySelector('.stat-icon');
      icon.style.transform = 'scale(1.1) rotate(5deg)';
      
      setTimeout(() => {
        icon.style.transform = 'scale(1) rotate(0deg)';
      }, 300);
    });
  });
  
  setupRandomUpdates();
}

function setupRandomUpdates() {
  setInterval(() => {
    const statNumbers = document.querySelectorAll('.stat-number');
    const statTrends = document.querySelectorAll('.stat-trend');
    
    const randomIndex = Math.floor(Math.random() * statNumbers.length);
    const targetStat = statNumbers[randomIndex];
    const targetTrend = statTrends[randomIndex];
    
    const originalText = targetStat.textContent;
    let numericValue = parseFloat(originalText.replace(/[^0-9.-]+/g, ''));
    
    const isIncreasing = Math.random() > 0.3;
    const changeAmount = Math.random() * 0.05;
    
    if (isIncreasing) {
      numericValue *= (1 + changeAmount);
      updateTrend(targetTrend, true, (changeAmount * 100).toFixed(1));
    } else {
      numericValue *= (1 - changeAmount);
      updateTrend(targetTrend, false, (changeAmount * 100).toFixed(1));
    }
    
    if (originalText.includes('$')) {
      targetStat.textContent = '$' + numericValue.toFixed(0).replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    } else {
      targetStat.textContent = numericValue.toFixed(0).replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }
    
    highlightUpdate(targetStat);
    
  }, 8000);
}

function updateTrend(trendElement, isPositive, percentage) {
  trendElement.innerHTML = `
    <i class="fas fa-arrow-${isPositive ? 'up' : 'down'}"></i>
    <span>${percentage}%</span>
  `;
  
  trendElement.className = `stat-trend ${isPositive ? 'positive' : 'negative'}`;
}

function highlightUpdate(element) {
  element.style.transition = 'none';
  element.style.backgroundColor = 'rgba(52, 152, 219, 0.2)';
  
  setTimeout(() => {
    element.style.transition = 'background-color 1s ease';
    element.style.backgroundColor = 'transparent';
  }, 50);
}

function initActivityCards() {
  const activityCards = document.querySelectorAll('.activity-card');
  
  activityCards.forEach(card => {
    card.addEventListener('click', function() {
      const details = this.querySelector('.activity-details');
      expandActivity(this, details);
    });
  });
}

function expandActivity(card, details) {
  const allCards = document.querySelectorAll('.activity-card');
  
  allCards.forEach(otherCard => {
    if (otherCard !== card) {
      otherCard.style.opacity = '0.6';
    }
  });
  
  card.style.opacity = '1';
  card.style.transform = 'scale(1.02)';
  details.style.fontWeight = '500';
  
  setTimeout(() => {
    allCards.forEach(otherCard => {
      otherCard.style.opacity = '1';
    });
    card.style.transform = 'scale(1)';
    details.style.fontWeight = 'normal';
  }, 2000);
}

function showToast(message) {
  const toast = document.createElement('div');
  toast.className = 'toast';
  toast.textContent = message;
  
  document.body.appendChild(toast);
  
  setTimeout(() => {
    toast.style.opacity = '1';
    toast.style.transform = 'translateY(0)';
  }, 100);
  
  setTimeout(() => {
    toast.style.opacity = '0';
    toast.style.transform = 'translateY(-20px)';
    
    setTimeout(() => {
      document.body.removeChild(toast);
    }, 300);
  }, 3000);
}

