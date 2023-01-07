var arrLang = {
    /*menu*/
    'en' : {
      'domov': 'Home',
      'information': 'Information',
      'about':'About Us',
      'contact': 'Contact Us',
      'gallery': 'Gallery',

      /*sekcia*/
      'text': 'Welcome to us. From 2023 you will find us in Bratislava in the Staré Mesto. We offer you a unique opportunity to see all marine animals in one place.',
       'read': 'Read More',
       'title1': 'UNIQUENESS.       ORIGINALITY',
       'text2': 'Here you will find a unique variety of exhibits from the sea from all over the world, unique species of jellyfish, sharks, fish or crabs.',
        'title3': 'EVENING, VIEWINGS',
        'text3': 'Evening shows are just one of the many bonuses we offer, the loud sounds of the sea, the sounds of crashing waves and the exotic atmosphere of the evening sea.',
        'title4': ' EXPERIENCE THAT, YOU WONT LOSE',
        'text4': 'Every Friday evening at 19:00 we will introduce you to a new, unique marine addition that you have no chance to see anywhere except in the deep sea',
        'title5': 'NEWS, AND UPDATES',
        'text5': 'For all the latest news and updates, be sure to follow our website and social media for a chance to win a unique free entry for the whole family.',

        /*info*/
        'sub': 'Contentment',
        'sub2': 'Longevity',
        'sub3': 'Exclusives',
        'sub4': 'Swimming with fishes',
        'sub5': 'Photography',
        'sub6': 'Sounds of the ocean',
        'sub7': 'Warm pleasure',
        'sub8': 'Souvenirs',
        'sub9': 'Location',

        'p': 'Several hundred people from all over the world visit us every day and their satisfaction radiates from miles around.',
        'p2': 'We have been in the market for several years and will be for the next few decades.',
        'p3': 'You will find dozens of exclusive pieces that cant be found anywhere else but the deep oceans.',
        'p4': 'We also offer bathing among the animals from which you are separated by a glass wall, so you do not have to worry about an accident.',
        'p5': 'Photography is allowed and completely free of charge, you can take photos with all cameras.',
        'p6': 'Bringing you the opportunity to listen to the sounds of animals living all the way to the bottom of the ocean.',
        'p7': 'After the tour, your taste buds will surely be grateful for a cup of hot chocolate or coffee.',
        'p8': 'Here you can buy unique souvenirs that you wont find anywhere else and make a beautiful tangible souvenir.',
        'p9': 'You can find us in Bratislava in part of Staré Mesto.',

      }
  }

  $(function() {
    $('.translate').click(function() {
      var lang = $(this).attr('id');

      $('.lang').each(function(index, item) {
        $(this).text(arrLang[lang][$(this).attr('key')]);
      });
    });
  });