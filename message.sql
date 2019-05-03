CREATE TABLE messagesystem (
    cid int(11) not null AUTO_INCREMENT PRIMARY KEY,
    uid VARCHAR (128) not NULL,
    date datetime not null,
    message TEXT not NULL
);