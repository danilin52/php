<?php
declare(strict_types=1);
namespace MyProject\Classes;
require_once 'User.php';
/**
 * Класс супер-пользователя с расширенными правами
 * 
 * Наследует функциональность базового класса User и добавляет
 * дополнительные возможности для пользователей с административными правами.
 * 
 * @package MyProject\Classes
 * @extends User
 * @author Ваше Имя
 * @version 1.1.0
 * @since 2024
 */
class SuperUser extends User
{
    public $role;
    public function __construct($name, $login, $password, $role)
    {
        parent::__construct($name, $login, $password);
        $this->role = $role;
    }
    public function showInfo(): string  
    {
        return "<div class=\"super-user-info\">
                    <h3>Super User Info</h3>
                    <p><strong>Name:</strong> {$this->name}</p>
                    <p><strong>Login:</strong> {$this->login}</p>
                    <p><strong>Role:</strong> {$this->role}</p>
                </div>";
    }
}
