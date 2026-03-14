<div class="container">
    <h3>Uredi novico</h3>
    <?php if(isset($error) && $error != ""): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>
    <form method="POST" action="/articles/update">
        <input type="hidden" name="id" value="<?php echo $article->id; ?>">
        
        <label for="title">Naslov:</label>
        <input type="text" id="title" name="title" value="<?php echo htmlspecialchars($article->title); ?>">
        
        <label for="abstract">Povzetek:</label>
        <textarea id="abstract" name="abstract"><?php echo htmlspecialchars($article->abstract); ?></textarea>
        
        <label for="text">Besedilo:</label>
        <textarea id="text" name="text"><?php echo htmlspecialchars($article->text); ?></textarea>
        
        <button type="submit">Shrani spremembe</button>
        <a href="/articles/list"><button type="button">Prekliči</button></a>
    </form>
</div>
