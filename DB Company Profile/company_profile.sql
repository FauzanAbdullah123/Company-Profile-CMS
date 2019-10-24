-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Okt 2019 pada 08.50
-- Versi server: 10.1.35-MariaDB
-- Versi PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `company_profile`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `desc`, `created_at`, `updated_at`) VALUES
(3, 'Our Vision & Mission', '(V) Our vision to be The most valuable IT Company for supporting human resources and IT Solutions\r\n\r\n(M) To provide high quality and innovative IT solutions in a timely manner to a diverse range of clients.', '2019-09-19 04:28:10', '2019-09-19 04:28:10'),
(4, 'Corporate Values', 'We work hard to build relationships based on TRUST and DISCIPLINE as it\'s a key to providing human resources and IT solutions. And We strive for CONTINOUS IMPROVEMENT in the quality of our work.', '2019-09-19 04:28:41', '2019-09-19 04:28:41'),
(5, 'The Origin of Word \"Arkamaya\"', 'The word \"Arkamaya\" comes from the Sanskrit language and means \"Enlightenment from Heaven\". Starting a business is not an easy thing to do but with enlightenment we found the courage to begin. We hope our employees will develop the same passion so we can grow together into a well-established company', '2019-09-20 08:10:28', '2019-09-20 08:10:28'),
(6, 'Who We Are ?', 'First incorporated as CV. Arkamaya Teknologi Digital in early 2011, within two years, we created another larger business and simplified our name to PT. ARKAMAYA in the hope of becoming more accepted in middle to top level industry.', '2019-09-20 08:11:20', '2019-09-20 08:11:20'),
(14, 'About', 'We are IT Solutions company from Bandung, Indonesia. We design, create, and develop a variety of software and in all matters relating to the application of Information and Communication Technology.', '2019-09-27 03:52:28', '2019-09-27 03:52:28'),
(15, 'Contact', 'Address:\r\nJl. Guntursari Wetan No. 17 Buah Batu, Bandung Jawa Barat, Indonesia 40286\r\n\r\nTelephone :\r\n(022)87325528\r\n\r\nTelephone 2:\r\n(0267)8406552\r\n\r\nEmail :\r\ninfo[at]arkamaya.co.id', '2019-09-27 03:57:05', '2019-10-04 04:00:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `activity_log`
--

CREATE TABLE `activity_log` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `log_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_id` bigint(20) UNSIGNED DEFAULT NULL,
  `subject_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `causer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `causer_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `properties` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `activity_log`
--

INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_id`, `subject_type`, `causer_id`, `causer_type`, `properties`, `created_at`, `updated_at`) VALUES
(4, 'default', 'App\\User model has been created', 3, 'App\\User', 1, 'App\\User', '[]', '2019-10-21 08:49:10', '2019-10-21 08:49:10'),
(5, 'default', 'App\\Category model has been created', 22, 'App\\Category', 1, 'App\\User', '[]', '2019-10-21 09:23:51', '2019-10-21 09:23:51'),
(6, 'default', 'App\\Category model has been updated', 22, 'App\\Category', 1, 'App\\User', '[]', '2019-10-21 09:24:56', '2019-10-21 09:24:56'),
(7, 'default', 'App\\Tag model has been created', 30, 'App\\Tag', 1, 'App\\User', '[]', '2019-10-21 09:42:23', '2019-10-21 09:42:23'),
(8, 'default', 'App\\User model has been updated', 1, 'App\\User', 2, 'App\\User', '[]', '2019-10-23 02:19:25', '2019-10-23 02:19:25'),
(10, 'default', 'App\\User model has been created', 4, 'App\\User', 1, 'App\\User', '[]', '2019-10-23 06:39:22', '2019-10-23 06:39:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `konten` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `articles`
--

INSERT INTO `articles` (`id`, `judul`, `slug`, `konten`, `foto`, `category_id`, `user_id`, `created_at`, `updated_at`) VALUES
(24, 'What is CRUD??', 'what-is-crud', '<p>When we are building APIs, we want our models to provide four basic types of functionality. The model must be able to Create, Read, Update, and Delete resources. Computer scientists often refer to these functions by the acronym CRUD. A model should have the ability to perform at most these four functions in order to be complete. If an action cannot be described by one of these four operations, then it should potentially be a model of its own.</p>\r\n\r\n<p>The CRUD paradigm is common in constructing web applications, because it provides a memorable framework for reminding developers of how to construct full, usable models. For example, let&rsquo;s imagine a system to keep track of library books. In this hypothetical library database, we can imagine that there would be a&nbsp;<code>books</code>&nbsp;resource, which would store&nbsp;<code>book</code>&nbsp;objects. Let&rsquo;s say that the&nbsp;<code>book</code>&nbsp;object looks like this:</p>\r\n\r\n<p>To make this library system usable, we would want to make sure there were clear mechanisms for completing the CRUD operations:</p>\r\n\r\n<p>Create &mdash; This would consist of a function which we would call when a new library book is being added to the catalog. The program calling the function would supply the values for&nbsp;<code>&ldquo;title&rdquo;</code>,&nbsp;<code>&ldquo;author&rdquo;</code>, and&nbsp;<code>&ldquo;isbn&rdquo;</code>. After this function is called, there should be a new entry in the&nbsp;<code>books</code>&nbsp;resource corresponding to this new book. Additionally, the new entry is assigned a unique&nbsp;<code>id</code>, which can be used to access this resource later.</p>\r\n\r\n<p>Read &mdash; This would consist of a function which would be called to see all of the books currently in the catalog. This function call would not alter the books in the catalog - it would simply retrieve the resource and display the results. We would also have a function to retrieve a single book, for which we could supply the title, author, or ISBN. Again, this book would not be modified, only retrieved.</p>\r\n\r\n<p>Update &mdash; There should be a function to call when information about a book must be changed. The program calling the function would supply the new values for&nbsp;<code>&ldquo;title&rdquo;</code>,&nbsp;<code>&ldquo;author&rdquo;</code>, and&nbsp;<code>&ldquo;isbn&rdquo;</code>. After the function call, the corresponding entry in the&nbsp;<code>books</code>&nbsp;resource would contain the new fields supplied.</p>\r\n\r\n<p>Delete &mdash; There should be a function to call to remove a library book from the catalog. The program calling the function would supply one or more values (<code>&ldquo;title&rdquo;</code>,&nbsp;<code>&ldquo;author&rdquo;</code>, and/or&nbsp;<code>&ldquo;isbn&rdquo;</code>) to identify the book, and then this book would be removed from the&nbsp;<code>books</code>&nbsp;resource. After this function is called, the&nbsp;<code>books</code>&nbsp;resource should contain all of the books it had before, except for the one just deleted.</p>\r\n\r\n<h3>CRUD AND REST</h3>\r\n\r\n<p>In a REST environment, CRUD often corresponds to the HTTP methods POST, GET, PUT, and DELETE, respectively. These are the fundamental elements of a persistent storage system.</p>\r\n\r\n<p>Throughout the rest of the article, we will recommend standards and response codes that are typically followed by developers when creating RESTful applications. Conventions may differ so feel free to experiment with different return values and codes as you become comfortable with the CRUD paradigm.</p>\r\n\r\n<p>Imagine we are working with a system that is keeping track of meals and their corresponding prices for a restaurant. Let&rsquo;s look at how we would implement CRUD operations.</p>', 'JtEwA3_1_D07GoP9ZO3rXSVsVndX5kg.png', 9, 1, '2019-09-25 15:02:02', '2019-10-08 18:39:52'),
(25, 'Content Management System (CMS)', 'content-management-system-cms', '<p>A Content Management System (CMS) is an Internet based software that allows you to organize and keep track of text, photos, videos, documents on your website. At Red Flag we provide web-solutions integrating the main open source CMS leaders in the market &ndash; WordPress, Joomla or Drupal &ndash; in order to increase scalability and robustness, ease the ability to deal with maintenance and upgrades, and reduce the overall project cost. As free open source CMS WordPress, Joomla and Drupal instantly provide websites with content editing, publishing and reviewing features through a web-based user friendly interface so the end-user doesn&#39;t need to have any IT skill in order to manage the website&#39;s content. Moreoever thanks to the beauty of open-source there are hundreds of plugins that extend what a CMS does. Therefore the actual functionality of any CMS is nearly limitless.</p>\r\n\r\n<h2>Standard CMS Features (free)</h2>\r\n\r\n<p>On top of basic text editing features &ndash; copy, paste, delete, etc. &ndash; any CMS has the following ones (and more)</p>\r\n\r\n<ul>\r\n	<li><strong>Pages Management</strong>&nbsp;Create / Edit / Publish / Delete &bull; Page</li>\r\n	<li><strong>Text Content</strong>&nbsp;Add / Update / Delete &bull; Text Content.</li>\r\n	<li><strong>Links</strong>&nbsp;Add / Delete &bull; Links.</li>\r\n	<li><strong>Images</strong>&nbsp;Upload / Resize / Delete &bull; Images.</li>\r\n	<li><strong>Videos</strong>&nbsp;Upload / Add / Delete &bull; Videos.</li>\r\n	<li><strong>Basic SEO</strong>&nbsp;Add / Update / Delete &bull; Keywords / Website Description</li>\r\n	<li><strong>Web Traffic Analytics</strong>&nbsp;Add / Update / Delete &bull; Google Analytics / Other Analytics</li>\r\n	<li><strong>Examples of free plugins</strong>&nbsp;Banner Management, Google Maps, Social Networking, etc. Whenever a suitable plugin is found for a project we simply use it rather than re-inventing the wheel.</li>\r\n	<li><strong>Templates</strong>&nbsp;Upload / Activate &bull; Template. Some templates are so well designed that only basic customisation &ndash; logo, colours &ndash; is the only design bit left to do</li>\r\n</ul>\r\n\r\n<h2><img src=\"http://redflag.ie/imgs/icowordpress.png\" />&nbsp;WordPress (Free Open Source CMS)</h2>\r\n\r\n<ul>\r\n	<li><strong>Full standards compliance</strong>&nbsp;WordPress generated code is in full compliance with the standards of the&nbsp;<a href=\"http://w3.org/\" target=\"_blank\">W3C</a>, which is important not only for interoperability with today&#39;s browser but also for forward compatibility with the tools of the next generation.</li>\r\n	<li><strong>Themes / Templates</strong>&nbsp;WordPress comes with a full theme system which makes designing any website straight forward.</li>\r\n	<li><strong>SPAM Protection</strong>&nbsp;Out of the box WordPress comes with very robust tools such as an integrated blacklist and open proxy checker to manage and eliminate comment spam on your blog.</li>\r\n	<li><strong>Multiple authors</strong>&nbsp;WordPress&#39; highly advanced user system allows up to 10 levels of users, with different levels having different (and configurable) privileges with regard to publishing, editing, options, and other users.</li>\r\n	<li><strong>More</strong>&nbsp;<a href=\"http://wordpress.org/about/features/\" target=\"_blank\">WordPress Key Features</a></li>\r\n</ul>\r\n\r\n<h2><img src=\"http://redflag.ie/imgs/icojoomla.png\" />&nbsp;Joomla (Free Open Source CMS)</h2>\r\n\r\n<ul>\r\n	<li><strong>Template Management</strong>&nbsp;Templates in Joomla are a powerful way to make your site look exactly the way you want and either use a single template for the entire site or a separate template for each site section.</li>\r\n	<li><strong>SPAM Protection</strong>&nbsp;On public Web sites, built-in e-mail cloaking protects email addresses from spambots.</li>\r\n	<li><strong>User Management</strong>&nbsp;Joomla has a registration system that allows users to configure personal options. There are nine user groups with various types of permissions on what users are allowed to access, edit, publish and administrate.</li>\r\n	<li><strong>Banner Management</strong>&nbsp;It&#39;s easy to set up banners on your Web site using the Banner Manager, starting with creating a client profile. Once you add campaigns and as many banners as you need, you can set impression numbers, special URLs, and more.</li>\r\n	<li><strong>More</strong>&nbsp;<a href=\"http://www.joomla.org/core-features.html\" target=\"_blank\">Joomla Features Overview</a></li>\r\n</ul>\r\n\r\n<h2><img src=\"http://redflag.ie/imgs/icodrupal.png\" />&nbsp;Drupal (Free Open Source CMS)</h2>\r\n\r\n<ul>\r\n	<li><strong>Organize &amp; Find</strong>&nbsp;Drupal comes with many tools to help you organize, structure, find and re-use your content.</li>\r\n	<li><strong>Creative Content</strong>&nbsp;Manage content with an easy-to-use web interface. Drupal&#39;s flexibility handles countless content types including video, text, blog, podcasts, and polls with robust user management, menu handling, real-time statistics and optional revision control.</li>\r\n	<li><strong>Design &amp; Display</strong>&nbsp;Drupal&#39;s presentation layer allows designers to create templates. An existing Drupal template can be used for your site giving it an instant identity.</li>\r\n	<li><strong>Users Administration</strong>&nbsp;Drupal comes with great options for new user accounts and user permissions. Users can be assigned one or more roles, and each role can be set up with fine-grained permissions allowing users view and create only what the administrator permits.</li>\r\n	<li><strong>More</strong>&nbsp;<a href=\"http://drupal.org/features\" target=\"_blank\">Drupal CMS Benefits</a></li>\r\n</ul>\r\n\r\n<h2>What CMS?</h2>\r\n\r\n<p>That depends on your existing website and where you want to go. At Red Flag after a bit of search we show our customers what the different options are and assess them in order to come up with a cost efficient solution that dramatically reduces time-to-market. As a matter of fact we spend more time analyzing than coding in order to find the simplest and most elegant solution. And by the way we don&#39;t bill our customers for all the free stuff listed above but for the added value we bring.</p>', 'IRfCr3_content-management-system-2.png', 10, 1, '2019-09-25 15:06:05', '2019-09-25 15:06:51'),
(26, 'What is Laravel Framework', 'what-is-laravel-framework', '<h2>What is a Framework?</h2>\r\n\r\n<p>Before we ive into explaining Laravel, we need to understand what is a framework.</p>\r\n\r\n<p>In general, a Framework is a set of conceptual structure and guidelines, used to build something useful.</p>\r\n\r\n<h2>Software Framework</h2>\r\n\r\n<p>According to&nbsp;<a href=\"https://en.wikipedia.org/wiki/Software_framework\">wikipedia</a>, a software framework is an abstraction in which software providing generic functionality can be selectively changed by additional user-written code, thus providing application-specific software. A software framework provides a standard way to build and deploy applications.</p>\r\n\r\n<p>In simple terms, a software framework is a structure which you can use to build something. It allows you to use different components, communicate to external APIs and define the structure of your application.</p>\r\n\r\n<p>A software framework allows you to:</p>\r\n\r\n<ol>\r\n	<li><strong>Reduce Complexity</strong>: A software framework make it easier to deal with complex situations and break them into different chunks.</li>\r\n	<li><strong>Clean Code</strong>: A software framework helps you to write clean and usable code.</li>\r\n	<li><strong>Testing and Debugging</strong>: A software framework make testing easier and debugging fun.</li>\r\n	<li><strong>Coding Guidelines</strong>: A software framework forces strict guideline to follow for your team mates that promote the consistent codebase with less bugs.</li>\r\n	<li><strong>Scaling</strong>: A software framework helps you to scale on demand. No matter how fast you application grow, frameworks make it easier to scale on demand.</li>\r\n</ol>\r\n\r\n<h2>Web Framework</h2>\r\n\r\n<p>A web framework or web application framework is just another software framework which helps you to build Web Applications including web services and APIs. A web framework enables you to make components that are re-usable and perform daily tasks more easily.</p>\r\n\r\n<p>PHP Framework</p>\r\n\r\n<p>A PHP framework is a set of PHP classes which help you build the web application with ease.</p>\r\n\r\n<h2>What is Laravel?</h2>\r\n\r\n<p>Laravel is one of the most popular PHP framework used across the globe to build web application ranging from small to big projects. Laravel is the choice of professional developers because of its performance, features, and scalability.</p>\r\n\r\n<p>Laravel follows&nbsp;<a href=\"https://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93controller\">MVC</a>&nbsp;(Model View Controller) structure which makes it easy to learn and rapidly prototype the web applications. Laravel takes the pain out of web application development by providing built-in features like authentication, mail, routing, sessions, and the list goes on.</p>\r\n\r\n<p>Laravel is so easy to customize that you can create your own project structure which meets the demand of your web application. With Laravel&rsquo;s beautiful and elegant syntax, you can write code which is self-explanatory and expressive.</p>\r\n\r\n<p>Laravel was created by&nbsp;<a href=\"https://twitter.com/taylorotwell\">Taylor Otwell</a>&nbsp;back in 2011, since then he has evolved this framework a lot and making it compatible with the latest web technologies.</p>\r\n\r\n<h2>Key Features of Laravel Framework</h2>\r\n\r\n<p>Laravel framework possesses a large ecosystem which includes features like instant deployment, routing, ORM, DB query, Routing, Templating and list goes one.</p>\r\n\r\n<p>Here are some of the features of the Laravel framework which set the Laravel framework apart from other frameworks.</p>\r\n\r\n<h3>1. Dependency Management</h3>\r\n\r\n<p>Dependency management is one of the best features of Laravel, understanding the functionality of the service container (IoC) is the core part to learn modern web applications. In Laravel, IoC (Inversion of Control) or Service Container is the most powerful tool to manage class dependencies.</p>\r\n\r\n<p>Dependency Injection is a method to remove the hard-coded classes and injecting them using a tool like Composer.</p>\r\n\r\n<h3>2. Modularity</h3>\r\n\r\n<p>Modularity is the degree to which a web application&rsquo;s components can be separated and recombined. You can split the business logic into different modules which all work together to make a web application functional.</p>\r\n\r\n<p>Laravel is designed to make a modular application, even Laravel itself is a collection of components. Using modular structure you can design and develop a large-scale enterprise application with ease. Laravel provides very simple guidelines to create modules or packages in Laravel.</p>\r\n\r\n<h3>3. Authentication</h3>\r\n\r\n<p>Authentication is an integral part of any modern web application. Writing authentication in other frameworks such as Codeigniter can take a lot of your development time. Laravel provides authentication out of the box, with running a simple command you can create a fully functional authentication system.</p>\r\n\r\n<p>Laravel also provide handy documentation to implement your own authentication.</p>\r\n\r\n<h3>4. Caching</h3>\r\n\r\n<p>Caching is a technique to store data in a temporary storage location and can be retrieved quickly when needed. Mostly caching is used to increase the performance of the application. Laravel cache almost all data from view to routes. Which helps Laravel to decrease the processing time thus increasing the performance.</p>\r\n\r\n<h3>5. Routing</h3>\r\n\r\n<p>Routing in Laravel very easy to understand and much like the Ruby on Rails framework. Laravel routing can be used to create a restful application with ease. You can group routes, name them, apply filters to them and bind your model data to them.</p>\r\n\r\n<p>Laravel routes can use to create search engines friendly URLs with great flexibility and control.</p>\r\n\r\n<h3>6. Restful Controllers</h3>\r\n\r\n<p>Laravel&rsquo;s restful controllers enable you to separate logic behind serving the GET or POST requests. You can also create resource controllers which can be used to create CRUD easily. Later you can bind the resource controller to route to serve all CRUD routes automatically.</p>\r\n\r\n<h3>7. Testing and Debugging</h3>\r\n\r\n<p>Laravel comes with PHPUnit out of the box to test your applications. Laravel was built with testing in mind thus support testing and debugging too much extent.</p>\r\n\r\n<h3>8. Template Engine</h3>\r\n\r\n<p><strong>Blade</strong>&nbsp;is the templating engine of Laravel. Blade provides a handful amount of helper function to format your data within views. Blade also implement the template inheritance which you can use to create complex layouts. All Blade templates use file extension&nbsp;<code>.blade.php</code>.</p>\r\n\r\n<h3>9. Database Query Builder</h3>\r\n\r\n<p>Laravel&rsquo;s database query builder provides a convenient way to create database queries. It comes with tons of helper functions which you can use to filter down your data. You can easily implement complex queries using joins in Laravel.</p>\r\n\r\n<p>Laravel&rsquo;s query builder syntax is easy to understand and make writing database queries fun.</p>\r\n\r\n<h3>10. Eloquent ORM</h3>\r\n\r\n<p>Laravel is based on Eloquent ORM which provides support for almost all database engines. It works perfectly with MySQL and SQLite. Laravel provides comprehensive documentation to all Eloquent functions.</p>\r\n\r\n<h3>11. File System</h3>\r\n\r\n<p>Laravel provides support for multiple file systems. You can use a local file system or any cloud-based like Amazon S3. You can select which file system you want to use by changing the options in the config/filesystems.php file.</p>\r\n\r\n<h3>12. Security</h3>\r\n\r\n<p>Laravel provides an intuitive way to create secure web applications. Laravel store all passwords as a hash instead of plain text passwords. Laravel use BCrytp to hash passwords. Laravel provides security from SQL injection attacks and also escape all user inputs to avoid the injection of any script tags.</p>\r\n\r\n<h3>13. Artisan</h3>\r\n\r\n<p>Laravel&rsquo;s command-line tool is called Artisan. Laravel comes with dozens of pre-built commands which you can run on a command-line interface to perform tasks. You can avoid most repetitive task during the development process using this tool.</p>\r\n\r\n<h3>14. Migration System</h3>\r\n\r\n<p>Laravel provides migration system just like Ruby on Rails to create database structures. You can use PHP language to write migration which will create your database structure instead of using SQL. You can create databases, tables, and indices using the migrations. If you want to change table column you don&rsquo;t have to repeat creating the table again instead you can run a new migration.</p>\r\n\r\n<h3>15. Envoy</h3>\r\n\r\n<p>Using Envoy you can run the most common task on your remote servers from within your application. It also allows you to set up tasks for deployment.</p>\r\n\r\n<h3>16. Localization</h3>\r\n\r\n<p>Laravel enables you to create a multilingual application at the same time you are building your application. You can access the strings in different languages using&nbsp;<code>trans()</code>&nbsp;helper.</p>\r\n\r\n<h2>Wrapup</h2>\r\n\r\n<p>Laravel has proven itself as the best PHP framework due to all the above features and constant improvement. Laravel helps to create a powerful application using simple, expressive way, that&rsquo;s why Laravel is the most used PHP framework.</p>', 'rw6uE4_what-is-laravel-and-why-you-should-learn-it.jpg', 9, 1, '2019-09-30 13:03:24', '2019-09-30 13:03:24'),
(27, 'What is Codeigniter Framework ?', 'what-is-codeigniter-framework', '<h2>What is CodeIgniter?</h2>\r\n\r\n<p>CodeIgniter is a PHP MVC framework for developing applications rapidly. CodeIgniter provides out of the box libraries for connecting to the database and performing various operations. Like sending emails, uploading files, managing sessions, etc.</p>\r\n\r\n<h2>CodeIgniter Features</h2>\r\n\r\n<p>Let&#39;s see some of the features that make CodeIgniter great. The following list is not exhaustive but gives you an idea of what to expect when working with CodeIgniter.</p>\r\n\r\n<p><strong>Small footprint</strong></p>\r\n\r\n<p>The entire source code for CodeIgniter framework is close to 2MB. This makes it easy to master CodeIgniter and how it works. It also simplifies deploying and updating it.</p>\r\n\r\n<p><strong>Blazing fast</strong></p>\r\n\r\n<p>Users tend to favor applications that load very fast. If you have worked with some of the modern frameworks, then you will realize that they take less than one second to load just after installation. CodeIgniter, you can loads on average around less than 50ms. The extra time spent optimizing like is the case in another framework is freed up when you are working with CodeIgniter.</p>\r\n\r\n<p><strong>Loosely coupled</strong></p>\r\n\r\n<p>The built-in features are designed to work independently without relying too much on other components. This makes it easy to maintain and make upgrades</p>\r\n\r\n<p><strong>MVC Architecture</strong></p>\r\n\r\n<p>The framework uses the Model-View-Controller architectural design. It is industry standard practices when working with web applications. MVC separates the data, business logic, and presentation.</p>\r\n\r\n<p><strong>Excellent documentation:</strong></p>\r\n\r\n<p>The framework is well documented, and there are good books, tutorials and answered forum questions on CodeIgniter. This means whatever challenge that you have, chances are someone has already encountered the problem, solved it and the solution is out there for you.</p>\r\n\r\n<p><strong>Application specific built-in components:</strong></p>\r\n\r\n<p>CodeIgniter has components for sending email, database management, session management and many more as you will discover as we continue with the tutorials.</p>\r\n\r\n<p><strong>Extendable:</strong></p>\r\n\r\n<p>CodeIgniter comes with some libraries, and helpers out of the box. If what you want is not there or you would like to implement an existing feature your way. Then you can do so easily by creating your libraries, helpers, packages, etc.</p>\r\n\r\n<p><strong>Short learning curve:</strong></p>\r\n\r\n<p>CodeIgniter is easy to master for anyone who is already familiar with PHP. Within a very short time, the student can start developing professional applications using CodeIgniter.</p>\r\n\r\n<h2>How CodeIgniter Works?</h2>\r\n\r\n<p>CodeIgniter is an MVC framework. MVC stands for Model View Controller. When a user requests a resource, the controller responds first. The controller understands the user request then request the necessary data if necessary.</p>\r\n\r\n<p>For example, if you want to retrieve a customer with the id= 3, the controller will receive your request, then request the model to retrieve the record with the id of 3. The model returns the record to the controller. The controller then forwards the result to the view which formats it into a human-readable format. Then the results are returned to the user in the browser.</p>\r\n\r\n<p>The following image shows how CodeIgniter works:</p>\r\n\r\n<p><a href=\"https://www.guru99.com/images/1/012419_1105_WhatisCodeI1.png\"><img alt=\"\" src=\"https://www.guru99.com/images/1/012419_1105_WhatisCodeI1.png\" /></a></p>\r\n\r\n<h2>CodeIgniter Release History</h2>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>2006</td>\r\n			<td>First version of CodeIgniter</td>\r\n		</tr>\r\n		<tr>\r\n			<td>2009</td>\r\n			<td>ExpressionEngine 2.0 launched</td>\r\n		</tr>\r\n		<tr>\r\n			<td>2014</td>\r\n			<td>British Columbia Institute of Technology took ownership of the project</td>\r\n		</tr>\r\n		<tr>\r\n			<td>2019</td>\r\n			<td>Stable version 4 expected to launch</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h2>Summary</h2>\r\n\r\n<ul>\r\n	<li>CodeIgniter is a PHP framework for developing applications rapidly</li>\r\n	<li>The entire source code for CodeIgniter is close to 2MB. This makes it easy to master CodeIgniter and how it works</li>\r\n	<li>The built-in features of CodeIgniter are designed to work independently without relying too much on other components</li>\r\n	<li>The framework uses the Model-View-Controller architectural design</li>\r\n	<li>The framework is well documented, and they are good books, tutorials and answered forum questions on CodeIgniter</li>\r\n	<li>CodeIgniter comes with some libraries, and helpers users out of the box</li>\r\n	<li>CodeIgniter is easy to master for anyone who is already familiar with PHP</li>\r\n	<li>In CodeIgniter user requests a resource, the controller responds first. The controller understands the user request then request the necessary data if it is important</li>\r\n</ul>', 'QkVBTF_codeigniter.png', 9, 1, '2019-09-30 13:06:48', '2019-09-30 13:06:48'),
(28, 'What is PHP ?', 'what-is-php', '<h2>What is PHP?</h2>\r\n\r\n<p>PHP is a server side scripting language. that is used to develop Static websites or Dynamic websites or Web applications. PHP stands for Hypertext Pre-processor, that earlier stood for Personal Home Pages.</p>\r\n\r\n<p>PHP scripts can only be interpreted on a server that has PHP installed.</p>\r\n\r\n<p>The client computers accessing the PHP scripts require a web browser only.</p>\r\n\r\n<p>A PHP file contains PHP tags and ends with the extension &quot;.php&quot;.</p>\r\n\r\n<p>In this tutorial, you will learn-</p>\r\n\r\n<ul>\r\n	<li><a href=\"https://www.guru99.com/what-is-php-first-php-program.html#2\">What is a Scripting Language?</a></li>\r\n	<li><a href=\"https://www.guru99.com/what-is-php-first-php-program.html#1\">Scripting VS Programming Language</a></li>\r\n	<li><a href=\"https://www.guru99.com/what-is-php-first-php-program.html#9\">What does PHP stand for?</a></li>\r\n	<li><a href=\"https://www.guru99.com/what-is-php-first-php-program.html#10\">Php Syntax</a></li>\r\n	<li><a href=\"https://www.guru99.com/what-is-php-first-php-program.html#3\">Why use PHP?</a></li>\r\n	<li><a href=\"https://www.guru99.com/what-is-php-first-php-program.html#4\">What is PHP used for &amp; Market share</a></li>\r\n	<li><a href=\"https://www.guru99.com/what-is-php-first-php-program.html#5\">PHP vs ASP.NET VS JSP VS CFML</a></li>\r\n	<li><a href=\"https://www.guru99.com/what-is-php-first-php-program.html#6\">PHP File Extensions</a></li>\r\n	<li><a href=\"https://www.guru99.com/what-is-php-first-php-program.html#7\">PHP Hello world</a></li>\r\n</ul>\r\n\r\n<h2>What is a Scripting Language?</h2>\r\n\r\n<p>A script is a set of programming instructions that is interpreted at runtime.</p>\r\n\r\n<p>A scripting language is a language that interprets scripts at runtime. Scripts are usually embedded into other software environments.</p>\r\n\r\n<p>The purpose of the scripts is usually to enhance the performance or perform routine tasks for an application.</p>\r\n\r\n<p>Server side scripts are interpreted on the server while client side scripts are interpreted by the client application.</p>\r\n\r\n<p>PHP is a server side script that is interpreted on the server while<a href=\"https://www.guru99.com/interactive-javascript-tutorials.html\" onclick=\"ga(\'send\', \'event\', \'internal_linking\', \'What is PHP? Write your first PHP Program\', \'What is PHP? Write your first PHP Program\');\">&nbsp;JavaScript&nbsp;</a>is an example of a client side script that is interpreted by the client browser. Both PHP and JavaScript can be embedded into HTML pages.</p>\r\n\r\n<h2>Programming Language Vs Scripting Language</h2>\r\n\r\n<table border=\"1\">\r\n	<tbody>\r\n		<tr>\r\n			<td><strong>Programming language</strong></td>\r\n			<td><strong>Scripting language</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Has all the features needed to develop complete applications.</td>\r\n			<td>Mostly used for routine tasks</td>\r\n		</tr>\r\n		<tr>\r\n			<td>The code has to be compiled before it can be executed</td>\r\n			<td>The code is usually executed without compiling</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Does not need to be embedded into other languages</td>\r\n			<td>Is usually embedded into other software environments.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h2>What does PHP stand for?</h2>\r\n\r\n<p>PHP means -&nbsp;<strong>Personal Home Page</strong>, but it now stands for the recursive backronym PHP: Hypertext Preprocessor.</p>\r\n\r\n<p>PHP code may be embedded into HTML code, or it can be used in combination with various web template systems, web content management system and web frameworks.</p>\r\n\r\n<h2>Php Syntax</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://www.guru99.com/images/2013/04/php_code.png\"><img alt=\"What is PHP? Write your first PHP Program\" src=\"https://www.guru99.com/images/2013/04/php_code.png\" title=\"What is PHP? Write your first PHP Program\" /></a></p>\r\n\r\n<p>A PHP file can also contain tags such as HTML and client side scripts such as JavaScript.</p>\r\n\r\n<ul>\r\n	<li><strong>HTML</strong>&nbsp;<strong>is an added advantage</strong>&nbsp;when learning PHP Language. You can even learn PHP without knowing HTML but it&rsquo;s recommended you at least know the basics of HTML.</li>\r\n	<li><strong>Database management systems</strong>&nbsp;DBMS for database powered applications.</li>\r\n	<li>For more advanced topics such as interactive applications and web services, you will need&nbsp;<strong>JavaScript and XML</strong>.</li>\r\n</ul>\r\n\r\n<p>The flowchart diagram shown below illustrates the basic architecture of a PHP web application and how the server handles the requests.</p>\r\n\r\n<p><a href=\"https://www.guru99.com/images/2013/04/php_app_flowchart.jpg\"><img alt=\"What is PHP? Write your first PHP Program\" src=\"https://www.guru99.com/images/2013/04/php_app_flowchart.jpg\" title=\"What is PHP? Write your first PHP Program\" /></a></p>\r\n\r\n<p>Why use PHP?</p>\r\n\r\n<p>You have obviously head of a number of programming languages out there; you may be wondering why we would want to use PHP as our poison for the web programming. Below are some of the compelling reasons.</p>\r\n\r\n<ul>\r\n	<li>PHP is&nbsp;<strong>open source and free.</strong></li>\r\n	<li>Short learning curve compared to other languages such as JSP, ASP etc.</li>\r\n	<li>Large community document</li>\r\n	<li>Most web hosting servers support PHP by default unlike other languages such as ASP that need IIS. This makes PHP a cost effective choice.</li>\r\n	<li>PHP is regular updated to keep abreast with the latest technology trends.</li>\r\n	<li>Other benefit that you get with PHP is that it&rsquo;s a&nbsp;<strong>server side scripting language</strong>; this means you only need to install it on the server and client computers requesting for resources from the server do not need to have PHP installed; only a web browser would be enough.</li>\r\n	<li>PHP has&nbsp;<strong>in built support for working hand in hand with MySQL</strong>; this doesn&rsquo;t mean you can&rsquo;t use PHP with other database management systems. You can still use PHP with\r\n	<ul>\r\n		<li>Postgres</li>\r\n		<li>Oracle</li>\r\n		<li>MS<a href=\"https://www.guru99.com/sql.html\" onclick=\"ga(\'send\', \'event\', \'internal_linking\', \'What is PHP? Write your first PHP Program\', \'What is PHP? Write your first PHP Program\');\">&nbsp;SQL&nbsp;</a>Server</li>\r\n		<li>ODBC etc.</li>\r\n	</ul>\r\n	</li>\r\n	<li>PHP is&nbsp;<strong>cross platform;</strong>&nbsp;this means you can deploy your application on a number of different operating systems such as windows, Linux, Mac OS etc.</li>\r\n</ul>\r\n\r\n<h2>What is PHP used for &amp; Market share</h2>\r\n\r\n<p>In terms of market share, there are over 20 million websites and application on the internet developed using PHP scripting language.</p>\r\n\r\n<p>This may be attributed to the points raised above;</p>\r\n\r\n<p>The diagram below shows some of the popular sites that use PHP</p>\r\n\r\n<p><a href=\"https://www.guru99.com/images/2013/04/popular_php_sites.jpg\"><img alt=\"What is PHP? Write your first PHP Program\" src=\"https://www.guru99.com/images/2013/04/popular_php_sites.jpg\" title=\"What is PHP? Write your first PHP Program\" /></a></p>\r\n\r\n<h2>PHP vs Asp.Net VS JSP VS CFML</h2>\r\n\r\n<p><a href=\"https://www.guru99.com/asp-net-tutorial.html\" onclick=\"ga(\'send\', \'event\', \'internal_linking\', \'What is PHP? Write your first PHP Program\', \'What is PHP? Write your first PHP Program\');\">ASP</a>&nbsp;&ndash; Active Server Pages,&nbsp;<a href=\"https://www.guru99.com/jsp-tutorial.html\">JSP&nbsp;</a>&ndash; Java Server Pages, CFML &ndash; Cold Fusion Markup language The table below compares the various server side scripting languages with PHP</p>\r\n\r\n<table border=\"1\">\r\n	<tbody>\r\n		<tr>\r\n			<th><strong>FEATURE</strong></th>\r\n			<th><strong>PHP</strong></th>\r\n			<th><strong>ASP</strong></th>\r\n			<th><strong>JSP</strong></th>\r\n			<th><strong>CFML</strong></th>\r\n		</tr>\r\n		<tr>\r\n			<td>Learning curve</td>\r\n			<td>short</td>\r\n			<td>Longer than PHP</td>\r\n			<td>Longer than PHP</td>\r\n			<td>Longer than PHP</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Web hosting</td>\r\n			<td>Supported by almost all hosting servers</td>\r\n			<td>Needs dedicated server</td>\r\n			<td>Fairly supported</td>\r\n			<td>Needs dedicated server</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Open source</td>\r\n			<td>Yes</td>\r\n			<td>No</td>\r\n			<td>Yes</td>\r\n			<td>Both commercial and open source</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Web services support</td>\r\n			<td>Built in</td>\r\n			<td>Uses the .NET framework</td>\r\n			<td>Uses add on libraries</td>\r\n			<td>Built in</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Integration with HTML</td>\r\n			<td>Easy</td>\r\n			<td>Fairly complex</td>\r\n			<td>Fairly complex</td>\r\n			<td>Easy</td>\r\n		</tr>\r\n		<tr>\r\n			<td>MySQL support</td>\r\n			<td>Native</td>\r\n			<td>Needs third party drivers</td>\r\n			<td>Needs third party drivers</td>\r\n			<td>Current version has native support. Older versions use ODBC</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Easily extended by other languages</td>\r\n			<td>Yes</td>\r\n			<td>No</td>\r\n			<td>Extended using Java classes and libraries.</td>\r\n			<td>Yes</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><strong>&nbsp;</strong></p>\r\n\r\n<h2>PHP File Extensions</h2>\r\n\r\n<p><em>File extension and Tags</em>&nbsp;In order for the&nbsp;<strong>server</strong>&nbsp;to&nbsp;<strong>identify</strong>&nbsp;our&nbsp;<strong>PHP</strong>&nbsp;<strong>files</strong>&nbsp;and&nbsp;<strong>scripts</strong>, we must&nbsp;<strong>save</strong>&nbsp;the&nbsp;<strong>file</strong>&nbsp;with the&nbsp;<strong>&ldquo;.php&rdquo; extension</strong>. Older PHP file extensions include</p>\r\n\r\n<ul>\r\n	<li>.phtml</li>\r\n	<li>.php3</li>\r\n	<li>.php4</li>\r\n	<li>.php5</li>\r\n	<li>.phps</li>\r\n</ul>\r\n\r\n<p>PHP was designed to work with HTML, and as such, it can be embedded into the HTML code.</p>\r\n\r\n<p><a href=\"https://www.guru99.com/images/2013/04/php_html_code.jpg\"><img alt=\"What is PHP? Write your first PHP Program\" src=\"https://www.guru99.com/images/2013/04/php_html_code.jpg\" title=\"What is PHP? Write your first PHP Program\" /></a></p>\r\n\r\n<p>You can create PHP files without any html tags and that is called Pure PHP file .</p>\r\n\r\n<p>The server interprets the PHP code and outputs the results as HTML code to the web browsers.</p>\r\n\r\n<p>In order for the server to identify the PHP code from the HTML code, we must always enclose the PHP code in PHP tags.</p>\r\n\r\n<p>A PHP tag starts with the less than symbol followed by the question mark and then the words &ldquo;php&rdquo;.</p>\r\n\r\n<p>PHP is a case sensitive language, &ldquo;VAR&rdquo; is not the same as &ldquo;var&rdquo;.</p>\r\n\r\n<p>The PHP tags themselves are not case-sensitive, but it is strongly recommended that we use lower case letter. The code below&nbsp;&nbsp; illustrates the above point.</p>\r\n\r\n<pre>\r\n&lt;?php &hellip; ?&gt;</pre>\r\n\r\n<p>We will be referring to the PHP lines of code as statements. PHP statements end with a semi colon (;). If you only have one statement, you can omit the semi colon. If you have more than one statement, then you must end each line with a semi colon. For the sake of consistency, it is recommended that you always end your statement(s) with a semi colon. &nbsp;PHP scripts are executed on the server. The output is returned in form of HTML.</p>\r\n\r\n<h2>PHP Hello world</h2>\r\n\r\n<p>The program shown below is a basic PHP application that outputs the words &ldquo;Hello World!&rdquo; When viewed in a web browser.</p>\r\n\r\n<pre>\r\n&lt;?php\r\necho &quot;Hello world&quot;;\r\n?&gt;</pre>\r\n\r\n<p><strong>Output:</strong></p>\r\n\r\n<pre>\r\nHello world</pre>\r\n\r\n<h2>Summary</h2>\r\n\r\n<ul>\r\n	<li>PHP stands for Hypertext pre-processor</li>\r\n	<li>PHP is a server side scripting language. This means that it is executed on the server. The client applications do not need to have PHP installed.</li>\r\n	<li>PHP files are saved with the &quot;.php&quot; file extension, and the PHP development code is enclosed in tags.</li>\r\n	<li>PHP is open source and cross platform</li>\r\n</ul>', 'JHBb0Y_php.png', 8, 1, '2019-09-30 13:10:26', '2019-09-30 13:10:26');
INSERT INTO `articles` (`id`, `judul`, `slug`, `konten`, `foto`, `category_id`, `user_id`, `created_at`, `updated_at`) VALUES
(29, 'What is AJAX Jquery ?', 'what-is-ajax-jquery', '<p>AJAX is an acronym standing for Asynchronous JavaScript and XML and this technology helps us to load data from the server without a browser page refresh.</p>\r\n\r\n<p>If you are new with AJAX, I would recommend you go through our&nbsp;<a href=\"https://www.tutorialspoint.com/ajax/index.htm\">Ajax Tutorial</a>&nbsp;before proceeding further.</p>\r\n\r\n<p>JQuery is a great tool which provides a rich set of AJAX methods to develop next generation web application.</p>\r\n\r\n<h2>Loading Simple Data</h2>\r\n\r\n<p>This is very easy to load any static or dynamic data using JQuery AJAX. JQuery provides&nbsp;<strong>load()</strong>&nbsp;method to do the job &minus;</p>\r\n\r\n<h3>Syntax</h3>\r\n\r\n<p>Here is the simple syntax for&nbsp;<strong>load()</strong>&nbsp;method &minus;</p>\r\n\r\n<pre>\r\n<strong>[selector].</strong>load( URL, [data], [callback] );\r\n</pre>\r\n\r\n<p>Here is the description of all the parameters &minus;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>URL</strong>&nbsp;&minus; The URL of the server-side resource to which the request is sent. It could be a CGI, ASP, JSP, or PHP script which generates data dynamically or out of a database.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>data</strong>&nbsp;&minus; This optional parameter represents an object whose properties are serialized into properly encoded parameters to be passed to the request. If specified, the request is made using the&nbsp;<strong>POST</strong>&nbsp;method. If omitted, the&nbsp;<strong>GET</strong>&nbsp;method is used.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>callback</strong>&nbsp;&minus; A callback function invoked after the response data has been loaded into the elements of the matched set. The first parameter passed to this function is the response text received from the server and second parameter is the status code.</p>\r\n	</li>\r\n</ul>\r\n\r\n<h3>Example</h3>\r\n\r\n<p>Consider the following HTML file with a small JQuery coding &minus;</p>\r\n\r\n<p><a href=\"http://tpcg.io/n4DZhm\" rel=\"nofollow\" target=\"_blank\">Live Demo</a></p>\r\n\r\n<pre>\r\n&lt;html&gt;\r\n   &lt;head&gt;\r\n      &lt;title&gt;The jQuery Example&lt;/title&gt;\r\n      &lt;script type = &quot;text/javascript&quot; \r\n         src = &quot;https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js&quot;&gt;\r\n      &lt;/script&gt;\r\n		\r\n      &lt;script type = &quot;text/javascript&quot; language = &quot;javascript&quot;&gt;\r\n         $(document).ready(function() {\r\n            $(&quot;#driver&quot;).click(function(event){\r\n               $(&#39;#stage&#39;).load(&#39;/jquery/result.html&#39;);\r\n            });\r\n         });\r\n      &lt;/script&gt;\r\n   &lt;/head&gt;\r\n	\r\n   &lt;body&gt;\r\n      &lt;p&gt;Click on the button to load /jquery/result.html file &minus;&lt;/p&gt;\r\n		\r\n      &lt;div id = &quot;stage&quot; style = &quot;background-color:cc0;&quot;&gt;\r\n         STAGE\r\n      &lt;/div&gt;\r\n		\r\n      &lt;input type = &quot;button&quot; id = &quot;driver&quot; value = &quot;Load Data&quot; /&gt;\r\n   &lt;/body&gt;\r\n&lt;/html&gt;</pre>\r\n\r\n<p>Here&nbsp;<strong>load()</strong>&nbsp;initiates an Ajax request to the specified URL&nbsp;<strong>/jquery/result.html</strong>&nbsp;file. After loading this file, all the content would be populated inside &lt;div&gt; tagged with ID&nbsp;<em>stage</em>. Assuming, our /jquery/result.html file has just one HTML line &minus;</p>\r\n\r\n<pre>\r\n&lt;h1&gt;THIS IS RESULT...&lt;/h1&gt;\r\n</pre>\r\n\r\n<p>When you click the given button, then result.html file gets loaded.</p>\r\n\r\n<p>Getting JSON Data</p>\r\n\r\n<p>There would be a situation when server would return JSON string against your request. JQuery utility function&nbsp;<strong>getJSON()</strong>&nbsp;parses the returned JSON string and makes the resulting string available to the callback function as first parameter to take further action.</p>\r\n\r\n<h3>Syntax</h3>\r\n\r\n<p>Here is the simple syntax for&nbsp;<strong>getJSON()</strong>&nbsp;method &minus;</p>\r\n\r\n<pre>\r\n<strong>[selector].</strong>getJSON( URL, [data], [callback] );\r\n</pre>\r\n\r\n<p>Here is the description of all the parameters &minus;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>URL</strong>&nbsp;&minus; The URL of the server-side resource contacted via the GET method.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>data</strong>&nbsp;&minus; An object whose properties serve as the name/value pairs used to construct a query string to be appended to the URL, or a preformatted and encoded query string.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>callback</strong>&nbsp;&minus; A function invoked when the request completes. The data value resulting from digesting the response body as a JSON string is passed as the first parameter to this callback, and the status as the second.</p>\r\n	</li>\r\n</ul>\r\n\r\n<h3>Example</h3>\r\n\r\n<p>Consider the following HTML file with a small JQuery coding &minus;</p>\r\n\r\n<p><a href=\"http://tpcg.io/dGRqqF\" rel=\"nofollow\" target=\"_blank\">Live Demo</a></p>\r\n\r\n<pre>\r\n&lt;html&gt;\r\n   &lt;head&gt;\r\n      &lt;title&gt;The jQuery Example&lt;/title&gt;\r\n      &lt;script type = &quot;text/javascript&quot; \r\n         src = &quot;https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js&quot;&gt;\r\n      &lt;/script&gt;\r\n		\r\n      &lt;script type = &quot;text/javascript&quot; language = &quot;javascript&quot;&gt;\r\n         $(document).ready(function() {\r\n            $(&quot;#driver&quot;).click(function(event){\r\n				\r\n               $.getJSON(&#39;/jquery/result.json&#39;, function(jd) {\r\n                  $(&#39;#stage&#39;).html(&#39;&lt;p&gt; Name: &#39; + jd.name + &#39;&lt;/p&gt;&#39;);\r\n                  $(&#39;#stage&#39;).append(&#39;&lt;p&gt;Age : &#39; + jd.age+ &#39;&lt;/p&gt;&#39;);\r\n                  $(&#39;#stage&#39;).append(&#39;&lt;p&gt; Sex: &#39; + jd.sex+ &#39;&lt;/p&gt;&#39;);\r\n               });\r\n					\r\n            });\r\n         });\r\n      &lt;/script&gt;\r\n   &lt;/head&gt;\r\n	\r\n   &lt;body&gt;\r\n      &lt;p&gt;Click on the button to load result.json file &minus;&lt;/p&gt;\r\n		\r\n      &lt;div id = &quot;stage&quot; style = &quot;background-color:#eee;&quot;&gt;\r\n         STAGE\r\n      &lt;/div&gt;\r\n		\r\n      &lt;input type = &quot;button&quot; id = &quot;driver&quot; value = &quot;Load Data&quot; /&gt;\r\n   &lt;/body&gt;\r\n&lt;/html&gt;</pre>\r\n\r\n<p>Here JQuery utility method&nbsp;<strong>getJSON()</strong>&nbsp;initiates an Ajax request to the specified URL&nbsp;<strong>result.json</strong>&nbsp;file. After loading this file, all the content would be passed to the callback function which finally would be populated inside &lt;div&gt; tagged with ID&nbsp;<em>stage</em>. Assuming, our result.json file has following json formatted content &minus;</p>\r\n\r\n<pre>\r\n{\r\n   &quot;name&quot;: &quot;Zara Ali&quot;,\r\n   &quot;age&quot; : &quot;67&quot;,\r\n   &quot;sex&quot;: &quot;female&quot;\r\n}\r\n</pre>\r\n\r\n<p>When you click the given button, then result.json file gets loaded.</p>\r\n\r\n<p>Passing Data to the Server</p>\r\n\r\n<p>Many times you collect input from the user and you pass that input to the server for further processing. JQuery AJAX made it easy enough to pass collected data to the server using&nbsp;<strong>data</strong>&nbsp;parameter of any available Ajax method.</p>\r\n\r\n<h3>Example</h3>\r\n\r\n<p>This example demonstrate how can pass user input to a web server script which would send the same result back and we would print it &minus;</p>\r\n\r\n<p><a href=\"http://tpcg.io/aU6ni2\" rel=\"nofollow\" target=\"_blank\">Live Demo</a></p>\r\n\r\n<pre>\r\n&lt;html&gt;\r\n   &lt;head&gt;\r\n      &lt;title&gt;The jQuery Example&lt;/title&gt;\r\n      &lt;script type = &quot;text/javascript&quot; \r\n         src = &quot;https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js&quot;&gt;\r\n      &lt;/script&gt;\r\n		\r\n      &lt;script type = &quot;text/javascript&quot; language = &quot;javascript&quot;&gt;\r\n         $(document).ready(function() {\r\n            $(&quot;#driver&quot;).click(function(event){\r\n               var name = $(&quot;#name&quot;).val();\r\n               $(&quot;#stage&quot;).load(&#39;/jquery/result.php&#39;, {&quot;name&quot;:name} );\r\n            });\r\n         });\r\n      &lt;/script&gt;\r\n   &lt;/head&gt;\r\n	\r\n   &lt;body&gt;\r\n      &lt;p&gt;Enter your name and click on the button:&lt;/p&gt;\r\n      &lt;input type = &quot;input&quot; id = &quot;name&quot; size = &quot;40&quot; /&gt;&lt;br /&gt;\r\n		\r\n      &lt;div id = &quot;stage&quot; style = &quot;background-color:cc0;&quot;&gt;\r\n         STAGE\r\n      &lt;/div&gt;\r\n		\r\n      &lt;input type = &quot;button&quot; id = &quot;driver&quot; value = &quot;Show Result&quot; /&gt;\r\n   &lt;/body&gt;\r\n&lt;/html&gt;</pre>\r\n\r\n<p>Here is the code written in&nbsp;<strong>result.php</strong>&nbsp;script &minus;</p>\r\n\r\n<pre>\r\n&lt;?php\r\n   if( $_REQUEST[&quot;name&quot;] ){\r\n      $name = $_REQUEST[&#39;name&#39;];\r\n      echo &quot;Welcome &quot;. $name;\r\n   }\r\n?&gt; </pre>\r\n\r\n<p>Now you can enter any text in the given input box and then click &quot;Show Result&quot; button to see what you have entered in the input box.</p>\r\n\r\n<p>JQuery AJAX Methods</p>\r\n\r\n<p>You have seen basic concept of AJAX using JQuery. Following table lists down all important JQuery AJAX methods which you can use based your programming need &minus;</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<th>Sr.No.</th>\r\n			<th>Methods &amp; Description</th>\r\n		</tr>\r\n		<tr>\r\n			<td>1</td>\r\n			<td><a href=\"https://www.tutorialspoint.com/jquery/ajax-jquery-ajax.htm\">jQuery.ajax( options )</a>\r\n			<p>Load a remote page using an HTTP request.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>2</td>\r\n			<td><a href=\"https://www.tutorialspoint.com/jquery/ajax-jquery-ajaxsetup.htm\">jQuery.ajaxSetup( options )</a>\r\n			<p>Setup global settings for AJAX requests.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>3</td>\r\n			<td><a href=\"https://www.tutorialspoint.com/jquery/ajax-jquery-get.htm\">jQuery.get( url, [data], [callback], [type] )</a>\r\n			<p>Load a remote page using an HTTP GET request.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>4</td>\r\n			<td><a href=\"https://www.tutorialspoint.com/jquery/ajax-jquery-getjson.htm\">jQuery.getJSON( url, [data], [callback] )</a>\r\n			<p>Load JSON data using an HTTP GET request.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>5</td>\r\n			<td><a href=\"https://www.tutorialspoint.com/jquery/ajax-jquery-getscript.htm\">jQuery.getScript( url, [callback] )</a>\r\n			<p>Loads and executes a JavaScript file using an HTTP GET request.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>6</td>\r\n			<td><a href=\"https://www.tutorialspoint.com/jquery/ajax-jquery-post.htm\">jQuery.post( url, [data], [callback], [type] )</a>\r\n			<p>Load a remote page using an HTTP POST request.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>7</td>\r\n			<td><a href=\"https://www.tutorialspoint.com/jquery/ajax-load.htm\">load( url, [data], [callback] )</a>\r\n			<p>Load HTML from a remote file and inject it into the DOM.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>8</td>\r\n			<td><a href=\"https://www.tutorialspoint.com/jquery/ajax-serialize.htm\">serialize( )</a>\r\n			<p>Serializes a set of input elements into a string of data.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>9</td>\r\n			<td><a href=\"https://www.tutorialspoint.com/jquery/ajax-serializearray.htm\">serializeArray( )</a>\r\n			<p>Serializes all forms and form elements like the .serialize() method but returns a JSON data structure for you to work with.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h2>JQuery AJAX Events</h2>\r\n\r\n<p>You can call various JQuery methods during the life cycle of AJAX call progress. Based on different events/stages following methods are available &minus;</p>\r\n\r\n<p>You can go through all the&nbsp;<a href=\"https://www.tutorialspoint.com/jquery/ajax-events.htm\">AJAX Events</a>.</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<th>Sr.No.</th>\r\n			<th>Methods &amp; Description</th>\r\n		</tr>\r\n		<tr>\r\n			<td>1</td>\r\n			<td><a href=\"https://www.tutorialspoint.com/jquery/ajaxcomplete.htm\">ajaxComplete( callback )</a>\r\n			<p>Attach a function to be executed whenever an AJAX request completes.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>2</td>\r\n			<td><a href=\"https://www.tutorialspoint.com/jquery/ajaxstart.htm\">ajaxStart( callback )</a>\r\n			<p>Attach a function to be executed whenever an AJAX request begins and there is none already active.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>3</td>\r\n			<td><a href=\"https://www.tutorialspoint.com/jquery/ajaxerror.htm\">ajaxError( callback )</a>\r\n			<p>Attach a function to be executed whenever an AJAX request fails.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>4</td>\r\n			<td><a href=\"https://www.tutorialspoint.com/jquery/ajaxsend.htm\">ajaxSend( callback )</a>\r\n			<p>Attach a function to be executed before an AJAX request is sent.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>5</td>\r\n			<td><a href=\"https://www.tutorialspoint.com/jquery/ajaxstop.htm\">ajaxStop( callback )</a>\r\n			<p>Attach a function to be executed whenever all AJAX requests have ended.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>6</td>\r\n			<td><a href=\"https://www.tutorialspoint.com/jquery/ajaxsuccess.htm\">ajaxSuccess( callback )</a>\r\n			<p>Attach a function to be executed whenever an AJAX request completes successfully.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '0Xv1O8_jquery-ajax.png', 7, 1, '2019-09-30 13:14:04', '2019-09-30 13:14:04'),
(30, 'What is ASP.NET', 'what-is-aspnet', '<p>ASP.Net is a web development platform provided by Microsoft. It is used for creating web-based applications. ASP.Net was first released in the year 2002.</p>\r\n\r\n<p>The first version of ASP.Net deployed was 1.0. The most recent version of ASP.Net is version 4.6. ASP.Net is designed to work with the HTTP protocol. This is the standard protocol used across all web applications.</p>\r\n\r\n<p>ASP.Net applications can also be written in a variety of .Net languages. These include C#, VB.Net, and J#. In this chapter, you will see some basic fundamental of the .Net framework.</p>\r\n\r\n<p>The full form of ASP is Active Server Pages, and .NET is Network Enabled Technologies.</p>\r\n\r\n<h2>ASP.NET Architecture and its Components</h2>\r\n\r\n<p>ASP.Net is a framework which is used to develop a Web-based application. The basic architecture of the ASP.Net framework is as shown below.</p>\r\n\r\n<p><a href=\"https://www.guru99.com/images/asp-net/061516_0807_ASPNetIntro1.png\"><img alt=\"ASP.Net - Intro, Life Cycle &amp; Hello World Program\" src=\"https://www.guru99.com/images/asp-net/061516_0807_ASPNetIntro1.png\" title=\"ASP.Net - Intro, Life Cycle &amp; Hello World Program\" /></a></p>\r\n\r\n<p>ASP.NET Architecture Diagram</p>\r\n\r\n<p>The architecture of the.Net framework is based on the following key components</p>\r\n\r\n<ol>\r\n	<li><strong>Language</strong>&nbsp;&ndash; A variety of languages exists for .net framework. They are VB.net and C#. These can be used to develop web applications.</li>\r\n	<li><strong>Library&nbsp;</strong>- The .NET Framework includes a set of standard class libraries. The most common library used for web applications in .net is the Web library. The web library has all the necessary components used to develop.Net web-based applications.</li>\r\n	<li><strong>Common Language Runtime</strong>&nbsp;- The Common Language Infrastructure or CLI is a platform. .Net programs are executed on this platform. The CLR is used for performing key activities. Activities include Exception handling and Garbage collection.</li>\r\n</ol>\r\n\r\n<p>Below are some of the key characteristics of the ASP.Net framework</p>\r\n\r\n<ol>\r\n	<li><strong>Code Behind Mode</strong>&nbsp;&ndash; This is the concept of separation of design and code. By making this separation, it becomes easier to maintain the ASP.Net application. The general file type of an ASP.Net file is aspx. Assume we have a web page called MyPage.aspx. There will be another file called MyPage.aspx.cs which would denote the code part of the page. So Visual Studio creates separate files for each web page, one for the design part and the other for the code.</li>\r\n	<li><strong>State Management&nbsp;</strong>&ndash; ASP.Net has the facility to control state management. HTTP is known as a stateless protocol. Let&#39;s take an example of a shopping cart application. Now, when a user decides what he wants to buy from the site, he will press the submit button.\r\n	<p>The application needs to remember the items the user choose for the purchase. This is known as remembering the state of an application at a current point in time. HTTP is a stateless protocol. When the user goes to the purchase page, HTTP will not store the information on the cart items. Additional coding needs to be done to ensure that the cart items can be carried forward to the purchase page. Such an implementation can become complex at times. But ASP.Net can do state management on your behalf. So ASP.Net can remember the cart items and pass it over to the purchase page.</p>\r\n	</li>\r\n	<li><strong>Caching&nbsp;</strong>&ndash; ASP.Net can implement the concept of Caching. This improve&#39;s the performance of the application. By caching those pages which are often requested by the user can be stored in a temporary location. These pages can be retrieved faster and better responses can be sent to the user. So caching can significantly improve the performance of an application.</li>\r\n</ol>\r\n\r\n<p>ASP.Net is a development language used for constructing web-based applications. ASP.Net is designed to work with the standard HTTP protocol.</p>', 'X77yZS_images.jpg', 8, 1, '2019-09-30 13:19:40', '2019-09-30 13:19:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `article_tag`
--

CREATE TABLE `article_tag` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `article_id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `article_tag`
--

INSERT INTO `article_tag` (`id`, `article_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(55, 24, 7, NULL, NULL),
(56, 24, 10, NULL, NULL),
(57, 24, 11, NULL, NULL),
(58, 24, 12, NULL, NULL),
(59, 25, 6, NULL, NULL),
(60, 25, 10, NULL, NULL),
(61, 25, 11, NULL, NULL),
(62, 25, 12, NULL, NULL),
(63, 25, 19, NULL, NULL),
(64, 26, 7, NULL, NULL),
(65, 26, 10, NULL, NULL),
(66, 27, 7, NULL, NULL),
(67, 27, 11, NULL, NULL),
(68, 28, 6, NULL, NULL),
(69, 28, 7, NULL, NULL),
(70, 29, 6, NULL, NULL),
(71, 29, 9, NULL, NULL),
(72, 29, 19, NULL, NULL),
(73, 29, 20, NULL, NULL),
(74, 30, 6, NULL, NULL),
(75, 30, 7, NULL, NULL),
(76, 30, 8, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `nama`, `slug`, `created_at`, `updated_at`) VALUES
(7, 'What\'s New About IT ?', 'whats-new-about-it', '2019-09-19 02:48:38', '2019-09-19 02:48:46'),
(8, 'IT System', 'it-system', '2019-09-19 02:49:23', '2019-09-19 02:49:23'),
(9, 'Development', 'development', '2019-09-19 02:49:39', '2019-09-19 02:49:39'),
(10, 'Projects IT', 'projects-it', '2019-09-19 02:49:57', '2019-09-19 02:49:57'),
(17, 'IT Center', 'it-center', '2019-10-02 02:34:10', '2019-10-02 02:34:10'),
(18, 'Analysis', 'analysis', '2019-10-02 03:35:22', '2019-10-02 03:35:22'),
(19, 'Software', 'software', '2019-10-02 03:35:40', '2019-10-02 03:35:40'),
(20, 'Mobile', 'mobile', '2019-10-02 03:36:09', '2019-10-02 03:36:09'),
(21, 'IT Resources', 'it-resources', '2019-10-02 03:36:20', '2019-10-02 03:36:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `catservices`
--

CREATE TABLE `catservices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `catservices`
--

INSERT INTO `catservices` (`id`, `nama`, `slug`, `created_at`, `updated_at`) VALUES
(2, 'Service 01', 'service-01', '2019-10-08 21:01:41', '2019-10-10 03:25:08'),
(5, 'Service 02', 'service-02', '2019-10-08 21:12:00', '2019-10-10 03:24:58'),
(7, 'Service 03', 'service-03', '2019-10-08 22:00:55', '2019-10-08 22:00:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `galleries`
--

INSERT INTO `galleries` (`id`, `image`, `created_at`, `updated_at`) VALUES
(18, '422125783.jpg', '2019-09-23 07:16:25', '2019-09-23 07:16:25'),
(19, '1230747710.jpg', '2019-09-23 07:16:46', '2019-09-23 07:16:46'),
(20, '1109163248.jpg', '2019-09-23 07:17:00', '2019-09-23 07:17:00'),
(21, '1994013284.jpg', '2019-09-23 07:17:10', '2019-09-23 07:17:10'),
(22, '794975804.jpg', '2019-09-23 07:17:22', '2019-09-23 07:17:22'),
(23, '65197736.jpg', '2019-09-23 07:17:36', '2019-09-23 07:17:36'),
(24, '1867362342.jpg', '2019-09-23 07:17:46', '2019-09-23 07:17:46'),
(25, '192384312.jpg', '2019-09-23 07:17:56', '2019-09-23 07:17:56'),
(26, '420999284.jpg', '2019-09-23 07:18:09', '2019-09-23 07:18:09'),
(27, '670676991.jpg', '2019-09-23 07:18:19', '2019-09-23 07:18:19'),
(28, '1459614043.jpg', '2019-09-23 07:18:29', '2019-09-23 07:18:29'),
(29, '995799653.jpg', '2019-09-23 07:18:42', '2019-09-23 07:18:42'),
(30, '1738954500.jpg', '2019-09-23 07:18:54', '2019-09-23 07:18:54'),
(31, '1980759531.jpg', '2019-09-23 07:19:06', '2019-09-23 07:19:06'),
(32, '1154071387.jpg', '2019-09-23 07:19:26', '2019-09-23 07:19:26'),
(33, '994788022.jpg', '2019-09-23 07:19:39', '2019-09-23 07:19:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `logos`
--

CREATE TABLE `logos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `logos`
--

INSERT INTO `logos` (`id`, `image`, `created_at`, `updated_at`) VALUES
(7, '1579065402.png', '2019-09-25 08:24:24', '2019-09-27 01:13:37'),
(9, '1067681700.png', '2019-09-27 01:18:56', '2019-09-27 01:18:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2013_9_11_099999_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_09_02_030610_create_categories_table', 1),
(4, '2019_09_12_110227_create_articles_table', 1),
(5, '2019_09_12_161301_create_tags_table', 1),
(6, '2019_09_13_130812_create_galleries_table', 1),
(7, '2019_09_13_130937_create_abouts_table', 1),
(8, '2019_09_13_141703_create_photos_table', 1),
(9, '2019_09_25_121330_create_offices_table', 1),
(10, '2019_09_25_124354_create_sliders_table', 1),
(11, '2019_09_25_132432_create_works_table', 1),
(12, '2019_09_25_150919_create_logos_table', 1),
(13, '2019_09_25_160623_create_platforms_table', 1),
(14, '2019_09_26_113146_create_teams_table', 1),
(15, '2019_09_27_111102_create_position_availables_table', 1),
(16, '2019_10_09_152535_create_activity_log_table', 1),
(17, '2019_10_10_092006_create_catservices_table', 1),
(18, '2019_10_10_092027_create_services_table', 1),
(19, '2019_10_10_092111_create_other_services_table', 1),
(20, '2019_10_18_090117_create_permission_tables', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 1),
(2, 'App\\User', 2),
(2, 'App\\User', 3),
(3, 'App\\User', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `offices`
--

CREATE TABLE `offices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `offices`
--

INSERT INTO `offices` (`id`, `title`, `desc`, `created_at`, `updated_at`) VALUES
(1, 'Bandung', 'Guntursari Wetan No. 17 Buah Batu, Bandung 40286 Phone (022) 87325528 Whatsapp 08172311185', '2019-09-25 05:23:27', '2019-09-25 06:16:03'),
(2, 'Karawang', 'Perum Puri Telukjambe Blok C-09 No. 15 Desa Sinarbaya, Kecamatan Teluk Jambe Timur', '2019-09-25 05:23:55', '2019-09-25 05:23:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `other_services`
--

CREATE TABLE `other_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `other_services`
--

INSERT INTO `other_services` (`id`, `image`, `title`, `slug`, `desc`, `created_at`, `updated_at`) VALUES
(2, '1221571797.png', 'Website CMS Systems', 'website-cms-systems', 'A content management system (CMS) is a software application or set of related programs that are used to create and manage digital content. CMSes are typically used for enterprise content management (ECM) and web content management (WCM). An ECM facilitates collaboration in the workplace by integrating document management, digital asset management and records retention functionalities, and providing end users with role-based access to the organization\'s digital assets. A WCM facilitates collaborative authoring for websites. ECM software often includes a WCM publishing functionality, but ECM webpages typically remain behind the organization\'s firewall.  \r\n\r\nWant to create Website for your organization? We can provide you using Wordpress. We can customize it to integrated with your existing system. Everything with affordable price.', '2019-09-26 12:10:31', '2019-10-08 23:20:31'),
(3, '447878208.png', 'E-Commerce', 'e-commerce', 'Ecommerce, also known as electronic commerce or internet commerce, refers to the buying and selling of goods or services using the internet, and the transfer of money and data to execute these transactions. Ecommerce is often used to refer to the sale of physical products online, but it can also describe any kind of commercial transaction that is facilitated through the internet.\r\n\r\nWe can offer you for implementing E-Commerce Management System. Like Magento , Prestashop , OpenCart , osCommerce , ZenCart. Also can be customize with your System.', '2019-09-26 12:11:52', '2019-10-08 23:18:34'),
(4, '1298175450.png', 'Attendance', 'attendance', 'Want to implement Finger-Print for you Employee Attendance ? We can offer it and create System Automation to pull data from the machine. Attendance Report will be easy to generate.\r\n\r\nFingerprints are the tiny ridges, whorls and valley patterns on the tip of each finger. They form from pressure on a baby\'s tiny, developing fingers in the womb. No two people have been found to have the same fingerprints -- they are totally unique. There\'s a one in 64 billion chance that your fingerprint will match up exactly with someone else\'s.\r\n\r\nFingerprints are even more unique than DNA, the genetic material in each of our cells. Although identical twins can share the same DNA -- or at least most of it -- they can\'t have the same fingerprints.', '2019-09-26 12:12:30', '2019-10-08 23:14:46'),
(5, '2058078437.png', 'Application Analytics', 'application-analytics', 'Application analytics provides insights into the performance of an application by producing real-time analysis through visualization of data. The application insights analytics include IT operations, customer experience and business outcomes. This allows enterprises to quickly troubleshoot performance questions and root cause issues in order to make needed changes for efficiency in real time.\r\n\r\nUnlock actionable business insights. Answer meaningful questions. All in real-time without code changes. We provide you Appdynamics as we are one of the partner to sale the products in Indonesia.', '2019-09-26 12:15:21', '2019-10-08 23:00:52'),
(7, '1971138424.png', 'Database Administration', 'database-administration', 'Database administration refers to the whole set of activities performed by a database administrator to ensure that a database is always available as needed. Other closely related tasks and roles are database security, database monitoring and troubleshooting, and planning for future growth\r\n\r\nthis job has the responsibility of defining database structure patterns, defining storage structures and access methods, as well as giving users access rights to access data.', '2019-10-01 17:15:05', '2019-10-08 23:18:15'),
(8, '622300841.png', 'IT instructor', 'it-instructor', 'IT instructors are teachers who lead information technology courses at the high school and college levels. At the high school level, they usually teach courses on basic or advanced computer skills. At the college level, IT teachers may teach introductory computing, computer science and programming courses, as well as higher-level classes on specialized topics like discrete structures and software engineering. Postsecondary teachers may also mentor graduate students and conduct their own research in a particular area of interest within the field of computer science.\r\n\r\nTo be an instructor we must have skills that are in accordance with what we teach so there are no difficulties in teaching. Being a teacher or instructor can get around a salary of around 2.5 million and above and have several other benefits.', '2019-10-01 17:18:27', '2019-10-08 23:18:57'),
(9, '223642333.png', 'UI or UX Designer', 'ui-or-ux-designer', 'UI is how a product that we make looks like what can be seen by the eye. The main purpose of the UI is to display interfaces that have good uniformity in terms of color, layout, or font. Meanwhile UX is a process to make products that we have made easy to use and do not confuse users. The responsibility of a UX designer is to ensure that every step by step goes logically and clearly. \r\n\r\nTo become a UI / UX designer we must be accustomed to choosing a combination of colors that are comfortable for the user and must be detailed to see results marketed to the production both in terms of fonts, colors, images.', '2019-10-01 17:23:52', '2019-10-08 23:19:42'),
(10, '966253536.png', 'IT Support', 'it-support', 'IT support is also known as technical support and it is basically the process of providing assistance with technology related products such as computers, televisions, digital video recorders, and even cell phones\r\n\r\nServed to provide IT technical assistance for companies. IT support is also flexible, because it works in a field that is quite common in the IT field. This job requires time to always be ready whenever the company needs help. Suitable for you who are smart management of time both for personal and corporate needs. The average global salary received is 48,900 dollars per year.', '2019-10-01 17:26:53', '2019-10-08 23:19:22'),
(12, '769902891.png', 'Lorem Ipsum', 'lorem-ipsum', 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum', '2019-10-10 06:03:59', '2019-10-10 06:03:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'role-page', 'web', '2019-10-21 08:28:09', '2019-10-21 08:28:09'),
(2, 'about-page', 'web', '2019-10-21 08:28:09', '2019-10-21 08:28:09'),
(3, 'article-page', 'web', '2019-10-21 08:28:09', '2019-10-21 08:28:09'),
(4, 'category-page', 'web', '2019-10-21 08:28:10', '2019-10-21 08:28:10'),
(5, 'catservice-page', 'web', '2019-10-21 08:28:10', '2019-10-21 08:28:10'),
(6, 'gallery-page', 'web', '2019-10-21 08:28:10', '2019-10-21 08:28:10'),
(7, 'logo-page', 'web', '2019-10-21 08:28:10', '2019-10-21 08:28:10'),
(8, 'office-page', 'web', '2019-10-21 08:28:10', '2019-10-21 08:28:10'),
(9, 'otherservice-page', 'web', '2019-10-21 08:28:10', '2019-10-21 08:28:10'),
(10, 'platforms-page', 'web', '2019-10-21 08:28:11', '2019-10-21 08:28:11'),
(11, 'positionavailable-page', 'web', '2019-10-21 08:28:11', '2019-10-21 08:28:11'),
(12, 'service-page', 'web', '2019-10-21 08:28:11', '2019-10-21 08:28:11'),
(13, 'sliders-page', 'web', '2019-10-21 08:28:11', '2019-10-21 08:28:11'),
(14, 'tag-page', 'web', '2019-10-21 08:28:11', '2019-10-21 08:28:11'),
(15, 'team-page', 'web', '2019-10-21 08:28:11', '2019-10-21 08:28:11'),
(16, 'works-page', 'web', '2019-10-21 08:28:11', '2019-10-21 08:28:11'),
(17, 'user-page', 'web', '2019-10-23 02:40:31', '2019-10-23 02:40:31'),
(18, 'log-page', 'web', '2019-10-23 02:47:45', '2019-10-23 02:47:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `photos`
--

CREATE TABLE `photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `platforms`
--

CREATE TABLE `platforms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `platforms` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `percentage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `platforms`
--

INSERT INTO `platforms` (`id`, `platforms`, `percentage`, `created_at`, `updated_at`) VALUES
(3, 'ASP.NET', '90', '2019-09-25 09:23:40', '2019-10-15 07:45:33'),
(4, 'PHP', '95', '2019-09-25 09:24:03', '2019-09-30 09:08:21'),
(5, 'MOBILE APPS (ANDROID)', '90', '2019-09-25 09:24:30', '2019-09-25 09:29:29'),
(6, 'DATABASE, INTERFACING, OTHERS', '95', '2019-09-25 09:24:54', '2019-09-25 09:29:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `position_availables`
--

CREATE TABLE `position_availables` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `position_availables`
--

INSERT INTO `position_availables` (`id`, `title`, `desc`, `created_at`, `updated_at`) VALUES
(4, 'PHP Developer', '<h5><strong>Responsibilities</strong></h5>\r\n\r\n<ul>\r\n	<li>Integration of user-facing elements developed by front-end developers</li>\r\n	<li>Build efficient, testable, and reusable PHP modules</li>\r\n	<li>Solve complex performance problems and architectural challenges</li>\r\n	<li>Integration of data storage solutions (may include databases, key-value stores, blob stores, etc.)</li>\r\n</ul>\r\n\r\n<h5><strong>Skill and Qualifications</strong></h5>\r\n\r\n<ul>\r\n	<li>Strong knowledge of PHP web frameworks (such as Laravel, Codeigniter, Yii)</li>\r\n	<li>Understanding the fully synchronous behavior of PHP</li>\r\n	<li>Understanding of MVC design patterns</li>\r\n	<li>Basic understanding of front-end technologies, such as JavaScript, HTML5, and CSS3</li>\r\n	<li>Knowledge of object oriented PHP programming</li>\r\n	<li>Understanding accessibility and security compliance</li>\r\n	<li>Strong knowledge of the common PHP or web server exploits and their solutions</li>\r\n	<li>Understanding fundamental design principles behind a scalable application</li>\r\n	<li>User authentication and authorization between multiple systems, servers, and environments</li>\r\n	<li>Integration of multiple data sources and databases into one system</li>\r\n	<li>Familiarity with limitations of PHP as a platform and its workarounds</li>\r\n	<li>Creating database schemas that represent and support business processes</li>\r\n	<li>Familiarity with SQL/NoSQL databases and their declarative query languages</li>\r\n	<li>Proficient understanding of code versioning tools, such as Git,SVN</li>\r\n</ul>', '2019-09-27 06:13:35', '2019-09-27 06:13:35'),
(5, 'ASP.NET C# Developer', '<h5><strong>Responsibilities</strong></h5>\r\n\r\n<ul>\r\n	<li>Translate application storyboards and use cases into functional applications</li>\r\n	<li>Design, build, and maintain efficient, reusable, and reliable code</li>\r\n	<li>Integrate data storage solutions (may include databases, key-value stores, blob stores, etc.)</li>\r\n	<li>Ensure the best possible performance, quality, and responsiveness of applications</li>\r\n	<li>Identify bottlenecks and bugs, and devise solutions to mitigate and address these issues</li>\r\n	<li>Help maintain code quality, organization, and automatization</li>\r\n</ul>\r\n\r\n<h5><strong>Skills</strong></h5>\r\n\r\n<ul>\r\n	<li>Strong knowledge of .NET web framework</li>\r\n	<li>Proficient in C#, with a good knowledge of their ecosystems</li>\r\n	<li>Familiarity with the MVC framework</li>\r\n	<li>Strong understanding of object-oriented programming</li>\r\n	<li>Skill for writing reusable libraries</li>\r\n	<li>Familiar with various design and architectural patterns</li>\r\n	<li>Knowledge of concurrency patterns</li>\r\n	<li>Familiarity with Microsoft SQL Server</li>\r\n	<li>Experience with popular web application frameworks</li>\r\n	<li>Knack for writing clean, readable, and easily maintainable code</li>\r\n	<li>Understanding of fundamental design principles for building a scalable application</li>\r\n	<li>Experience creating database schemas that represent and support business processes</li>\r\n	<li>Experience implementing automated testing platforms and unit tests</li>\r\n	<li>Proficient understanding of code versioning tools (such as Git, SVN, and Mercurial)</li>\r\n</ul>', '2019-09-27 06:14:30', '2019-09-27 06:14:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Superadmin', 'web', '2019-10-21 08:28:34', '2019-10-23 02:20:04'),
(2, 'Member', 'web', '2019-10-21 08:47:10', '2019-10-21 08:47:10'),
(3, 'Administrator', 'web', '2019-10-23 02:21:07', '2019-10-23 02:21:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(2, 3),
(3, 1),
(3, 2),
(3, 3),
(4, 1),
(4, 2),
(4, 3),
(5, 1),
(5, 3),
(6, 1),
(6, 3),
(7, 1),
(7, 3),
(8, 1),
(8, 3),
(9, 1),
(9, 3),
(10, 1),
(10, 3),
(11, 1),
(11, 3),
(12, 1),
(12, 3),
(13, 1),
(13, 3),
(14, 1),
(14, 2),
(14, 3),
(15, 1),
(15, 3),
(16, 1),
(16, 3),
(17, 1),
(17, 3),
(18, 1),
(18, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `catservice_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `services`
--

INSERT INTO `services` (`id`, `image`, `title`, `desc`, `catservice_id`, `created_at`, `updated_at`) VALUES
(6, 'RXCMkt_development1.jpg', '01. Software Development', 'Software development is the process of conceiving, specifying, designing, programming, documenting, testing, and bug fixing involved in creating and maintaining applications, frameworks, or other software components.\r\nThis is our core business, whether developing from existing programs or starting from scratch. Our engineers are ready to help with the right solution. From Desktop App, Web or Mobile Based App.', 2, '2019-09-26 12:54:45', '2019-10-10 06:04:53'),
(7, 'uLTuJg_rsz_system-integrator-market-2019-905x509.jpg', '02. System Integrator', 'A system Integrator is an individual or an organization that implements enterprise-wide IT applications within an organization. Using a systems integrator, a company can align cheaper, preconfigured components and commercial off-the-shelf software to meet key business goals,\r\nNeed solutions ASAP ? We can help you with using existing bundled app or CMS that will meet your requirement.', 5, '2019-09-26 12:55:36', '2019-10-10 04:06:18'),
(8, 'J3Rba0_rsz_the_best_way_to_learn_sql_1.jpg', '03. IT Resources & Training', 'IT Training is specific to the Information Technology (IT) industry, or to the skills necessary for performing information technology jobs. IT training includes courses related to the application, design, development, implementation, support or management of computer-based information systems.We have adopted the basic principle of providing win-win solutions to benefit both our clients and IT workers by providing Human Resource in IT field at an Affordable Price.', 7, '2019-09-26 13:23:47', '2019-10-10 03:08:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `service_otherservice`
--

CREATE TABLE `service_otherservice` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `otherservice_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `service_otherservice`
--

INSERT INTO `service_otherservice` (`id`, `service_id`, `otherservice_id`, `created_at`, `updated_at`) VALUES
(2, 6, 9, NULL, NULL),
(3, 7, 2, NULL, NULL),
(4, 7, 3, NULL, NULL),
(5, 7, 4, NULL, NULL),
(6, 7, 5, NULL, NULL),
(7, 8, 8, NULL, NULL),
(8, 8, 10, NULL, NULL),
(17, 6, 8, NULL, NULL),
(20, 6, 7, NULL, NULL),
(21, 6, 2, NULL, NULL),
(22, 6, 3, NULL, NULL),
(23, 6, 4, NULL, NULL),
(24, 6, 5, NULL, NULL),
(25, 6, 12, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `title`, `desc`, `created_at`, `updated_at`) VALUES
(1, '1798074603.jpg', 'We Provide IT Solution', 'Hi, We Are Arkamaya, Software Development Company from Bandung, Indonesia. Specialized in Software Development(Web, Dekstop, Mobile), you named IT.', '2019-09-24 22:51:21', '2019-09-24 22:53:51'),
(2, '2080271535.jpg', 'Experience in Various Fields', 'more than 10 years experience in various fields in Manufacturing, Retail, Human Resource Information System, Inventory, Enterprise Resource Planning, etc.', '2019-09-24 22:54:53', '2019-10-09 01:54:12'),
(3, '740391240.jpg', 'What We Do ?', 'Arkamaya helps  you to build an awesome software or develop the existing one, so you can focus on running your business.', '2019-09-24 22:55:48', '2019-10-09 01:55:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tags`
--

INSERT INTO `tags` (`id`, `nama`, `slug`, `created_at`, `updated_at`) VALUES
(5, 'Android Developer', 'android-developer', '2019-09-18 12:50:30', '2019-09-18 12:50:30'),
(6, 'Web Developer', 'web-developer', '2019-09-18 12:50:39', '2019-09-18 12:50:39'),
(7, 'PHP', 'php', '2019-09-18 12:50:44', '2019-09-18 12:50:44'),
(8, 'ASP.NET', 'aspnet', '2019-09-18 12:50:53', '2019-09-18 12:50:53'),
(9, 'Java', 'java', '2019-09-18 12:51:05', '2019-09-18 12:51:05'),
(10, 'Laravel', 'laravel', '2019-09-18 12:51:12', '2019-09-18 12:51:12'),
(11, 'Code Igniter', 'code-igniter', '2019-09-18 12:51:21', '2019-09-18 12:51:21'),
(12, 'CMS', 'cms', '2019-09-18 12:54:40', '2019-09-18 12:54:40'),
(13, 'System Integrator', 'system-integrator', '2019-09-18 12:54:54', '2019-09-18 12:54:54'),
(14, 'Application Analytics', 'application-analytics', '2019-09-18 12:55:08', '2019-09-18 12:55:08'),
(15, 'IT Resources', 'it-resources', '2019-09-18 12:55:34', '2019-09-18 12:55:34'),
(16, 'Business', 'business', '2019-09-18 12:59:23', '2019-09-18 12:59:23'),
(17, 'Education', 'education', '2019-09-18 12:59:34', '2019-09-18 12:59:34'),
(18, 'Inovative', 'inovative', '2019-09-18 13:00:08', '2019-09-18 13:00:08'),
(19, 'Information Technology', 'information-technology', '2019-09-18 13:00:26', '2019-09-18 13:00:26'),
(20, 'Programming Language', 'programming-language', '2019-09-18 13:10:24', '2019-09-18 13:10:51'),
(29, 'Override', 'override', '2019-10-01 13:34:34', '2019-10-01 13:34:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `teams`
--

INSERT INTO `teams` (`id`, `image`, `title`, `desc`, `created_at`, `updated_at`) VALUES
(1, '1388796478.jpg', 'Irfan Satriadarma', 'Chief Executive Officers', '2019-09-25 14:42:52', '2019-09-25 14:43:45'),
(2, '942513684.jpg', 'Farid Satia Supriana', 'Chief Operating Officer', '2019-09-25 14:44:22', '2019-09-25 15:09:47'),
(3, '1048005460.jpg', 'Ipan Herdiansyah', 'Chief Marketing Officer', '2019-09-25 14:45:16', '2019-09-25 14:45:16'),
(4, '2038541322.jpg', 'Widya Revina', 'HRGA Manager', '2019-09-25 14:46:15', '2019-09-25 14:46:15'),
(5, '276594233.jpg', 'Yudha Ari Istiantoro', 'Project Manager', '2019-09-25 14:47:17', '2019-09-25 14:47:17'),
(8, '1297644143.jpg', 'Rakhman Mansyur', 'Project Manager', '2019-09-25 15:08:58', '2019-09-25 15:08:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'superadmin@gmail.com', '$2y$10$o4pGSYJT6COz3xSIUI5IbOO56CBsRrZXXw/O/M2/l8w9.zKgGFr5.', NULL, '2019-10-21 08:28:34', '2019-10-23 02:19:24'),
(2, 'Fauzan Abdullah', 'uzhantheforev@gmail.com', '$2y$10$bo/6yYLdtc6TifcdszQh4O5HPowlDUm9WfFcyMaQ6lVJEXm5yh8.i', NULL, '2019-10-21 08:48:27', '2019-10-21 08:48:27'),
(3, 'Bagas', 'bagasbaldguy@gmail.com', '$2y$10$OqEeNrvelw/WxtjuoCqi6u9AxAB25Jidww1UrihvD553rlceS1L2y', NULL, '2019-10-21 08:49:10', '2019-10-21 08:49:10'),
(4, 'Administrator', 'admin@gmail.com', '$2y$10$wahDaq8913YljGU1qSxh4.uMnxsssMVu8N4taZRJqBciNfOfdAvI.', NULL, '2019-10-23 06:39:22', '2019-10-23 06:39:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `works`
--

CREATE TABLE `works` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jobs` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `works`
--

INSERT INTO `works` (`id`, `image`, `title`, `desc`, `address`, `jobs`, `created_at`, `updated_at`) VALUES
(1, '2109320034.png', 'PT. Toyota Motor Manufacturing Indonesia', 'Since the first stand We have cooperated and bred by the largest Automotive Company in Indonesia, PT. TMMIN as a local-vendor that supports software on the part of quality control, logistics, vehicle, administration and production.', 'KAWASAN INDUSTRI KIIC LOT DD 1, JL. PERMATA RAYA, KARAWANG BARAT', 'Supports software on the part of quality control, logistics, vehicle, administration and production.', '2019-09-24 17:03:28', '2019-09-24 17:53:03'),
(3, '1300257273.png', 'PD. Kebersihan Kota Bandung', 'For Almost 10 years we have been supporting PD. Kebersihan Kota Bandung in managing HRIS, with more concern in employee payroll, personnel activities,and payment automation.', 'JL. SURAPATI NO.216, CAHAUR GEULIS, CIBEUNYING KALER, BANDUNG', 'employee payroll, personnel activities,and payment automation', '2019-09-24 17:37:10', '2019-09-24 17:37:10'),
(4, '537596798.png', 'PT. Aisin Indonesia Automotive', 'In Automotive Sector, we also have the opportunity to work with AISIN Indonesia Automotive in GA Inventory Sector , IATF document standard, and other business operations.', 'KAWASAN INDUSTRI KIIC LOT LL NO.9-10, KABUPATEN BANDUNG', 'GA Inventory Sector , IATF document standard, and other business operations', '2019-09-24 17:51:19', '2019-09-24 17:51:19'),
(7, '1187944955.png', 'PT. Pupuk Kujang', 'PT Pupuk Kujang is one of the state-owned enterprises engaged in the field of industry and marketing of urea fertilizer and various chemical industries. We help develop Corporate Schedule, budget realization, and standard costing.', 'Jl. Jend. A. Yani No. 39 Cikampek 41373 Kabupaten Karawang', 'Develop Corporate Schedule, budget realization, and standard costing.', '2019-09-26 16:31:42', '2019-09-26 16:31:42'),
(8, '1609218783.png', 'Barry Callebaut - PT. Papandayan Cocoa Industries', 'Barry Callebaut, the world\'s leading supplier of high-quality chocolate and cocoa products. B2B chocolate & cocoa manufacturer work with us in the field of HRIS Implementation.', 'Jl. Raya Dayeuhkolot No.84, Pasawahan, Dayeuhkolot, Bandung', 'HRIS Implementation.', '2019-09-26 16:33:38', '2019-09-26 16:33:38');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activity_log_log_name_index` (`log_name`),
  ADD KEY `subject` (`subject_id`,`subject_type`),
  ADD KEY `causer` (`causer_id`,`causer_type`);

--
-- Indeks untuk tabel `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_category_id_foreign` (`category_id`),
  ADD KEY `articles_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `article_tag`
--
ALTER TABLE `article_tag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article_tag_article_id_foreign` (`article_id`),
  ADD KEY `article_tag_tag_id_foreign` (`tag_id`);

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_nama_unique` (`nama`);

--
-- Indeks untuk tabel `catservices`
--
ALTER TABLE `catservices`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `catservices_nama_unique` (`nama`);

--
-- Indeks untuk tabel `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `offices`
--
ALTER TABLE `offices`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `other_services`
--
ALTER TABLE `other_services`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `platforms`
--
ALTER TABLE `platforms`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `position_availables`
--
ALTER TABLE `position_availables`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indeks untuk tabel `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `services_catservice_id_foreign` (`catservice_id`);

--
-- Indeks untuk tabel `service_otherservice`
--
ALTER TABLE `service_otherservice`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_otherservice_service_id_foreign` (`service_id`),
  ADD KEY `service_otherservice_otherservice_id_foreign` (`otherservice_id`);

--
-- Indeks untuk tabel `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tags_nama_unique` (`nama`);

--
-- Indeks untuk tabel `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `article_tag`
--
ALTER TABLE `article_tag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `catservices`
--
ALTER TABLE `catservices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `logos`
--
ALTER TABLE `logos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `offices`
--
ALTER TABLE `offices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `other_services`
--
ALTER TABLE `other_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `photos`
--
ALTER TABLE `photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `platforms`
--
ALTER TABLE `platforms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `position_availables`
--
ALTER TABLE `position_availables`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `service_otherservice`
--
ALTER TABLE `service_otherservice`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `works`
--
ALTER TABLE `works`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `articles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `article_tag`
--
ALTER TABLE `article_tag`
  ADD CONSTRAINT `article_tag_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `article_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_catservice_id_foreign` FOREIGN KEY (`catservice_id`) REFERENCES `catservices` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `service_otherservice`
--
ALTER TABLE `service_otherservice`
  ADD CONSTRAINT `service_otherservice_otherservice_id_foreign` FOREIGN KEY (`otherservice_id`) REFERENCES `other_services` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `service_otherservice_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
