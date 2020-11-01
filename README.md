# Fake News
 <b>Make it 'til you fake it</b>
 
 Fake News-sida, första projektet i PHP i webbutvecklare-programmet på Yrgo
 
 För att åskåda detta projekt vänligen:
 1. Hitta er bra plats för repot på din dator och clona hem den dit.
 2. Gå in på repot via terminalen, tex cd documents/fake-news, och starta en server med koden p -S localhost:8888 (alternativt localhost:8000).
 3. Öppna localhost:8888/index.php i din browser.
 
 
Testare:
 
 1. Réka Madarász
 
 2. Ida From
 
 Kommentarer: Jon McGarvie
 
 1. I usually prefer to have css in a seperate file, it would make the readability of your code better. 

 2. The title image, on `index.php:92`, doesn't scale correcly with different screen sizes. Make it more responsive.
 
 3. Your sorting function works well, although you could move the `usort()` function into the `sortDates()` function. Less logic in the index.php file :)
 
 4. The design of the website is very clean and responds well to changes in screen size, (except what i mentioned before).
 
 5. You can still use the `randomDate()` function to reduce the amount of manual labor you had to do. I'm not sure where you used the function, but you could put it in the articles in `data.php`. Also use the `date()` function, it works very well for that sort of thing.
