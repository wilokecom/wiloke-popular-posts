<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'vuongvlog' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'T@etAJ Bj&O@|M|R<;ae@eFN+niE{4bx00ONo]YIkd(]Hx/|]PMV?jTZWyR)jWuG' );
define( 'SECURE_AUTH_KEY',  'rEG~Nj%RBH_*-QJ<kO!tM35^-Ay!kv-`>btRy#<_]uZDSm)bzHt~cw[m.;SK9Psp' );
define( 'LOGGED_IN_KEY',    'Lw;u~872p~EmBWz&,@s%:hr^$&2{oGjKct2_^7hvd$EhvcrZ?G=^~fp-w{6CC-yC' );
define( 'NONCE_KEY',        ',R<!:rv5srBjH4}QBWJl_zID7.Q&:,/0okJv8VqfLb)j>2(U-|mis/N=pGFBN{0-' );
define( 'AUTH_SALT',        'NAteWmt!vT[~V?cr+m@,q1{%o&x7D.(G=Cn1z=X.GG0Ne>Mr*Ig- +Ni&2hBpx9[' );
define( 'SECURE_AUTH_SALT', '-I2E[qn$,ICr=gXksbQB]^^B&<)|L*(&acy Bj94(B}g0*sj-~8K 1djdzyMweln' );
define( 'LOGGED_IN_SALT',   'OYxLfi0(`K-f~,{DR2*4Eo.B^Q5>>4Ntrjq1Siutm@@7l}k6|J(76_oKmN^vU_^B' );
define( 'NONCE_SALT',       'Y 7eqsRrWlONiAVQ9shHm`B~<;@JR:=@hMj4aPsv!^!NMS5S,v: X,)~>jw&#f!3' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
