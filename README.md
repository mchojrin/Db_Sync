# Db_Sync
An example application to have two applications synchronized using PHP

# Usage

To get the servers started used the script `start.sh` which will have two separate local php servers listening to ports 8001 for the receiving end and 8000 for the sending end.

Once done open a browser at `http://localhost:8000` and another one at `http://localhost:8001` to see what the current database state is for both applications.

Go to `http://localhost:8000/sync.php` to see the results of sending the information to the receiver and refresh the screen on `http://localhost:8001` to see the end result
