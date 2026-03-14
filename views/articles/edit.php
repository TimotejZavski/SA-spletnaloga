<div class="container">
    <h3>Uredi novico</h3>
    <form method="POST" action="/articles/update">
        <input type="hidden" name="id" value="">
        
        <label for="title">Naslov:</label>
        <input type="text" id="title" name="title" value="">
        
        <label for="abstract">Povzetek:</label>
        <textarea id="abstract" name="abstract"></textarea>
        
        <label for="text">Besedilo:</label>
        <textarea id="text" name="text"></textarea>
        
        <button type="submit">Shrani spremembe</button>
        <a href="/articles/list"><button type="button">Prekliči</button></a>
    </form>
</div>
