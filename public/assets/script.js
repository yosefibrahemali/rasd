let transactionCounter = 0;

// --- A. Live Feed Simulation (Updated for 9-transaction interval) ---
function simulateLiveFeed() {
    const feedList = document.getElementById('live-feed-list');
    if (!feedList) return;

    transactionCounter++; 

    // Generate Base Data
    const types = ['deposit', 'withdraw', 'transfer'];
    const statuses = ['completed', 'pending', 'failed'];
    const type = types[Math.floor(Math.random() * types.length)];
    const status = statuses[Math.floor(Math.random() * statuses.length)];
    const amount = (Math.random() * 5000 + 10).toFixed(2);
    const accFrom = `#${Math.floor(Math.random() * 900) + 100}-${String.fromCharCode(65 + Math.floor(Math.random() * 26))}`;
    const accTo = `#${Math.floor(Math.random() * 900) + 100}-${String.fromCharCode(65 + Math.floor(Math.random() * 26))}`;

    let iconClass, infoHtml, typeText, isDangerous = false;

    // Danger Logic: Control Frequency (Trigger after 8 transactions, on the 9th)
    if (transactionCounter === 9) {
        isDangerous = true;
        transactionCounter = 0; // Reset counter
    } else {
        // Reduced random chance for other transactions
        if (parseFloat(amount) > 4000) {
            isDangerous = true;
        }
        if (Math.random() < 0.05 && type === 'transfer') {
             isDangerous = true;
        }
    }
    
    let dangerIcon = '';
    if (isDangerous) {
        dangerIcon = '<i class="fa-solid fa-triangle-exclamation danger-alert-lg"></i>';
    }

    switch (type) {
        case 'deposit':
            iconClass = 'fa-solid fa-circle-down deposit';
            infoHtml = `<p>إلى: ${accTo}</p>`;
            typeText = 'إيداع';
            break;
        case 'withdraw':
            iconClass = 'fa-solid fa-circle-up withdraw';
            infoHtml = `<p>من: ${accFrom}</p>`;
            typeText = 'سحب';
            break;
        case 'transfer':
            iconClass = 'fa-solid fa-arrow-right-arrow-left transfer';
            infoHtml = `<p>من: ${accFrom} <i class="fa-solid fa-arrow-left-long" style="margin: 0 0.5rem;"></i> إلى: ${accTo}</p>`;
            typeText = 'تحويل';
            break;
    }

    const item = document.createElement('div');
    item.className = `live-feed-item ${isDangerous ? 'is-dangerous-high' : ''}`;
    
    item.innerHTML = `
        <i class="feed-icon ${iconClass}"></i>
        <div class="feed-info">
            ${infoHtml}
            <span>${typeText} ${dangerIcon}</span>
        </div>
        <span class="feed-amount">د.ل${amount}</span>
        <span class="feed-status ${status}">${status === 'completed' ? 'مكتمل' : (status === 'pending' ? 'قيد الانتظار' : 'فشل')}</span>
    `;

    feedList.prepend(item);

    if (feedList.children.length > 10) {
        feedList.lastChild.remove();
    }
}


