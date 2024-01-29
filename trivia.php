<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="image\owlpadhkoo.png" type="image/x-icon">
    </link>
    <title>Book Donation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    </link>
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    </link>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,300;1,100&family=Poppins:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-69TC4G7VHD"></script>
</head>
<style>
    .hed {
        font-weight: 600;
        font-size: larger;
    }

    /* hr.style-seven {
    overflow: visible;
    height: 30px;
    border-style: solid;
    border-color: black;
    border-width: 1px 0 0 0;
    border-radius: 20px;
}
hr.style-seven:before { 
    display: block;
    content: "";
    height: 30px;
    margin-top: -31px;
    border-style: solid;
    border-color: black;
    border-width: 0 0 1px 0;
    border-radius: 20px;
} */
    hr.style-four {
        height: 3px;
        background-color: #230899;
        margin: 0 auto;
        border: none;
        text-align: center;

    }
    .trivimg{
        border-radius: 20%;
        box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
        /* transform: rotate(-25deg) */

    }
    /* .image {
  perspective: 3000px;
  width: 50%;
  position: absolute;
  left: 50%;
  top:50%;
  transform: translate(-50%, -50%);
  transform-style: preserve-3d;
}
.image img {
  transform: rotateX(70deg) rotateZ(-60deg) translate3d(-120px, 0px, 70px);
  box-shadow: -80px 60px 15px 5px rgba(0,0,0,0.4);
  transition: all .4s;
  transform-style: preserve-3d;
}
.image:hover img {
  transform: rotateX(0deg) rotateZ(0deg) translate3d(0px, 0px, 0px);
  box-shadow: 0px 0px 0px 0px rgba(0,0,0,0.0);
} */
</style>

