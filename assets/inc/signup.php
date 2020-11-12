<form>
    <div class="signup-bar">
        <input type="email" name="email" autocomplete="off" placeholder="Your Email">
        <input type="submit" value="Submit">
    </div>
</form>

<script>
    const submit = document.querySelector('.signup-bar input[type="submit"]');
    submit.addEventListener('click', (e) => { e.preventDefault(); });
</script>