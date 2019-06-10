PRAGMA foreign_keys=OFF;
BEGIN TRANSACTION;
CREATE TABLE `post`
(
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  title VARCHAR(255) NOT NULL,
  content TEXT NOT NULL,
  datestamp DATETIME NOT NULL,
  tags VARCHAR(255) NOT NULL
);
INSERT INTO "post" VALUES(1,'A first blog post','Some nifty content goes here.','2019-06-10 09:15:00','first boring');
INSERT INTO "post" VALUES(2,'A second blog post','Some other nifty content goes here.','2019-06-10 12:15:00','second boring');
INSERT INTO "post" VALUES(3,'Lorem Ipsum','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc maximus ex a massa luctus posuere. Nullam iaculis nibh ut dui posuere feugiat. Quisque consectetur a nisl at dictum. Suspendisse feugiat erat neque, et scelerisque libero ultrices ut. Duis lobortis felis at lorem scelerisque iaculis. Quisque sit amet quam eget tellus sodales finibus nec quis enim. Nunc nulla leo, hendrerit sed est vel, porttitor sollicitudin massa. Aenean porta mi pharetra vulputate consequat. Donec eget tincidunt nisl. Suspendisse potenti. Ut nisi enim, commodo sit amet nibh ac, laoreet blandit urna.

Phasellus eu tortor ac sapien lobortis dictum imperdiet sed lectus. Integer feugiat urna bibendum lacus consequat fringilla. Maecenas a metus convallis, dictum felis at, tincidunt quam. Fusce non magna sit amet mi bibendum ullamcorper ut vel elit. Duis vitae congue diam. Quisque in ex sit amet elit tempor dapibus eget et dolor. Sed commodo risus eu nulla interdum, sit amet aliquet libero vulputate. Maecenas efficitur in nibh sed lacinia. Duis malesuada scelerisque odio, quis luctus ante egestas vel. Nunc in erat in dui mollis dignissim at id orci. Nullam tempor magna sed tellus iaculis, vitae bibendum nisi consequat. Fusce in dapibus metus. Nulla egestas ipsum nisi, at egestas purus lacinia non. Cras posuere magna sed elit luctus, id accumsan dolor volutpat.

Duis dui est, porta vitae nulla non, elementum luctus lectus. Etiam vel tristique leo. Sed molestie, ligula nec rutrum condimentum, purus velit commodo nibh, sed ornare augue turpis vitae est. Donec suscipit ex lorem, eu viverra nisl dapibus id. Integer dictum vestibulum neque nec dictum. Quisque nec auctor velit. Vestibulum commodo sem at pulvinar laoreet. Nulla vel augue elit. Morbi ut hendrerit turpis. Nullam turpis nibh, ultricies in tincidunt et, euismod non mi.

Sed non eleifend erat. Praesent eu egestas lacus, nec pellentesque ante. Nulla facilisi. Nulla ac tellus ornare, dictum urna nec, elementum velit. Phasellus non malesuada tortor, ac varius neque. Duis euismod velit ex, feugiat ultricies odio semper quis. In id malesuada dui. Aliquam id augue id lectus viverra bibendum eu sit amet sapien. Sed aliquet, dui ac pulvinar convallis, mauris odio sagittis erat, sit amet gravida ante risus quis sapien. Aliquam sapien lacus, faucibus vel blandit non, blandit non ex. In vitae feugiat ipsum. Donec venenatis metus odio, ut consectetur quam pretium in. Vestibulum viverra finibus hendrerit. Cras sem magna, vulputate id ex quis, porttitor pretium lectus.','2019-06-10 16:01:46 EDT','lipsum');
DELETE FROM sqlite_sequence;
INSERT INTO "sqlite_sequence" VALUES('post',3);
COMMIT;