<body>
    <!-- Navbar -->
    <nav class="navbar stickey-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="navbar-brand">
                <img src="image\Padhaakoowl.png" alt="Logo" width="120" height="80" class="d-inline-block align-text-top">
            </div>
            <div class="navbar-brand">
                <a href="https://padhaakoo.com/">
                    <span class="text-center logo d-inline-block align-text-top text-warning" sty>Padhaakoo.com</span>
                </a>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active d-flex justify-content-cente" href="trivia.php">Trivia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="donateform.php">Donate</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="bookgalerry.php">Search</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="ourbook.php">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="booktable.php">Books</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Book section -->

    <section>
        <div class="container my-5">
            <div class="d-flex justify-content-center hed py-3 fst-italic">
                <h2>Book-lovers Trivia</h2>
            </div>
            <div>
                <h3>Lets have some fun-</h3>
                <p>Would your loved ones and acquaintances portray you as a devoted bibliophile or merely a run-of-the-mill book enthusiast? Do you identify with the art of librocubicularism, where your ever-present tomes tend to obstruct peaceful slumber? Have you succumbed to bibliosmia in the hallowed halls of your local library or amidst the shelves of your cherished bookstore, even in the presence of fellow book aficionados. The enthusiastic bibliophagist found themselves in a dilemma as the towering stacks of books, like formidable ballycumbers, threatened to consume their entire living space.</p>
                <p class="fst-italic">If these terms resonate with you, then you undoubtedly qualify as a passionate book connoisseur, armed with the lexicon to substantiate your devotion.</p>
            </div>
            <div class="py-3">
                <h3>Here are exciting <span class="fst-italic fs-2">25 </span>words that a crazy book lover would like to know.</h3>
                <ul class="list list-group-numbered list-flush py-3">

                    <div class="row pt-3">
                        <div class="col-lg-6 col-md-6 col-12">
                            <h3 class="display-6 text-center">1. <span class="text-uppercase">bibliobibuli </span></h3>
                            <hr class="abouthr" />
                            <p class="py-4"><span class="fst-italic">"Bibliobibuli" </span> a term that was coined by American humorist H.L. Mencken. It is a playful and somewhat tongue-in-cheek word that refers to people who read too much or are overly fond of books. The term is often used to describe individuals who are voracious readers or book enthusiasts, sometimes to the point of being obsessed with reading. Mencken used it in a humorous way to poke fun at people who are so engrossed in reading that they may neglect other aspects of life. It's not a widely used or recognized term, but it can be a fun way to describe someone with a deep love for books and reading.</p>
                            <hr class="style-four" />
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <img class="img-fluid aboutimg abtimg trivimg pt-3" src="image/Triva/trivia01.jpg" alt="about" />
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-lg-6 col-md-6 col-12">
                            
                        <img class="img-fluid aboutimg abtimg trivimg pt-3" src="image/Triva/trivia2.jpg" alt="about" />
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <h3 class="display-6 text-center">2. <span class="text-uppercase">bibliophagist </span></h3>
                            <hr class="abouthr" />
                            <p class="py-4">The term <span class="fst-italic">"bibliophagist" </span>is not a commonly recognized word in the English language, and it does not have an established or widely accepted meaning. It appears to be a neologism or a coined term. However, if we break down the word, "biblio-" is a prefix related to books or literature, and "phagist" could be associated with consumption or eating. So, one could infer that a "bibliophagist" might be humorously or metaphorically described as someone who voraciously consumes or devours books, indicating a deep love for reading.</p>
                            <hr class="style-four" />
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-lg-6 col-md-6 col-12">
                            <h3 class="display-6 text-center">3. <span class="text-uppercase">librocubicularist </span></h3>
                            <hr class="abouthr" />
                            <p class="py-4">The term <span class="fst-italic">"librocubicularist" </span>is a rare and unusual word that refers to a person who reads in bed. It is a combination of two Latin-derived words: <span class="fst-italic">"libro"</span> (meaning <span class="fst-italic">"book"</span>) and <span class="fst-italic">"cubicularius"</span> (meaning "related to a chamber or bedroom"). Essentially, a librocubicularist is someone who enjoys reading while in the comfort of their bed. This term is not commonly used in everyday language but is occasionally employed humorously or in literary contexts to describe individuals who have a habit of reading in bed.</p>
                            <hr class="style-four" />
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                        <img class="img-fluid aboutimg abtimg trivimg pt-3" src="image/Triva/trivia03.jpg" alt="about" />
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-lg-6 col-md-6 col-12">
                            <img class="img-fluid aboutimg abtimg trivimg pt-3" src="image/Triva/trivia4.jpg" alt="about" />
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <h3 class="display-6 text-center">4. <span class="text-uppercase">ballycumbers</span></h3>
                            <hr class="abouthr" />
                            <p class="py-4"><span class="fst-italic">"bibliophagist" </span>is not a commonly recognized word in the English language, and it does not have an established or widely accepted meaning. It appears to be a fictional or obscure term that might be used in a specific context, such as in a work of fiction or as a playful and nonsensical word. Without additional context or information, it's difficult to provide a specific meaning for <span class="fst-italic">"ballycumbers."</span></p>
                            <hr class="style-four" />
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-lg-6 col-md-6 col-12">
                            <h3 class="display-6 text-center">5. <span class="text-uppercase">Bibliosmia </span></h3>
                            <hr class="abouthr" />
                            <p class="py-4"><span class="fst-italic">"Bibliosmia" </span>is a term used to describe the love or enjoyment of smelling books. It combines two Greek words: <span class="fst-italic">"biblio,"</span> which means <span class="fst-italic">"book,"</span> and <span class="fst-italic">"osmia,"</span> which means <span class="fst-italic">"smell"</span> or <span class="fst-italic">"odor."</span> Bibliosmia refers to the pleasure some people derive from the scent of books, particularly old or well-loved ones. The smell of books can be attributed to the paper, ink, glue, and other materials used in their production. Bibliophiles, or book lovers, often appreciate this unique and nostalgic aroma when they open a new book or browse through an old one.</p>
                            <hr class="style-four" />
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <img class="img-fluid aboutimg abtimg trivimg pt-3" src="image/Triva/trivia5.jpg" alt="about" />
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-lg-6 col-md-6 col-12">
                            <img class="img-fluid aboutimg abtimg trivimg pt-3" src="image/Triva/trivia06.jpg" alt="about" />
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <h3 class="display-6 text-center">6. <span class="text-uppercase">bibliophile</span></h3>
                            <hr class="abouthr" />
                            <p class="py-4">A <span class="fst-italic">"bibliophile" </span> is a person who loves books. The term is derived from two Greek words: <span class="fst-italic">"biblion,"</span> which means <span class="fst-italic">"book,"</span> and <span class="fst-italic">"philos,"</span> which means <span class="fst-italic">"loving"</span> or <span class="fst-italic">"fond of."</span> A bibliophile is someone who has a deep passion for books, enjoys collecting them, and takes great pleasure in reading and owning a wide variety of books. Bibliophiles often value books not only for their content but also for their physical attributes, such as their covers, bindings, and print quality. They may have extensive personal libraries and are typically enthusiastic about all things related to literature and reading.</p>
                            <hr class="style-four" />
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-lg-6 col-md-6 col-12">
                            <h3 class="display-6 text-center">7. <span class="text-uppercase">Sentranced </span></h3>
                            <hr class="abouthr" />
                            <p class="py-4"><span class="fst-italic">"Sentranced" </span>is not a standard word in the English language. It appears to be a creative or coined term, possibly formed by combining "sent" and "entranced." Without additional context or a specific definition provided, it's difficult to determine its precise meaning.If you encountered this word in a specific context or text, it may be a specialized or neologistic term used within that context. In general language, however, "entranced" is the correct term and it means being captivated, enchanted, or deeply absorbed by something, such as a beautiful scene, a piece of music, or a captivating book.</p>
                            <hr class="style-four" />
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <img class="img-fluid aboutimg abtimg trivimg pt-3" src="image/Triva/trivia7.jpg" alt="about" />
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-lg-6 col-md-6 col-12">
                            <img class="img-fluid aboutimg abtimg trivimg pt-3" src="image/Triva/trivia8.jpg" alt="about" />
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <h3 class="display-6 text-center">8. <span class="text-uppercase">Tsundoku</span></h3>
                            <hr class="abouthr" />
                            <p class="py-4">A <span class="fst-italic">"Tsundoku" </span>is a Japanese term that refers to the habit of acquiring books and letting them pile up, unread. It's often used to describe the act of buying or collecting books and then allowing them to sit on a shelf, gathering dust, because the person hasn't had the time or inclination to read them. Essentially, it's a word for the tendency to hoard books that you may intend to read someday but never quite get around to. The term is a combination of two Japanese words: "tsunde" (meaning "to stack things") and "oku" (meaning "to leave for a while"). Tsundoku is a concept many book enthusiasts can relate to, as they accumulate more books than they have time to read.</p>
                            <hr class="style-four" />
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-lg-6 col-md-6 col-12">
                            <h3 class="display-6 text-center">9. <span class="text-uppercase">Aficionados </span></h3>
                            <hr class="abouthr" />
                            <p class="py-4"><span class="fst-italic">"Aficionados" </span>is a plural noun referring to people who are enthusiastic or passionate about a particular interest or activity. These individuals have a deep knowledge of and strong appreciation for the subject of their interest. The term is often used to describe experts or connoisseurs in a particular field or hobby. For example, wine aficionados are people who are highly knowledgeable about wines and have a great passion for tasting and collecting them. Aficionados can be found in various areas, such as art, sports, music, food, and more, where they devote time and effort to indulging in and enhancing their understanding of their chosen passion.</p>
                            <hr class="style-four" />
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <img class="img-fluid aboutimg abtimg trivimg pt-3" src="image/Triva/trivia9.avif" alt="about" />
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-lg-6 col-md-6 col-12">
                            <img class="img-fluid aboutimg abtimg trivimg pt-3" src="image/Triva/trivia10.jpg" alt="about" />
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <h3 class="display-6 text-center">10. <span class="text-uppercase">Epeolatry</span></h3>
                            <hr class="abouthr" />
                            <p class="py-4">A <span class="fst-italic">"Epeolatry" </span>is a term that describes the worship or veneration of words. It's a rare and somewhat obscure word, and it's often used in a poetic or metaphorical sense. Epeolatry suggests a deep love for language and an appreciation for the beauty, power, and nuances of words and their usage. People who engage in epeolatry may have a strong interest in writing, literature, linguistics, or poetry, and they may derive great joy from playing with words and exploring their meanings and expressions.</p>
                            <hr class="style-four" />
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-lg-6 col-md-6 col-12">
                            <h3 class="display-6 text-center">11. <span class="text-uppercase">Literarian </span></h3>
                            <hr class="abouthr" />
                            <p class="py-4"><span class="fst-italic">"Literarian" </span> typically refers to someone who is a devotee or enthusiast of literature. It is a term used to describe individuals who have a strong passion for books, reading, and literary pursuits. Literarians are often avid readers and may be actively involved in book clubs, literary discussions, or other activities related to literature. They have a deep appreciation for written works, including novels, poetry, essays, and other forms of literary expression. The term "literarian" is less common than "bibliophile" or "book lover" but conveys a similar sense of devotion to literature and literary culture.</p>
                            <hr class="style-four" />
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <img class="img-fluid aboutimg abtimg trivimg pt-3" src="image/Triva/trivia11.avif" alt="about" />
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-lg-6 col-md-6 col-12">
                            <img class="img-fluid aboutimg abtimg trivimg pt-3" src="image/Triva/trivia012.jpg" alt="about" />
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <h3 class="display-6 text-center">12. <span class="text-uppercase">Ultracrepidarian</span></h3>
                            <hr class="abouthr" />
                            <p class="py-4">A <span class="fst-italic">"Ultracrepidarian" </span>is a term used to describe someone who offers opinions or makes judgments on subjects they know little or nothing about, especially when they do so with excessive confidence. In other words, it refers to individuals who speak or give advice beyond their expertise or knowledge, often without sufficient information or qualifications. This term is typically used in a critical or pejorative sense to highlight the arrogance or overconfidence of such individuals. It comes from the Latin phrase <span class="fst-italic">"ultra crepidam,"</span> which means <span class="fst-italic">"beyond the sole (shoe),"</span> referencing a story about a cobbler who criticized a painting above his area of expertise.</p>
                            <hr class="style-four" />
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-lg-6 col-md-6 col-12">
                            <h3 class="display-6 text-center">13. <span class="text-uppercase">morosoph </span></h3>
                            <hr class="abouthr" />
                            <p class="py-4">The term <span class="fst-italic">"morosoph" </span>is not a commonly recognized word in the English language. It appears to be a less common or possibly obsolete word. Without additional context or information, it's challenging to provide a specific meaning for "morosoph." It's possible that it could be a specialized or archaic term in a particular field or language, but it is not widely used in contemporary English.</p>
                            <hr class="style-four" />
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <img class="img-fluid aboutimg abtimg trivimg pt-3" src="image/Triva/trivia13.jpg" alt="about" />
                        </div>
                    </div>

                    <div class="row pt-3">
                        <div class="col-lg-6 col-md-6 col-12">
                            <img class="img-fluid aboutimg abtimg trivimg pt-3" src="image/Triva/trivia014.jpg" alt="about" />
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <h3 class="display-6 text-center">14. <span class="text-uppercase">Book-bosomed</span></h3>
                            <hr class="abouthr" />
                            <p class="py-4">A <span class="fst-italic">"Book-bosomed" </span>is an adjective used to describe someone who is deeply absorbed in or passionate about reading and books. When someone is described as "book-bosomed," it suggests that books are close to their heart, figuratively speaking, and that they have a strong affection for literature. It's a poetic way to convey someone's love for reading and the central role that books play in their life.</p>
                            <hr class="style-four" />
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-lg-6 col-md-6 col-12">
                            <h3 class="display-6 text-center">15. <span class="text-uppercase">Incunabula </span></h3>
                            <hr class="abouthr" />
                            <p class="py-4">The term <span class="fst-italic">"Incunabula" </span>refers to the earliest printed books or works produced using movable type printing technology, specifically those created before the year 1501. These books represent the infancy of the printing press and are considered valuable historical artifacts. The term is derived from the Latin word "incunabula," which means "swaddling clothes" or "cradle," indicating the early stage of the development of printing.</p>
                            <hr class="style-four" />
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <img class="img-fluid aboutimg abtimg trivimg pt-3" src="image\Triva\trivia015.jpg" alt="about" />
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-lg-6 col-md-6 col-12">
                            <img class="img-fluid aboutimg abtimg trivimg pt-3" src="image/Triva/trivia16.jpg" alt="about" />
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <h3 class="display-6 text-center">16. <span class="text-uppercase">Bibliochor</span></h3>
                            <hr class="abouthr" />
                            <p class="py-4">A <span class="fst-italic">"Bibliochor" </span>is a term that combines "biblio," which relates to books or literature, with "chor," which means "to flow" or "to dance." It is a playful and imaginative word that is not widely recognized in the English language.</p>
                            <hr class="style-four" />
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-lg-6 col-md-6 col-12">
                            <h3 class="display-6 text-center">17. <span class="text-uppercase">Page-a-vu </span></h3>
                            <hr class="abouthr" />
                            <p class="py-4">The term <span class="fst-italic">"Page-a-vu" </span>is not a standard English word or phrase, and it doesn't have a recognized or widely accepted meaning. It appears to be a play on words or a humorous term, perhaps intended to sound like "déjà vu," which is a French phrase meaning "already seen" and refers to the feeling of having experienced something before.</p>
                            <hr class="style-four" />
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <img class="img-fluid aboutimg abtimg trivimg pt-3" src="image/Triva/trivia17.jpg" alt="about" />
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-lg-6 col-md-6 col-12">
                            <img class="img-fluid aboutimg abtimg trivimg pt-3" src="image/Triva/trivia18.jpg" alt="about" />
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <h3 class="display-6 text-center">18. <span class="text-uppercase">Bookarazzi</span></h3>
                            <hr class="abouthr" />
                            <p class="py-4">A <span class="fst-italic">"Bookarazzi" </span>is a playful and informal term that combines "book" with "paparazzi." It is used to describe someone who is extremely enthusiastic or obsessed with books, reading, and everything related to literature. A bookarazzi is someone who is always eager to talk about books, share their reading experiences, and may often be seen carrying a book or reading in various settings. This term highlights a person's passion for books and reading, similar to how paparazzi are enthusiastic about photographing and following celebrities. It's a light-hearted way to describe a dedicated book lover or bookworm.</p>
                            <hr class="style-four" />
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-lg-6 col-md-6 col-12">
                            <h3 class="display-6 text-center">19. <span class="text-uppercase">Scrollmate</span></h3>
                            <hr class="abouthr" />
                            <p class="py-4"><span class="fst-italic">"Scrollmate" </span>is not a widely recognized term, and it doesn't have a standard meaning in the English language. It could be a made-up or niche term used in a specific context or by a particular group or community. If you have more context or information about where you encountered this term, I may be able to provide a more accurate explanation or interpretation.</p>
                            <hr class="style-four" />
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <img class="img-fluid aboutimg abtimg trivimg pt-3" src="image/Triva/trivia19.jpg" alt="about" />
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-lg-6 col-md-6 col-12">
                            <img class="img-fluid aboutimg abtimg trivimg pt-3" src="image/Triva/trivia20.jpg" alt="about" />
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <h3 class="display-6 text-center">20. <span class="text-uppercase">Abibliophobia</span></h3>
                            <hr class="abouthr" />
                            <p class="py-4"><span class="fst-italic">"Abibliophobia" </span>is not a widely recognized or established term in the field of psychology or medicine. it appears to be a neologism or a playful combination of words. It is often used humorously to describe the fear of running out of things to read, particularly for avid readers or book lovers. In this context, "abibliophobia" is not a recognized phobia but rather a lighthearted way to convey the idea that someone loves reading and books so much that the thought of not having anything left to read is anxiety-inducing for them. It's not a medically or psychologically recognized condition, but it's a term used in a humorous or relatable way by book enthusiasts.</p>
                            <hr class="style-four" />
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-lg-6 col-md-6 col-12">
                            <h3 class="display-6 text-center">21. <span class="text-uppercase">Bookklempt</span></h3>
                            <hr class="abouthr" />
                            <p class="py-4"><span class="fst-italic">"Bookklempt" </span>is not a widely recognized or standard term in the English language. It appears to be a playful or humorous word created by blending "book" and "klempt." "Klempt" itself is not a common word but is likely derived from the Yiddish term "kvell," which means to be bursting with pride or joy. So, "bookklempt" might be used humorously to describe the feeling of being overwhelmed with joy or emotion when it comes to books or reading. It's not a formally recognized term but could be used by book enthusiasts in a lighthearted way to convey their passion for reading.</p>
                            <hr class="style-four" />
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <img class="img-fluid aboutimg abtimg trivimg pt-3" src="image/Triva/trivia21.jpg" alt="about" />
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-lg-6 col-md-6 col-12">
                            <img class="img-fluid aboutimg abtimg trivimg pt-3" src="image/Triva/trivia22.jpg" alt="about" />
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <h3 class="display-6 text-center">22. <span class="text-uppercase">dampstain</span></h3>
                            <hr class="abouthr" />
                            <p class="py-4">A <span class="fst-italic">"dampstain" </span>refers to a mark or stain on a surface, typically paper, fabric, or a wall, caused by moisture or dampness. These stains are often the result of water or other liquids coming into contact with the material, and they can leave behind discoloration, mold, or a general appearance of being wet or damp.</p>
                            <hr class="style-four" />
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-lg-6 col-md-6 col-12">
                            <h3 class="display-6 text-center">23. <span class="text-uppercase">Epeolatry</span></h3>
                            <hr class="abouthr" />
                            <p class="py-4"><span class="fst-italic">"Epeolatry" </span>is a term that is not widely recognized or used in common language. It is a rare and somewhat archaic word, and its meaning may not be immediately clear to many people. However, "epeolatry" generally refers to the worship or excessive veneration of words, often at the expense of their actual meanings or the ideas they convey. In essence, it's a term used to describe an overemphasis on the beauty or aesthetics of language, sometimes to the detriment of the substance or content of what is being communicated. It implies a fascination with words themselves rather than the ideas or concepts they represent.</p>
                            <hr class="style-four" />
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <img class="img-fluid aboutimg abtimg trivimg pt-3" src="image/Triva/trivia23.jpg" alt="about" />
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-lg-6 col-md-6 col-12">
                            <img class="img-fluid aboutimg abtimg trivimg pt-3" src="image/Triva/trivia24.jpg" alt="about" />
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <h3 class="display-6 text-center">24. <span class="text-uppercase">Shelfrighteous</span></h3>
                            <hr class="abouthr" />
                            <p class="py-4"><span class="fst-italic">"Shelfrighteous" </span>is a humorous and informal term created by blending "shelf" and "self-righteous." It is often used in the context of books and reading to describe someone who takes pride in owning or displaying a large collection of books on their shelves, and who may come across as self-righteous or judgmental about their reading habits or literary tastes.This term is typically used humorously and doesn't have a formal or widely recognized definition. It's a playful way to describe someone who is proud of their book collection, perhaps to the point of being a little self-righteous or boastful about it.</p>
                            <hr class="style-four" />
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-lg-6 col-md-6 col-12">
                            <h3 class="display-6 text-center">25. <span class="text-uppercase">Readultrey</span></h3>
                            <hr class="abouthr" />
                            <p class="py-4"><span class="fst-italic">"Readultrey" </span>appears to be a playful and creative blend of the words "read" and "adultery." However, it's not a standard or widely recognized term in the English language.Adultery is a term used to describe a form of infidelity or unfaithfulness in a romantic or marital relationship, typically involving one partner being involved with someone outside of their committed relationship. "Readultrey" doesn't have a defined meaning, but it could be used humorously or metaphorically to suggest that someone is being unfaithful to their reading material or favorite books by reading something else.</p>
                            <hr class="style-four" />
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <img class="img-fluid aboutimg abtimg trivimg pt-3" src="image/Triva/trivia25.jpg" alt="about" />
                        </div>
                    </div>

                </ul>

            </div>
        </div>
    </section>


    <!--  -->
    <?php
    require("footer.php");

    ?>

</body>

</html>