<h1>Contact</h1>

<b><?=$flashMessage?></b>
<form method="post">
    Username:<input type="text" name="username" value="<?=$form->username?>"><br>
    Email:<input type="email" name="email" value="<?=$form->email?>"><br>
    <textarea name="message"><?=$form->message?></textarea>
    <button>Go</button>
</form>