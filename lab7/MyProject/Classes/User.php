<?php
namespace MyProject\Classes;
/**
 * Базовый класс для представления пользователя системы
 * 
 * Класс содержит основные атрибуты пользователя: имя, логин и пароль.
 * Реализует базовую функциональность для отображения информации о пользователе.
 * 
 * @package MyProject\Classes
 * @author Ваше Имя
 * @version 1.0.0
 * @since 2024
 */
class User
{

    public $name;
    public $login;
    private $password;
    public function __construct($name, $login, $password)
    {
        $this->name = $name;
        $this->login = $login;
        $this->password = $password;
    }
    public function showInfo(): string   {
        return "<div class=\"user-info\">
                    <h3>User Info</h3>
                    <p><strong>Name:</strong> {$this->name}</p>
                    <p><strong>Login:</strong> {$this->login}</p>
                </div>";
    }   
    public function __destruct()
    {
        echo "<p>Пользователь {$this->login} удален.</p>";
    }
}