// --- B. Chart Initialization ---
function initializeCharts() {
    // 1. Transactions Chart (Bar)
    const transactionsCtx = document.getElementById('transactionsChart').getContext('2d');
    new Chart(transactionsCtx, {
        type: 'bar',
        data: {
            labels: ['الأحد', 'الإثنين', 'الثلاثاء', 'الأربعاء', 'الخميس', 'الجمعة', 'السبت'],
            datasets: [{
                label: 'عدد التحويلات',
                data: [450, 520, 700, 680, 550, 950, 1482],
                backgroundColor: 'rgba(0, 174, 240, 0.7)',
                borderColor: 'rgba(0, 174, 240, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: { beginAtZero: true }
            }
        }
    });

    // 2. Alerts Chart (Pie)
    const alertsCtx = document.getElementById('alertsPieChart').getContext('2d');
    new Chart(alertsCtx, {
        type: 'doughnut',
        data: {
            labels: ['عالية الخطورة', 'متوسطة الخطورة', 'معلومات'],
            datasets: [{
                data: [32, 18, 50],
                backgroundColor: ['#e74c3c', '#f39c12', '#00aef0'],
                hoverOffset: 4
            }]
        },
        options: {
            responsive: true,
        }
    });
}


// --- C. General Utilities and Event Listeners ---
document.addEventListener('DOMContentLoaded', () => {
    // 1. Initializers
    initializeCharts();
    const liveFeedInterval = setInterval(simulateLiveFeed, 2000); // Start live feed

    // 2. Element Selectors
    const navLinks = document.querySelectorAll('.nav-link');
    const contentSections = document.querySelectorAll('.content-section');
    const themeToggle = document.getElementById('theme-toggle');
    const menuToggle = document.getElementById('menu-toggle');
    const sidebar = document.getElementById('sidebar');

    // 3. Navigation Logic
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('data-target');

            navLinks.forEach(l => l.classList.remove('active'));
            this.classList.add('active');

            contentSections.forEach(section => {
                section.classList.remove('active');
                if (section.id === targetId) {
                    section.classList.add('active');
                }
            });
            
            // Close sidebar on mobile after clicking
            if (window.innerWidth <= 992) {
                sidebar.classList.remove('open');
            }
        });
    });

    // 4. Theme Toggle Logic
    themeToggle.addEventListener('click', () => {
        document.body.classList.toggle('dark-mode');
        // Save state in localStorage (optional, but good practice)
        if (document.body.classList.contains('dark-mode')) {
            localStorage.setItem('theme', 'dark');
        } else {
            localStorage.setItem('theme', 'light');
        }
    });

    // Apply saved theme on load
    if (localStorage.getItem('theme') === 'dark') {
        document.body.classList.add('dark-mode');
    }

    // 5. Mobile Menu Toggle
    menuToggle.addEventListener('click', () => {
        sidebar.classList.toggle('open');
    });

    // 6. Network Actions (Freeze, Disable, Suspend)
    const freezeAllBtn = document.getElementById('freeze-all-btn');
    const disableAllBtn = document.getElementById('disable-all-btn');
    const suspendSelectedBtn = document.getElementById('suspend-selected-btn');
    const networkNodes = document.querySelectorAll('.node');

    if (freezeAllBtn) {
        freezeAllBtn.addEventListener('click', () => {
            if (confirm('هل أنت متأكد أنك تريد تجميد جميع الحسابات في هذه الشبكة؟ سيتم إيقاف المعاملات مؤقتًا.')) {
                alert('تم إرسال أمر التجميد (محاكاة).');
            }
        });
    }
    
    if (disableAllBtn) {
        disableAllBtn.addEventListener('click', () => {
            if (confirm('تحذير! هل أنت متأكد أنك تريد تعطيل جميع الحسابات المشبوهة بالشبكة بشكل دائم؟')) {
                alert('تم إرسال أمر التعطيل الجماعي (محاكاة).');
            }
        });
    }

    // Node Selection for Suspend
    networkNodes.forEach(node => {
        node.addEventListener('click', () => {
            node.classList.toggle('selected');
        });
    });

    if (suspendSelectedBtn) {
        suspendSelectedBtn.addEventListener('click', () => {
            const selectedNodes = document.querySelectorAll('.node.selected');
            if (selectedNodes.length > 0) {
                if (confirm(`هل أنت متأكد أنك تريد تعليق ${selectedNodes.length} حساب/حسابات محددة؟`)) {
                    alert('تم إرسال أمر التعليق للحسابات المحددة (محاكاة).');
                    selectedNodes.forEach(node => node.classList.remove('selected'));
                }
            } else {
                alert('يرجى تحديد حساب واحد على الأقل من الشبكة أولاً.');
            }
        });
    }

});