<?php

session_start();

if(!isset($_SESSION['aid'])){
}
else{
 $aid=$_SESSION['aid'];
 $Name=$_SESSION['name'];
 $Emails=$_SESSION['email'];
}


?>






<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Morata</title>
          <link rel="shortcut icon" type="image/png" href="//demo-morata.myshopify.com/cdn/shop/files/favicon_32x.png?v=1699849016">
          <link rel="apple-touch-icon-precomposed" type="image/png" sizes="152x152" href="//demo-morata.myshopify.com/cdn/shop/files/favicon_152x.png?v=1699849016">

          <link rel="stylesheet" href="CSS/faqs.css">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
          <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,500&family=Nunito:wght@500&display=swap"
           rel="stylesheet">
           <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
           <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
           integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

           <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,700;1,700&family=Rubik:ital,wght@0,600;1,600&display=swap" rel="stylesheet">

           <link rel="stylesheet" href="./owl/owl.carousel.css">
          <link rel="stylesheet" href="./owl/owl.theme.default.css">
          <script src="./owl/jquery.min.js"></script>
          <script src="./owl/owl.carousel.min.js"></script>
          <!-- <style>
            .owl-one {
    z-index: -1;
}
          </style> -->
</head>
<body class="bdy">
          
  <?php
  include 'navbar.php'
  ?>
<div class="top">
          <a href="main.php">Home</a>
          <p>/ FAQs</p>
  </div>


  <div class="accordion">
    <h1>Frequently Asked Questions</h1>
    <div class="accordion-item">
        <input type="checkbox" id="accordion1">
        <label for="accordion1" class="accordion-item-title"><span class="icon"></span>What countries do you ship to?</label>
        <div class="accordion-item-desc">Too often, people take it for granted that websites and E-Commerce stores will ship to them. 
          After all, if you can find it online, it would make sense that you should be able to buy it, right? Unfortunately, that’s not always the case.
           If you’re only shipping domestic orders, or perhaps you only ship to certain countries, make sure that you spell that out for visitors ahead of time.
            The last thing you want is someone getting to the checkout before realizing they can’t get shipping to their country of residence.</div>
    </div>

    <div class="accordion-item">
        <input type="checkbox" id="accordion2">
        <label for="accordion2" class="accordion-item-title"><span class="icon"></span>What is your return/exchange policy?</label>
        <div class="accordion-item-desc">Another pressing question that every retail brand is tired of answering: how do you handle returns and exchanges?
           In addition to having a dedicated section or page regarding the return and exchange process on your website (do you have one yet?), 
           you should have a question and answer on your FAQ page that explains it to your shoppers.</div>
    </div>

    <div class="accordion-item">
        <input type="checkbox" id="accordion3">
        <label for="accordion3" class="accordion-item-title"><span class="icon"></span>How long will it take to get my order?</label>
        <div class="accordion-item-desc">Everyone’s in a hurry these days. Thanks to giants like Amazon offering next-day (and even same-day) shipping,
           no one wants to wait. If you charge for shipping, consider offering people a few different delivery options. Regardless, make sure that you
            use this question to provide people with the specific details of how long delivery takes based on the type of order, as well as whether there is any order processing time. </div>
    </div>

    <div class="accordion-item">
        <input type="checkbox" id="accordion4">
        <label for="accordion4" class="accordion-item-title"><span class="icon"></span>What payment methods do you accept?</label>
        <div class="accordion-item-desc">There are a growing number of options for paying for transactions online. From credit cards and 
          debit cards to electronic wallets, people want more and more versatility in their online shopping. You don’t have to offer it all, 
          but make sure that you’re explicit about what you do accept. If you use a platform like Square or PayPal, make sure you let people 
          know so they have that option in addition to others. </div>
    </div>

    <div class="accordion-item">
        <input type="checkbox" id="accordion5">
        <label for="accordion5" class="accordion-item-title"><span class="icon"></span>Do you have gift packaging options?</label>
        <div class="accordion-item-desc">People love buying gifts online, and especially if they can ship them straight to the recipient.
           Therefore, they’ll often want an option where the invoice is left out of the box or pricing is excluded. Perhaps they’re shipping 
           it to themselves but want a gift receipt for the person getting it. You might even want to consider offering special packaging for gift purchases,
            but only if it’s within your means. </div>
    </div>

    <div class="accordion-item">
        <input type="checkbox" id="accordion6">
        <label for="accordion6" class="accordion-item-title"><span class="icon"></span>How long does order processing take?</label>
        <div class="accordion-item-desc">Bear in mind this is different than shipping time. This question refers to the time it takes 
          from when the order is submitted until it is shipped. For some businesses, that’s done on the same day. For major brands like Amazon and Walmart.com,
           it might even be done within the same hour. Your E-Commerce store might need a few days to process orders. That’s fine, but make sure that you let people
            know so that they’re not expecting an earlier shipment. </div>
    </div>

    <div class="accordion-item">
        <input type="checkbox" id="accordion7">
        <label for="accordion7" class="accordion-item-title"><span class="icon"></span>How do I cancel/modify an order?</label>
        <div class="accordion-item-desc">This might seem like something that you want to deter, but it’s bound to happen in every business.
           Therefore, the best thing that you can do, again, is to be transparent and honest with your audience about how it works. Whether it’s
            because of a shipping delay, a change of heart, or even just an accidental purchase (which usually only happens with “one-click ordering”,
             but still needs to be considered), some people may want to cancel or change their order. </div>
    </div>

    <div class="accordion-item">
        <input type="checkbox" id="accordion8">
        <label for="accordion8" class="accordion-item-title"><span class="icon"></span>How can I track my order?</label>
        <div class="accordion-item-desc">Another thing that people want to know is how to monitor their delivery. 
          From distrust in delivery services to the excitement of their item arriving, people love to track shipments of what they order online.
           Make sure that you provide them with shipping information that they can track, in the first place,
            and then use your FAQ to explain to them how to do so.</div>
    </div>

    <div class="accordion-item">
        <input type="checkbox" id="accordion9">
        <label for="accordion9" class="accordion-item-title"><span class="icon"></span>What if my order arrives damaged?</label>
        <div class="accordion-item-desc">Another common concern that people have when shopping online is dealing with damaged goods upon arrival.
           If you take the time to explain that you will happily (and quickly) replace anything that arrives damaged or otherwise defective, you’ll
            not only be proving your value to people, but you’ll be addressing one of their most pressing concerns when it comes to online shopping. </div>
    </div>

    <div class="accordion-item">
        <input type="checkbox" id="accordion10">
        <label for="accordion10" class="accordion-item-title"><span class="icon"></span>Product info Q&A</label>
        <div class="accordion-item-desc">This one we’re leaving more open-ended because it will be, depending on
           what products you’re selling specifically. This is a good place to answer the most common questions you
            get about the products that you sell. Perhaps you sell clothes and people have questions about sizing or materials.
             Maybe you sell snacks and people want to know about nutrition facts or gluten-free options. These are all worthy of
              their own Q&A on your website. If you’ve got enough product questions, give this a dedicated section, too. </div>
    </div>

</div>





    <?php
    include 'footer.php'
    ?>



<script src="JS/js/bootstrap.bundle.min.js"></script>
</body>
</html>