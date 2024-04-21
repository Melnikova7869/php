
   <?php
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
          }
          
          // Файл для хранения даты рождения
          $birthdayFile = 'birthday.txt';
          function setBirthday($birthday) {
            global $birthdayFile;
          
            $birthdayStr = date('Y-m-d', $birthday);
            file_put_contents($birthdayFile, $birthdayStr);
          }
          
          // Функция расчета дней до дня рождения
          function getDaysToBirthday($birthday) {
            if (!$birthday) {
              return null; // Дата рождения не установлена
            }
          
            $today = time();
            $daysToBirthday = (int) ceil(($birthday - $today) / 86400); // Деление на 86400 секунд в сутках
            return $daysToBirthday;
          }
          
          // Обработка формы (при первом посещении)
          if (isset($_POST['birthday'])) {
            $birthdayStr = trim($_POST['birthday']);
            $birthday = strtotime($birthdayStr);
          
            if ($birthday !== false) {
              setBirthday($birthday);
              header('Location: ' . $_SERVER['SCRIPT_NAME']); // Обновить страницу
              exit;
            } else {
              echo "<p style='color: red;'>Неверный формат даты рождения.</p>";
            }
          }
          
          // Получение даты рождения
          $birthday = getBirthday();
          
          // Отображение сообщения
          if ($birthday) {
            $daysToBirthday = getDaysToBirthday($birthday);
          
            if ($daysToBirthday === 0) {
              echo "С днем рождения!"; // Сегодня день рождения
            } else if ($daysToBirthday > 0) {
              echo "До вашего дня рождения осталось $daysToBirthday дней.";
            } else {
              echo "Ваш день рождения уже был в этом году."; // Прошел день рождения
            }
          } else {
            echo "<form method='post'>Введите дату рождения: <input type='date' name='birthday' required> <button type='submit'>Сохранить</button></form>";
          }
          
    ?>
 
