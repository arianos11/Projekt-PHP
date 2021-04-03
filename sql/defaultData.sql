INSERT INTO `diets` (`diet_id`, `diet_name`, `diet_price`, `diet_photo`, `diet_description`, `diet_create_date`, `diet_status`) VALUES
(1, 'Fit', 40, '', 'Idealna dla osób fit', '2021-03-28 19:42:11', 1),
(2, 'Standard', 50, '', 'Jeżeli chcesz utrzymać mase', '2021-04-02 15:17:57', 1),
(3, 'Masa', 70, 'pexels-ella-olsson-1640777 (1).jpg', 'Najpierw masa potem masa', '2021-04-02 19:06:25', 1);

INSERT INTO `orders` (`order_id`, `user_id`, `diet_id`) VALUES
(1, 1, 1),
(2, 1, 2);

INSERT INTO `users` (`user_id`, `user_first_name`, `user_last_name`, `user_email`, `user_password`, `user_create_date`, `user_update_date`, `user_city`, `user_postal_code`, `user_adress`, `user_image`) VALUES
(1, 'Janusz', 'Kowalski', 'janusz.kowalski@wszechpolak.pl', '$2y$12$dtzuICOhuR.IHzdBZswdIuHRPblvBdsT3Suwd4lIsDWmvO/YKkD22', '2021-04-03 21:58:26', '2021-04-03 21:58:26', 'Poznań', '62-019', 'Poznańska 123', NULL),
(2, 'Grażyna', 'Kowalska', 'grazyna.kowalska@wszechpolak.pl', '$2y$12$dtzuICOhuR.IHzdBZswdIuHRPblvBdsT3Suwd4lIsDWmvO/YKkD22', '2021-04-03 21:58:26', '2021-04-03 21:58:26', 'Poznań', '62-019', 'Poznańska 123', NULL);