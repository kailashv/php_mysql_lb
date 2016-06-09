#!/bin/bash
set -e
chown -R mysql:mysql /var/lib/mysql
mysql_install_db --user mysql > /dev/null
MYSQL_ROOT_PASSWORD=${MYSQL_ROOT_PASSWORD:-"admin"}
MYSQL_DATABASE=${MYSQL_DATABASE:-"br"}
MYSQL_USER=${MYSQL_USER:-"admin"}
MYSQL_PASSWORD=${MYSQL_PASSWORD:-"admin"}
MYSQLD_ARGS=${MYSQLD_ARGS:-""}
tfile=`mktemp`
if [[ ! -f "$tfile" ]]; then
return 1
fi
cat << EOF > $tfile
USE mysql;
FLUSH PRIVILEGES;
GRANT ALL PRIVILEGES ON *.* TO 'root'@'%' WITH GRANT OPTION;
UPDATE user SET password=PASSWORD("$MYSQL_ROOT_PASSWORD") WHERE user='root';
EOF
if [[ $MYSQL_DATABASE != "" ]]; then
echo "CREATE DATABASE IF NOT EXISTS \`$MYSQL_DATABASE\` CHARACTER SET utf8 COLLATE utf8_general_ci;" >> $tfile
if [[ $MYSQL_USER != "" ]]; then
echo "GRANT ALL ON \`$MYSQL_DATABASE\`.* to '$MYSQL_USER'@'%' IDENTIFIED BY '$MYSQL_PASSWORD';" >> $tfile
echo "use \`$MYSQL_DATABASE\`;" >> $tfile
#echo "CREATE TABLE project (pid int(11) NOT NULL,pname varchar(20) DEFAULT NULL,PRIMARY KEY (pid)) ENGINE=InnoDB DEFAULT CHARSET=utf8;" >> $tfile
#cat rms.sql >> $tfile
fi

fi
/usr/sbin/mysqld --bootstrap --verbose=0 $MYSQLD_ARGS < $tfile
#/usr/sbin/mysqld --bootstrap --verbose=0 $MYSQLD_ARGS
/etc/init.d/mysql start > /dev/null
mysql -u admin -padmin br < br.sql
/etc/init.d/mysql stop > /dev/null
#rm -f $tfile
exec /usr/sbin/mysqld $MYSQLD_ARGS

