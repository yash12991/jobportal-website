document.getElementById('signup-btn').addEventListener('click', function() {
    document.getElementById('signup-btn').classList.add('active');
    document.getElementById('signin-btn').classList.remove('active');
    document.getElementById('signup-form').classList.remove('hidden');
    document.getElementById('login-form').classList.add('hidden');
});

document.getElementById('signin-btn').addEventListener('click', function() {
    document.getElementById('signin-btn').classList.add('active');
    document.getElementById('signup-btn').classList.remove('active');
    document.getElementById('login-form').classList.remove('hidden');
    document.getElementById('signup-form').classList.add('hidden');
});
