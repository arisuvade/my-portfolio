<?php
$projects = [
  'pythonApps' => [
    [
      'images' => [
        'images/pythonapp1.png',
        'images/pythonapp1.1.png',
        'images/pythonapp1.2.png',
        'images/pythonapp1.3.png'
      ],
      'description' => '<a href="https://github.com/arisuvade/pyblaster" target="_blank">PyBlaster</a> is a Python-based message spammer tool designed to automate sending messages in various applications. It allows users to efficiently send repetitive or bulk messages, streamlining communication tasks and enhancing productivity. The application features customizable settings to control message frequency and content, making it a versatile tool for automated messaging.'
    ],
    [
      'images' => [
        'images/pythonapp2.png',
        'images/pythonapp2.1.png',
        'images/pythonapp2.2.png',
        'images/pythonapp2.3.png'
      ],
      'description' => '<a href="https://github.com/arisuvade/pyorator" target="_blank">PyOrator</a> is a powerful Python-based speech generator that converts text into natural-sounding speech. Ideal for creating professional-quality voiceovers or enhancing accessibility features, this versatile tool offers customizable voice settings and supports English. With its intuitive, easy-to-use interface and adjustable parameters, PyOrator helps users generate clear, high-quality audio content quickly and efficiently, making it an excellent choice for various applications.'
    ]
  ],
  'websites' => [
    [
      'images' => [
        'images/website1.png'
      ],
      'description' => 'This project showcases a comprehensive data table summarizing the \'Ice Age\' movie series, featuring details such as release years, main characters, settings, antagonists, and box office earnings. The table is designed for easy navigation and quick reference, highlighting the progression and success of each film in the series.'
    ],
    [
      'images' => [
        'images/website2.png',
        'images/website2.1.png',
        'images/website2.2.png',
        'images/website2.3.png'
      ],
      'description' => 'This project presents an immersive Coldplay fan website that offers a rich multimedia experience, including detailed band member profiles, a comprehensive discography, and links to listen to their music. The site features interactive elements such as clickable song titles that lead to YouTube videos and dynamic images of album covers. It provides fans with extensive information about Coldplay, from their formation to their global success, enhancing user engagement through a well-organized and visually appealing design.'
    ]
  ],
  'linuxUtilities' => [
    [
      'images' => [
        'images/linuxutility1.png',
        'images/linuxutility1.1.png'
      ],
      'link' => 'https://github.com/arisuvade/dotfiles',
      'description' => 'This project comprises a collection of <a href="https://github.com/arisuvade/dotfiles" target="_blank">\'Dotfiles\'</a>, essential for customizing and enhancing Linux systems. These configuration files significantly improve user environments by providing personalized settings for shell configurations, editors, and window managers. They serve as a valuable resource for developers seeking to optimize and tailor their development workflows for maximum efficiency.'
    ],
    [
      'images' => [
        'images/linuxutility2.png',
        'images/linuxutility2.1.png'
      ],
      'link' => 'https://github.com/arisuvade/scripts',
      'description' => 'This project features a collection of <a href="https://github.com/arisuvade/scripts" target="_blank">\'Scripts\'</a> for automating tasks in Linux environments. These utility scripts boost productivity by providing automated solutions for common tasks such as file management, system monitoring, and network configuration. They serve as a practical toolkit for developers and system administrators aiming to streamline their operations effectively.'
    ]
  ],
  'miscellaneous' => [
    [
      'images' => [
        'images/miscproject.png',
        'images/miscproject1.png',
        'images/miscproject2.png',
        'images/miscproject3.png',
        'images/miscproject4.png',
        'images/miscproject5.png'
      ],
      'link' => 'https://github.com/arisuvade/programs',
      'description' => 'This project features a collection of diverse <a href="https://github.com/arisuvade/programs" target="_blank">\'programs\'</a> that include various standalone tools and utilities developed to enhance productivity and solve specific problems. These programs cover a wide range of functionalities, making them a versatile toolkit for any developer or user looking to expand their software capabilities.'
    ]
  ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Projects</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous" />
  <style>
    body {
      background: linear-gradient(135deg, #1a1a1a, #1a1a1a, #ff66cc);
      color: #ffffff;
    }

    h1,
    h2 {
      font-weight: bold;
      color: #f0f0f0;
      text-shadow: 2px 2px 4px #000000;
    }

    .project-container {
      margin-top: 20px;
    }

    .project-header {
      padding: 20px;
      background-color: #343a40;
      font-weight: bold;
      text-align: center;
      border-radius: 8px;
      font-size: 2.5rem;
      margin-bottom: 50px;
    }

    .project {
      margin-bottom: 20px;
      background-color: #212529;
      padding: 15px;
      border-radius: 8px;
      box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.5);
    }

    .project img {
      width: 100%;
      height: auto;
      border-radius: 8px;
    }

    .description {
      margin-top: 10px;
      background-color: #343a40;
      padding: 10px;
      border-radius: 8px;
      font-size: 1.1rem;
      line-height: 1.6;
      text-align: justify;
    }

    a {
      color: #ff66cc;
      text-decoration: none;
    }

    a:hover {
      color: #ffffff;
      text-decoration: underline;
    }
  </style>
</head>

<body>
  <div class="container">
    <h1 class="project-header">My Projects</h1>

    <?php foreach ($projects as $category => $items): ?>
      <?php if ($category === 'pythonApps'): ?>
        <div class="project-container">
          <h2>Python Apps</h2>
          <?php foreach ($items as $item): ?>
            <div class="col-md project">
              <div class="row">
                <?php foreach ($item['images'] as $image): ?>
                  <div class="col-3">
                    <img src="<?php echo htmlspecialchars($image); ?>" alt="Python App Image" class="img-fluid">
                  </div>
                <?php endforeach; ?>
              </div>
              <div class="description">
                <?php echo $item['description']; ?>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      <?php elseif ($category === 'websites'): ?>
        <div class="project-container">
          <h2>Websites</h2>
          <?php foreach ($items as $item): ?>
            <div class="col-md-12 project">
              <?php foreach ($item['images'] as $image): ?>
                <img src="<?php echo htmlspecialchars($image); ?>" alt="Website Image" class="img-fluid">
              <?php endforeach; ?>
              <div class="description"><?php echo $item['description']; ?></div>
            </div>
          <?php endforeach; ?>
        </div>
      <?php elseif ($category === 'linuxUtilities'): ?>
        <div class="project-container">
          <h2>Linux Utilities</h2>
          <div class="row">
            <?php foreach ($items as $item): ?>
              <div class="col-md-6 project">
                <?php foreach ($item['images'] as $image): ?>
                  <img src="<?php echo htmlspecialchars($image); ?>" alt="Linux Utility Image" class="img-fluid">
                <?php endforeach; ?>
                <div class="description">
                  <?php echo $item['description']; ?>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      <?php elseif ($category === 'miscellaneous'): ?>
        <div class="project-container">
          <h2>Miscellaneous Projects</h2>
          <div class="row">
            <?php foreach ($items as $item): ?>
              <div class="col-md-12 project">
                <?php foreach ($item['images'] as $image): ?>
                  <img src="<?php echo htmlspecialchars($image); ?>" alt="Miscellaneous Project Image" class="img-fluid">
                <?php endforeach; ?>
                <div class="description">
                  <?php echo $item['description']; ?>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      <?php endif; ?>
    <?php endforeach; ?>
  </div>
</body>

</html>