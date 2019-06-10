PRAGMA foreign_keys=OFF;
BEGIN TRANSACTION;
DROP TABLE IF EXISTS `post`;

CREATE TABLE `post`
(
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  title VARCHAR(255) NOT NULL,
  content TEXT NOT NULL,
  datestamp DATETIME NOT NULL,
  tags VARCHAR(255) NOT NULL
);

INSERT INTO "post" VALUES(1, 'A first blog post', 'Some nifty content goes here.', '2019-06-10 09:15:00', 'first boring');
DELETE FROM sqlite_sequence;
INSERT INTO "sqlite_sequence" VALUES('post', 2);
COMMIT;
