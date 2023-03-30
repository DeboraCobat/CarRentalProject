<!-- <?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use DI\Container;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;
use Psr\Http\Message\UploadedFileInterface;
use Slim\Routing\RouteCollectorProxy;

require_once 'init.php';


if (isset($_POST["username"])) {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $pass1 = $_POST['pass1'];
            $pass2 = $_POST['pass2'];
            $errorList = [];
            // name must be 2-20 characters long
            if (preg_match('/^[a-z][a-z0-9_]{3,19}$/', $username) !== 1) {
                $errorList[] = "Username must be made up of 4-20 letters, digits, or underscore. The first character must be a letter";
                $username = "";
            } else { // validate that this username is not already registered
                $result = mysqli_query($link, sprintf("SELECT id FROM users WHERE username='%s'",
                    mysqli_real_escape_string($link, $username)));
                if (!$result) {
                    die("SQL Query failed: " . mysqli_error($link));
                }
                $userRecord = mysqli_fetch_assoc($result);
                if ($userRecord) {
                    $errorList[] ="This username is already registered";
                    $username = "";
                }
            }
            if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                $errorList[] = "Email does not look valid";
                $email = "";
            }
            if ($pass1 != $pass2) {
                $errorList[] = "Passwords do not match";
            }  else {
                if (
                    strlen($pass1) < 6 || strlen($pass1) > 100
                    || (preg_match("/[A-Z]/", $pass1) !== 1)
                    || (preg_match("/[a-z]/", $pass1) !== 1)
                    || (preg_match("/[0-9]/", $pass1) !== 1)
                ) {
                    $errorList[] = "Password must be 6-100 characters long and contain at least one "
                        . "uppercase letter, one lowercase, and one digit.";
                }
            }
            //
            if ($errorList) { // STATE 2: submission with errors
                echo '<ul class="errorMessage">' . "\n";
                foreach ($errorList as $error) {
                    echo "<li>$error</li>\n";
                }
                echo "</ul>\n";
            
            } else { // STATE 3: success
                // TODO: insert record to register a new user
                $sql = sprintf(
                    "INSERT INTO users VALUES (NULL, '%s', '%s', '%s')",
                    mysqli_real_escape_string($link, $username),
                    mysqli_real_escape_string($link, $email),
                    mysqli_real_escape_string($link, $pass1)
                );
                if (!mysqli_query($link, $sql)) {
                    die("Fatal error: failed to execute SQL query: " . mysqli_error($link));
                }
                echo "<p>Registration successful</p>";
                echo '<p><a href="index.php">Click to continue</a></p>';
            }
        } else {
        
        }

    ?> -->