<?php
/**
 * 这是一个移植主题 命名为Magic
 * @package Magic
 * @author yiny
 * @version v0.1
 * @link https://www.shizuri.net
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
require_once 'functions.php';
?>

    <svg id="clip-paths" width="0" height="0" version="1.1" xmlns="http://www.w3.org/2000/svg"
         xmlns:xlink="http://www.w3.org/1999/xlink">
        <g></g>
    </svg>
    <div id="page">
        <header>
            <div id="header-content">
                <div id="header-logo">
                    <img class="logo" src="<?php $this->options->logo(); ?>" width=50%></image>
                </div>
                <h1><?php $this->author(); ?> </h1>
                <p><?php $this->options->self_intro(); ?></p>
                <div id="contact">
                    <a href="https://twitter.com/<?php echo $this->options->tw_name; ?>" id="twitter" target="_blank">
                        <svg viewBox="0 0 42 36" xmlns="http://www.w3.org/2000/svg">
                            <path d="M40.885 5.917a16.098 16.098 0 0 1-4.7 1.315 8.35 8.35 0 0 0 3.598-4.62 16.18 16.18 0 0 1-5.196 2.026A8.094 8.094 0 0 0 28.614 2c-4.52 0-8.183 3.74-8.183 8.353 0 .655.073 1.293.213 1.904-6.8-.348-12.83-3.674-16.866-8.728a8.447 8.447 0 0 0-1.108 4.2 8.397 8.397 0 0 0 3.64 6.952 8.024 8.024 0 0 1-3.707-1.045v.105c0 4.047 2.82 7.423 6.563 8.19a8.035 8.035 0 0 1-3.695.144c1.042 3.32 4.064 5.734 7.645 5.8A16.206 16.206 0 0 1 1 31.337a22.818 22.818 0 0 0 12.544 3.754c15.05 0 23.282-12.73 23.282-23.768 0-.362-.008-.723-.024-1.08a16.82 16.82 0 0 0 4.083-4.325z"/>
                        </svg>
                    </a>
                    <a href="https://github.com/<?php echo $this->options->g_name; ?>" id="github" target="_blank">
                        <svg aria-labelledby="simpleicons-github-icon" role="img" viewBox="0 0 24 24"
                             xmlns="http://www.w3.org/2000/svg"><title id="simpleicons-github-icon">GitHub icon</title>
                            <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/>
                        </svg>
                    </a>
                    <a href="<?php echo "https://" . $this->options->blog_url; ?>" id="blog" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
                            <path d="M 9 4 C 6.239 4 4 6.239 4 9 L 4 41 C 4 43.761 6.239 46 9 46 L 41 46 C 43.761 46 46 43.761 46 41 L 46 9 C 46 6.239 43.761 4 41 4 L 9 4 z M 20 12 L 25 12 C 29.42 12 33.033 15.632547 33 20.060547 C 32.991 21.141547 33.919 22 35 22 L 36 22 C 37.105 22 38 22.895 38 24 L 38 30 C 38 34.4 34.4 38 30 38 L 20 38 C 15.6 38 12 34.4 12 30 L 12 25 L 12 20 C 12 15.6 15.6 12 20 12 z M 20 18 C 18.9 18 18 18.9 18 20 C 18 21.1 18.9 22 20 22 L 25 22 C 26.1 22 27 21.1 27 20 C 27 18.9 26.1 18 25 18 L 20 18 z M 20 28 C 18.9 28 18 28.9 18 30 C 18 31.1 18.9 32 20 32 L 30 32 C 31.1 32 32 31.1 32 30 C 32 28.9 31.1 28 30 28 L 20 28 z"></path>
                        </svg>
                    </a>
                    <a href="mailto:<?php echo $this->options->email; ?>" id="email">
                        <svg viewBox="0 0 42 36" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.025 5.255A1.99 1.99 0 0 1 4.003 5h33.994c.354 0 .688.093.977.256L21 18.5 3.025 5.255zm-1.002 1.45c-.015.098-.023.2-.023.302V18.28v-5.636 17.35C2 31.1 2.902 32 4.003 32h33.994A2.005 2.005 0 0 0 40 29.993v-17.35 5.638V7.008c0-.103-.008-.204-.023-.303L21 20.687 2.023 6.704z"/>
                        </svg>
                    </a>
                </div>
                <div id="footer">
                    <?php echo date('Y'); ?> <a
                            href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
                    <p> <?php _e('Using <a target="_blank" href="http://www.typecho.org">Typecho</a> & <a target="_blank" href="https://github.com/SorashitaInnei/Magic-for-typecho">Magic.</a>'); ?></p>

                </div>
            </div>
        </header>
        <div id="content">
            <section id="articles">
                <h2>文章</h2>
                <ul>
                    <?php
                    if ($this->options->db_host == null || $this->options->db_uname == null):
                        var_dump($this->options->db_host, $this->options->db_uname);
                        $this->widget('Widget_Contents_Post_Recent', 'pageSize=6')->parse('<li><a href="' . $this->options->siteUrl . '{pathinfo}" target="_blank">{title}</a></li>');
                    else:
                        replace_db($this->options->db_host, $this->options->db_uname, $this->options->db_passwd);
                        $this->widget('Widget_Contents_Post_Recent', 'pageSize=6')->parse('<li><a href="https://' . $this->options->blog_url . '{pathinfo}" target="_blank">{title}</a></li>');
                        restore_db();
                    endif; ?>
                </ul>
                <p>

                </p>
                <a target="_blank" href="https://<?php $this->options->blog_url(); ?>" class="more">在博客查看更多
                    <svg viewBox="0 0 10 16" version="1.1" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path class="arrow"
                              d="M1.01362083,12.9421826 L1,15.6012598 L9.21426767,8.3533766 L1.07301897,1.34639246 L1.05985086,3.91708947 L6.21426767,8.3533766 L1.01362083,12.9421826 Z"></path>
                    </svg>
                </a>
            </section>
            <section id="openSource">
                <h2>开源</h2>
                <ul>
                    <?php
                    if ($this->options->g_name == null):
                    else:
                    get_data($this->options->g_name);
                    $repo_name = get_repo();
                    $repo_url = get_url();
                    $all = array();
                    $all = array_map(function ($i1, $i2) {
                        return '<a href="' . $i1 . '" target="_blank">' . $i2 . '</a>';
                    }, $repo_url, $repo_name);
                    foreach ($all as $item) {
                        echo '<li>' . $item . '</li>';
                    }
                    ?>

                </ul>
                <a href="https://github.com/<?php $this->options->g_name(); ?>?tab=repositories" class="more"
                   target="_blank">在 GitHub 查看更多
                    <svg viewBox="0 0 10 16" version="1.1" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path class="arrow"
                              d="M1.01362083,12.9421826 L1,15.6012598 L9.21426767,8.3533766 L1.07301897,1.34639246 L1.05985086,3.91708947 L6.21426767,8.3533766 L1.01362083,12.9421826 Z"></path>
                    </svg>
                </a> <?php endif;
                ?>
            </section>
            <section id="music">
                <h2>朋友</h2>
                <ul>
                    <?php $this->options->link(); ?>
                </ul>
            </section>
        </div>
    </div>
    <svg id="page-stripes" class="full-size" width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg"
         xmlns:xlink="http://www.w3.org/1999/xlink"></svg>
    </svg>
    <div id="intro" class="full-size">
        <div id="logo-container" class="full-size">
            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="460.000000pt" height="460.000000pt"
                 viewBox="0 0 460.000000 460.000000" preserveAspectRatio="xMidYMid meet">
                <metadata>
                    Created by potrace 1.15, written by Peter Selinger 2001-2017
                </metadata>
                <g transform="translate(0.000000,460.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
                    <path d="M1090 5194 c-11 -27 -26 -60 -34 -74 -7 -14 -32 -86 -56 -160 -49 -157 -108 -331 -178 -520 -85 -233 -102 -288 -108 -348 -3 -31 -7 -63 -9 -69 -3 -7 3 -13 12 -13 14 0 14 -2 -3 -16 -10 -8 -13 -12 -5 -8 12 6 13 -7 7 -79 -4 -48 -12 -102 -19 -120 -10 -27 -13 -153 -7 -334 0 -13 5 -23 10 -23 6 0 10 -11 10 -24 0 -14 5 -37 11 -53 7 -15 13 -35 15 -43 1 -8 6 -31 9 -50 4 -19 11 -38 17 -41 5 -3 9 -9 8 -13 -2 -6 3 -23 15 -58 6 -19 7 -23 6 -30 0 -5 3 -8 9 -8 5 0 7 -7 4 -15 -4 -9 0 -15 10 -15 9 0 16 -5 16 -11 0 -8 5 -8 15 1 8 7 15 25 15 40 0 17 5 27 15 27 8 0 12 -4 9 -9 -3 -5 8 -13 25 -19 17 -6 31 -15 31 -21 0 -5 -4 -6 -10 -3 -16 10 -11 -31 5 -45 12 -10 15 -10 15 1 0 12 2 12 9 0 5 -8 7 -20 4 -26 -2 -7 3 -19 11 -28 14 -14 14 -16 -2 -20 -10 -3 -6 -5 11 -6 16 -1 27 -7 27 -15 0 -8 13 -20 29 -27 16 -7 27 -18 24 -23 -4 -5 1 -7 10 -3 29 11 42 -30 42 -135 0 -54 -4 -98 -9 -98 -5 0 -3 -7 4 -15 7 -8 10 -21 7 -29 -12 -31 21 -22 54 15 42 47 50 49 38 7 -18 -63 -8 -218 12 -186 7 10 9 10 9 0 0 -7 -7 -15 -17 -19 -14 -5 -13 -8 6 -15 15 -5 21 -14 17 -23 -3 -8 4 -21 17 -30 13 -9 16 -15 7 -15 -9 0 -8 -5 6 -15 23 -17 43 -20 26 -3 -15 15 -16 29 -1 26 6 -2 14 3 16 10 3 6 0 12 -5 12 -5 0 0 24 10 53 10 28 21 60 25 69 3 10 9 15 15 12 5 -3 4 -12 -3 -20 -6 -8 -8 -14 -3 -14 5 0 2 -5 -6 -10 -12 -7 -13 -13 -3 -28 7 -13 8 -33 3 -64 -24 -128 -29 -364 -9 -415 6 -15 13 -67 14 -114 2 -47 10 -102 19 -122 13 -31 13 -37 1 -37 -32 0 -118 42 -174 86 -84 65 -125 150 -141 289 -11 102 -13 105 -66 142 -50 36 -49 37 -43 -63 4 -68 11 -100 25 -120 10 -15 30 -45 43 -68 13 -22 30 -46 37 -54 7 -7 11 -19 8 -27 -4 -8 -2 -15 4 -15 5 0 31 -32 57 -71 56 -83 105 -139 122 -139 6 0 15 -9 18 -20 3 -11 9 -20 13 -20 4 0 23 -14 42 -30 19 -16 38 -30 42 -30 3 0 30 -20 59 -45 29 -25 59 -45 66 -45 7 0 13 -4 13 -10 0 -5 24 -26 54 -46 41 -27 60 -34 78 -29 37 12 107 59 108 72 0 7 5 12 11 10 28 -6 14 22 -36 78 -30 33 -55 63 -55 68 0 4 -10 24 -23 45 -63 101 -106 262 -114 429 -6 109 -5 113 15 113 15 0 19 5 16 23 -2 12 -2 16 2 10 3 -7 9 -13 14 -13 4 0 7 6 6 13 0 6 4 12 9 12 6 0 9 -3 7 -7 -1 -5 7 -8 17 -8 11 0 23 -9 26 -20 3 -11 10 -20 15 -20 5 0 16 -7 24 -16 9 -8 16 -11 16 -5 0 6 10 11 23 11 21 -1 21 -1 3 -15 -17 -13 -17 -14 10 -12 22 1 29 -2 29 -16 0 -10 5 -21 10 -25 19 -13 35 -51 25 -57 -6 -3 -10 -11 -10 -16 0 -6 4 -8 9 -5 20 13 71 -172 77 -277 2 -37 8 -76 14 -87 6 -11 8 -20 6 -20 -3 0 1 -18 9 -39 7 -22 11 -42 8 -45 -4 -3 -1 -6 5 -6 7 0 15 0 20 0 9 0 9 4 11 86 1 58 3 65 16 54 8 -7 12 -16 10 -21 -3 -4 1 -24 9 -43 8 -19 11 -37 8 -41 -4 -4 0 -5 8 -3 8 2 15 -4 15 -12 0 -8 4 -20 7 -26 4 -6 10 -42 13 -80 4 -38 13 -76 21 -85 8 -8 14 -21 14 -28 0 -39 69 29 137 135 11 18 14 17 43 -16 56 -62 97 -171 84 -228 -5 -26 -5 -26 10 -8 9 11 16 26 16 33 0 7 8 13 18 13 14 0 15 -2 2 -10 -8 -5 -10 -10 -4 -10 36 0 179 162 229 260 27 53 28 54 36 28 13 -50 70 -137 111 -173 50 -42 90 -51 153 -33 45 12 49 16 61 58 21 71 44 90 110 90 31 0 98 5 151 11 75 9 97 9 106 -1 9 -10 8 -12 -5 -7 -12 4 -23 -1 -33 -17 -14 -21 -74 -181 -75 -198 0 -5 10 -9 23 -9 12 -1 -4 -5 -36 -10 -32 -5 -65 -13 -75 -19 -14 -9 -12 -10 8 -3 14 4 54 8 90 9 36 0 77 4 91 8 40 11 44 -9 8 -35 -21 -15 -27 -24 -19 -29 9 -6 4 -20 -19 -51 -133 -185 -223 -359 -282 -542 -19 -59 -19 -114 0 -102 5 2 12 -2 15 -11 3 -8 2 -12 -4 -9 -6 3 -10 2 -10 -3 0 -5 14 -12 31 -16 17 -3 28 -10 24 -16 -3 -5 -1 -10 5 -10 8 0 8 -6 0 -20 -11 -21 3 -29 15 -9 4 6 20 7 38 3 38 -8 70 -28 60 -37 -3 -4 -1 -7 4 -7 6 0 13 5 15 11 3 8 9 6 20 -5 15 -15 21 -12 70 32 69 63 388 336 447 384 103 83 150 121 236 187 50 38 97 76 106 83 25 23 271 173 307 187 29 12 35 12 52 -5 10 -10 25 -24 32 -31 7 -6 24 -26 38 -44 14 -18 39 -50 55 -71 63 -79 74 -96 86 -120 11 -25 12 -25 30 -7 23 23 30 23 139 5 93 -15 117 -17 140 -9 8 3 61 5 117 4 58 0 105 3 108 9 4 7 -56 9 -173 8 -99 -2 -175 0 -169 4 7 4 12 13 12 19 0 7 6 14 13 17 6 2 12 -1 12 -7 0 -22 16 -10 18 13 1 18 -3 23 -21 21 -12 -1 -14 0 -4 2 19 5 24 23 5 23 -6 0 -8 3 -5 7 4 3 17 2 30 -4 33 -16 149 -45 155 -39 2 3 -7 11 -22 17 -14 7 -26 16 -26 21 0 4 -3 7 -7 7 -19 -3 -34 2 -29 9 3 5 -10 14 -28 20 -30 11 -89 62 -72 62 5 0 -2 9 -15 19 -41 33 -13 34 32 2 23 -17 48 -31 55 -31 7 0 16 -9 19 -20 3 -11 14 -20 23 -20 13 0 17 10 18 48 1 55 34 154 82 250 14 28 22 32 47 30 26 -3 35 -12 65 -69 19 -37 46 -80 60 -97 31 -37 120 -92 149 -92 25 0 26 4 4 40 -15 25 -15 38 -6 100 6 40 14 74 17 77 8 8 166 -40 191 -57 11 -8 116 -66 158 -87 15 -8 27 -18 27 -23 0 -4 9 -10 19 -13 13 -3 21 -15 23 -38 l4 -34 8 28 c6 21 4 33 -9 47 -17 18 -17 21 2 62 39 82 39 81 -24 125 -66 45 -201 113 -226 113 -9 0 -17 4 -17 9 0 9 191 106 271 137 24 9 89 43 145 76 55 32 106 58 112 58 6 0 10 -12 10 -28 -1 -69 45 -182 100 -241 32 -34 44 -41 57 -33 12 6 14 11 6 16 -6 4 -11 15 -11 26 0 10 -16 37 -35 60 -40 47 -39 45 -25 71 6 11 7 19 3 18 -4 -1 -14 -1 -22 0 -16 1 -5 16 11 16 18 0 21 24 5 31 -13 5 -13 9 -2 31 8 15 12 30 9 35 -3 4 1 8 9 8 9 0 14 -9 13 -23 -1 -12 2 -33 6 -46 5 -13 10 -37 12 -53 2 -16 9 -35 15 -41 9 -9 10 -2 5 28 -10 53 -7 125 7 210 7 39 12 76 12 83 0 6 4 12 8 12 4 0 11 15 14 32 4 18 16 45 26 59 10 14 15 29 12 33 -8 8 38 42 51 38 5 -2 3 5 -5 14 -8 10 -9 15 -3 11 7 -4 14 0 18 8 3 8 10 15 15 15 7 0 7 -9 1 -25 -9 -23 -8 -25 10 -15 11 6 20 19 20 29 0 10 8 22 18 25 32 12 62 33 55 39 -3 4 -1 7 5 7 7 0 12 5 12 10 0 6 13 24 29 39 54 53 138 273 165 434 4 20 10 37 15 37 12 0 -16 -176 -41 -255 -12 -38 -35 -98 -51 -132 -16 -35 -27 -67 -25 -73 2 -6 20 3 40 20 21 17 38 25 40 19 2 -6 13 7 23 30 11 22 24 41 28 41 5 0 5 4 2 10 -3 5 0 7 9 4 8 -3 19 3 26 15 6 12 18 21 26 21 9 0 29 14 45 31 16 17 29 28 29 24 0 -5 21 14 47 41 27 27 47 54 45 61 -2 7 4 13 12 13 8 0 18 9 21 20 3 11 13 20 21 20 8 0 14 5 14 11 0 5 -6 7 -12 3 -7 -3 -1 4 13 17 14 13 41 60 58 104 18 44 39 87 47 96 8 9 14 20 13 25 -1 5 3 23 10 39 7 17 15 41 17 54 3 13 9 31 13 40 5 9 12 36 16 61 4 25 10 49 13 54 3 6 7 19 8 30 1 12 5 39 9 61 3 22 7 60 9 85 2 25 6 64 11 88 6 35 3 47 -12 64 -10 12 -13 18 -6 15 18 -11 27 12 27 72 1 70 21 79 31 14 10 -72 16 -93 26 -88 4 3 4 17 -1 31 -6 14 -10 40 -10 57 0 44 -43 204 -59 220 -10 10 -11 6 -7 -18 2 -16 5 -31 6 -32 1 -2 2 -29 2 -60 0 -37 -4 -58 -11 -57 -28 2 -31 5 -31 28 0 13 -7 27 -16 30 -8 3 -13 10 -9 15 3 5 1 12 -5 16 -5 3 -7 20 -3 37 4 22 3 29 -5 24 -7 -4 -12 -1 -12 7 0 7 -11 20 -25 27 -14 7 -25 18 -25 25 0 6 -6 17 -12 23 -10 10 -16 -1 -31 -50 -10 -35 -20 -79 -23 -98 -3 -19 -9 -52 -15 -73 -5 -20 -7 -42 -4 -47 3 -5 1 -11 -5 -15 -5 -3 -10 -15 -10 -25 0 -10 -7 -25 -15 -33 -7 -8 -17 -27 -21 -42 -4 -14 -12 -28 -18 -31 -19 -6 -69 -15 -101 -18 -67 -6 -73 -12 -80 -84 -9 -91 -11 -95 -19 -37 -13 100 -23 120 -55 123 -25 2 -40 -7 -80 -47 -33 -33 -59 -50 -82 -54 -19 -2 -37 -3 -41 -1 -11 7 0 90 31 234 16 74 33 178 36 230 9 126 9 406 -1 495 -4 38 -7 75 -6 81 1 6 -7 19 -18 29 -24 21 -26 41 -5 48 12 5 12 10 0 33 -7 14 -11 33 -8 40 4 10 0 12 -13 8 -17 -5 -17 -4 -4 8 9 7 14 21 12 31 -2 9 1 17 7 17 6 0 16 10 22 23 11 20 11 21 -4 9 -13 -11 -15 -10 -10 8 6 22 23 38 23 21 0 -5 9 -12 20 -16 11 -3 41 -23 67 -44 67 -52 115 -80 176 -102 74 -27 80 -25 104 30 l20 49 49 -6 49 -5 -18 24 c-9 13 -22 34 -27 47 -5 12 -14 22 -19 22 -6 0 -6 12 0 32 11 39 12 64 2 54 -13 -13 -31 -77 -26 -95 3 -10 -1 -22 -8 -26 -8 -5 -10 -4 -5 3 5 8 0 12 -13 12 -11 0 -37 10 -58 21 -21 12 -63 35 -93 52 -30 16 -62 35 -70 42 -8 7 -22 15 -30 19 -20 9 -50 27 -77 47 -22 15 -98 154 -142 257 -27 65 -40 62 -17 -4 19 -55 20 -74 6 -74 -6 0 -13 14 -17 30 -3 17 -11 30 -18 30 -10 0 -9 -20 6 -86 33 -152 1 -302 -104 -489 -33 -60 -68 -124 -76 -142 -29 -64 -59 -49 -137 69 -24 38 -49 68 -54 68 -6 0 -32 -16 -59 -35 -60 -43 -88 -45 -97 -7 -3 15 -12 50 -19 77 -8 28 -18 83 -24 123 -10 74 -21 106 -21 61 0 -51 22 -207 36 -257 l15 -53 46 2 c71 5 73 -2 67 -286 -2 -132 -9 -278 -15 -325 -22 -170 -60 -397 -85 -500 -14 -58 -36 -163 -50 -234 -77 -393 -256 -743 -459 -897 -49 -37 -166 -107 -145 -87 3 3 29 26 59 52 192 169 313 389 411 746 18 63 41 145 52 183 11 37 18 73 15 80 -2 6 -10 -8 -17 -33 -19 -71 -88 -239 -127 -310 -115 -212 -420 -494 -660 -610 -71 -35 -86 -37 -79 -12 2 9 7 37 11 62 10 70 53 240 80 321 14 40 23 75 20 77 -2 3 -7 -4 -11 -14 -3 -10 -14 -37 -24 -59 -27 -63 -58 -172 -75 -270 -36 -200 -45 -262 -45 -294 0 -59 -10 -27 -18 55 -6 71 -9 79 -27 76 -20 -4 -20 -4 0 11 46 34 4 21 -72 -23 -88 -50 -214 -96 -240 -86 -13 5 -2 20 48 64 93 82 216 209 236 243 10 16 25 31 34 34 10 4 22 31 33 78 19 77 65 244 114 417 17 58 58 187 92 288 64 191 76 263 30 175 -14 -26 -37 -67 -53 -90 -25 -38 -71 -130 -135 -273 -77 -172 -132 -337 -187 -560 -15 -63 -32 -125 -37 -136 -18 -40 -165 -179 -229 -216 -50 -30 -74 -38 -114 -38 -32 0 -45 -3 -36 -9 11 -7 11 -10 0 -15 -29 -13 190 7 254 23 65 17 67 17 67 -1 0 -24 -25 -33 -130 -47 -117 -16 -126 -31 -18 -31 124 0 133 -6 103 -67 -13 -25 -23 -31 -61 -37 -74 -10 -134 -7 -134 6 0 6 -3 9 -6 5 -3 -3 -17 -2 -31 4 -22 8 -24 7 -17 -13 10 -35 96 -196 114 -216 33 -36 61 -82 50 -82 -7 0 -14 9 -17 20 -3 11 -10 20 -17 20 -6 0 -27 22 -46 48 -19 25 -50 62 -67 81 -18 19 -36 43 -39 53 -8 27 -24 22 -24 -7 0 -29 60 -155 83 -173 29 -25 7 -50 -79 -91 -86 -42 -105 -57 -56 -47 33 7 65 -15 60 -41 -2 -10 -28 -32 -58 -50 -119 -69 -183 -109 -222 -138 -23 -16 -67 -48 -97 -69 -31 -22 -90 -69 -132 -105 -42 -36 -107 -91 -144 -121 -69 -55 -126 -105 -265 -230 -41 -37 -93 -83 -114 -101 -22 -19 -48 -42 -58 -51 -10 -10 -22 -18 -27 -18 -5 0 -16 -11 -25 -25 -32 -49 -35 -13 -5 68 34 92 119 271 171 362 20 33 47 80 60 105 52 93 71 126 88 150 9 14 19 32 23 41 16 46 135 97 192 83 20 -5 27 -1 35 21 5 14 10 40 10 57 0 30 -19 97 -30 108 -3 3 -15 24 -26 47 l-22 42 29 6 c16 4 29 11 29 17 0 6 -10 8 -22 5 -13 -3 -48 -9 -78 -13 -30 -3 -107 -19 -170 -34 -210 -52 -479 -69 -571 -37 -76 26 -329 153 -399 199 -278 184 -552 422 -668 580 -88 120 -179 321 -207 456 -19 92 -18 288 2 457 16 133 12 459 -6 531 -6 22 -13 72 -16 110 -6 63 -10 101 -14 114 -1 3 -6 -2 -11 -10 -5 -8 -7 -38 -3 -67 9 -85 2 -90 -60 -43 -30 22 -58 40 -64 40 -16 0 -38 31 -57 80 -10 25 -22 52 -27 60 -58 100 -79 206 -78 397 0 82 6 178 13 216 7 37 10 67 6 67 -9 0 -80 -221 -95 -299 -6 -27 -9 -31 -20 -20 -28 31 -85 251 -86 334 -1 30 -4 55 -8 55 -4 0 -20 -48 -36 -106 -16 -59 -31 -102 -32 -97 -4 11 16 103 46 213 11 41 25 125 31 185 6 61 17 142 24 180 8 39 12 72 10 74 -2 2 -13 -18 -24 -45z m5126 -884 c13 0 24 -6 24 -13 0 -8 9 -22 20 -32 32 -29 58 -133 71 -277 12 -146 3 -357 -17 -390 -8 -13 -74 -38 -103 -38 -14 -1 -43 -7 -65 -15 -49 -17 -59 -13 -75 31 -7 19 -19 38 -27 41 -19 7 -19 170 0 318 8 61 20 189 26 285 7 96 14 182 17 190 3 10 20 -3 54 -43 36 -40 58 -57 75 -57z"/>
                    <path d="M1101 3572 c-96 -94 -116 -122 -88 -122 6 0 4 -5 -5 -11 -10 -5 -18
      -17 -18 -24 0 -8 -4 -15 -10 -15 -5 0 -10 -9 -10 -21 0 -12 -5 -19 -12 -17
      -21 7 -38 -79 -28 -134 11 -55 26 -83 55 -97 16 -8 17 -10 3 -10 -9 -1 -19 -5
      -22 -10 -4 -5 3 -7 14 -4 12 3 29 -2 40 -12 18 -16 20 -17 20 -2 0 13 10 17
      42 17 42 0 117 28 118 44 0 13 73 91 85 91 5 0 12 11 13 25 2 13 15 37 28 53
      13 16 24 39 24 53 0 13 5 24 11 24 9 0 10 18 4 63 -4 34 -8 72 -9 84 0 11 -4
      19 -9 16 -8 -5 -67 54 -67 68 0 5 -4 9 -10 9 -5 0 -10 -4 -10 -10 0 -5 -12
      -10 -28 -10 -15 0 -39 -8 -52 -17 -24 -17 -24 -16 4 21 50 67 21 48 -83 -52z"/>
                    <path d="M3872 5606 c-12 -20 -22 -40 -22 -43 0 -4 -10 -27 -21 -52 -12 -25
      -34 -73 -49 -106 -24 -52 -47 -114 -115 -310 -68 -199 -163 -551 -151 -563 12
      -11 23 14 36 83 14 77 36 136 54 147 8 6 7 8 -1 8 -18 0 -16 20 6 62 10 20 21
      54 24 75 9 53 84 275 154 453 4 8 7 17 8 20 1 3 9 22 18 42 10 21 17 40 17 43
      0 4 16 40 36 81 38 80 42 122 6 60z"/>
                    <path d="M4637 5474 c-32 -46 -64 -84 -71 -84 -7 0 -57 16 -112 35 -106 38
      -325 95 -362 95 -17 0 -22 -6 -22 -27 0 -38 7 -45 60 -67 68 -28 74 -30 233
      -81 81 -26 147 -50 147 -52 0 -3 -17 -35 -39 -71 -37 -65 -172 -322 -184 -352
      -8 -22 -22 0 -48 78 -11 34 -24 62 -29 62 -8 0 5 -52 35 -130 9 -25 16 -60 16
      -77 -1 -24 7 -42 34 -70 l35 -38 -6 32 c-5 26 7 58 68 181 42 82 94 182 118
      223 84 146 78 139 108 130 15 -5 47 -14 72 -22 25 -7 49 -16 55 -21 5 -4 15
      -8 23 -8 8 0 28 -6 45 -14 18 -7 59 -23 92 -35 33 -13 79 -32 102 -42 58 -28
      97 -22 101 13 3 23 -3 29 -44 47 -25 12 -51 21 -55 21 -5 0 -55 23 -110 50
      -55 28 -108 50 -118 50 -9 0 -21 4 -26 8 -6 5 -31 17 -57 26 -27 10 -48 19
      -48 20 0 15 66 129 90 154 16 18 30 39 30 45 -1 7 -9 2 -19 -10 -11 -13 -25
      -23 -33 -23 -7 0 -33 -28 -57 -61 -24 -33 -46 -58 -48 -55 -3 3 16 37 42 76
      25 40 45 73 43 75 -2 2 -29 -35 -61 -81z"/>
                    <path d="M6010 5394 c-122 -52 -202 -73 -291 -76 -59 -1 -144 13 -194 32 -26
      10 -155 48 -222 65 -47 12 -53 11 -72 -6 -12 -11 -21 -23 -21 -28 0 -22 55
      -50 212 -108 67 -25 85 -27 218 -27 105 -1 163 4 210 16 98 25 140 32 140 20
      0 -5 -18 -32 -41 -61 -22 -28 -37 -51 -32 -51 4 0 3 -4 -3 -8 -40 -26 -106
      -212 -75 -212 6 0 11 15 11 33 0 52 82 197 188 332 4 6 17 25 27 43 11 17 23
      32 28 32 4 0 6 4 2 9 -3 5 4 12 15 16 19 6 29 26 13 24 -5 0 -55 -21 -113 -45z"/>
                    <path d="M1090 5194 c-11 -27 -26 -60 -34 -74 -7 -14 -32 -86 -56 -160 -49
      -157 -108 -331 -178 -520 -85 -233 -102 -288 -108 -348 -3 -31 -7 -63 -9 -69
      -3 -7 3 -13 12 -13 14 0 14 -2 -3 -16 -10 -8 -13 -12 -5 -8 12 6 13 -7 7 -79
      -4 -48 -12 -102 -19 -120 -10 -27 -13 -153 -7 -334 0 -13 5 -23 10 -23 6 0 10
      -11 10 -24 0 -14 5 -37 11 -53 7 -15 13 -35 15 -43 1 -8 6 -31 9 -50 4 -19 11
      -38 17 -41 5 -3 9 -9 8 -13 -2 -6 3 -23 15 -58 6 -19 7 -23 6 -30 0 -5 3 -8 9
      -8 5 0 7 -7 4 -15 -4 -9 0 -15 10 -15 9 0 16 -5 16 -11 0 -8 5 -8 15 1 8 7 15
      25 15 40 0 17 5 27 15 27 8 0 12 -4 9 -9 -3 -5 8 -13 25 -19 17 -6 31 -15 31
      -21 0 -5 -4 -6 -10 -3 -16 10 -11 -31 5 -45 12 -10 15 -10 15 1 0 12 2 12 9 0
      5 -8 7 -20 4 -26 -2 -7 3 -19 11 -28 14 -14 14 -16 -2 -20 -10 -3 -6 -5 11 -6
      16 -1 27 -7 27 -15 0 -8 13 -20 29 -27 16 -7 27 -18 24 -23 -4 -5 1 -7 10 -3
      29 11 42 -30 42 -135 0 -54 -4 -98 -9 -98 -5 0 -3 -7 4 -15 7 -8 10 -21 7 -29
      -12 -31 21 -22 54 15 42 47 50 49 38 7 -18 -63 -8 -218 12 -186 7 10 9 10 9 0
      0 -7 -7 -15 -17 -19 -14 -5 -13 -8 6 -15 15 -5 21 -14 17 -23 -3 -8 4 -21 17
      -30 13 -9 16 -15 7 -15 -9 0 -8 -5 6 -15 23 -17 43 -20 26 -3 -15 15 -16 29
      -1 26 6 -2 14 3 16 10 3 6 0 12 -5 12 -5 0 0 24 10 53 10 28 21 60 25 69 3 10
      9 15 15 12 5 -3 4 -12 -3 -20 -6 -8 -8 -14 -3 -14 5 0 2 -5 -6 -10 -12 -7 -13
      -13 -3 -28 7 -13 8 -33 3 -64 -24 -128 -29 -364 -9 -415 6 -15 13 -67 14 -114
      2 -47 10 -102 19 -122 13 -31 13 -37 1 -37 -32 0 -118 42 -174 86 -84 65 -125
      150 -141 289 -11 102 -13 105 -66 142 -50 36 -49 37 -43 -63 4 -68 11 -100 25
      -120 10 -15 30 -45 43 -68 13 -22 30 -46 37 -54 7 -7 11 -19 8 -27 -4 -8 -2
      -15 4 -15 5 0 31 -32 57 -71 56 -83 105 -139 122 -139 6 0 15 -9 18 -20 3 -11
      9 -20 13 -20 4 0 23 -14 42 -30 19 -16 38 -30 42 -30 3 0 30 -20 59 -45 29
      -25 59 -45 66 -45 7 0 13 -4 13 -10 0 -5 24 -26 54 -46 41 -27 60 -34 78 -29
      37 12 107 59 108 72 0 7 5 12 11 10 28 -6 14 22 -36 78 -30 33 -55 63 -55 68
      0 4 -10 24 -23 45 -63 101 -106 262 -114 429 -6 109 -5 113 15 113 15 0 19 5
      16 23 -2 12 -2 16 2 10 3 -7 9 -13 14 -13 4 0 7 6 6 13 0 6 4 12 9 12 6 0 9
      -3 7 -7 -1 -5 7 -8 17 -8 11 0 23 -9 26 -20 3 -11 10 -20 15 -20 5 0 16 -7 24
      -16 9 -8 16 -11 16 -5 0 6 10 11 23 11 21 -1 21 -1 3 -15 -17 -13 -17 -14 10
      -12 22 1 29 -2 29 -16 0 -10 5 -21 10 -25 19 -13 35 -51 25 -57 -6 -3 -10 -11
      -10 -16 0 -6 4 -8 9 -5 20 13 71 -172 77 -277 2 -37 8 -76 14 -87 6 -11 8 -20
      6 -20 -3 0 1 -18 9 -39 7 -22 11 -42 8 -45 -4 -3 -1 -6 5 -6 7 0 15 0 20 0 9
      0 9 4 11 86 1 58 3 65 16 54 8 -7 12 -16 10 -21 -3 -4 1 -24 9 -43 8 -19 11
      -37 8 -41 -4 -4 0 -5 8 -3 8 2 15 -4 15 -12 0 -8 4 -20 7 -26 4 -6 10 -42 13
      -80 4 -38 13 -76 21 -85 8 -8 14 -21 14 -28 0 -39 69 29 137 135 11 18 14 17
      43 -16 56 -62 97 -171 84 -228 -5 -26 -5 -26 10 -8 9 11 16 26 16 33 0 7 8 13
      18 13 14 0 15 -2 2 -10 -8 -5 -10 -10 -4 -10 36 0 179 162 229 260 27 53 28
      54 36 28 13 -50 70 -137 111 -173 50 -42 90 -51 153 -33 45 12 49 16 61 58 21
      71 44 90 110 90 31 0 98 5 151 11 75 9 97 9 106 -1 9 -10 8 -12 -5 -7 -12 4
      -23 -1 -33 -17 -14 -21 -74 -181 -75 -198 0 -5 10 -9 23 -9 12 -1 -4 -5 -36
      -10 -32 -5 -65 -13 -75 -19 -14 -9 -12 -10 8 -3 14 4 54 8 90 9 36 0 77 4 91
      8 40 11 44 -9 8 -35 -21 -15 -27 -24 -19 -29 9 -6 4 -20 -19 -51 -133 -185
      -223 -359 -282 -542 -19 -59 -19 -114 0 -102 5 2 12 -2 15 -11 3 -8 2 -12 -4
      -9 -6 3 -10 2 -10 -3 0 -5 14 -12 31 -16 17 -3 28 -10 24 -16 -3 -5 -1 -10 5
      -10 8 0 8 -6 0 -20 -11 -21 3 -29 15 -9 4 6 20 7 38 3 38 -8 70 -28 60 -37 -3
      -4 -1 -7 4 -7 6 0 13 5 15 11 3 8 9 6 20 -5 15 -15 21 -12 70 32 69 63 388
      336 447 384 103 83 150 121 236 187 50 38 97 76 106 83 25 23 271 173 307 187
      29 12 35 12 52 -5 10 -10 25 -24 32 -31 7 -6 24 -26 38 -44 14 -18 39 -50 55
      -71 63 -79 74 -96 86 -120 11 -25 12 -25 30 -7 23 23 30 23 139 5 93 -15 117
      -17 140 -9 8 3 61 5 117 4 58 0 105 3 108 9 4 7 -56 9 -173 8 -99 -2 -175 0
      -169 4 7 4 12 13 12 19 0 7 6 14 13 17 6 2 12 -1 12 -7 0 -22 16 -10 18 13 1
      18 -3 23 -21 21 -12 -1 -14 0 -4 2 19 5 24 23 5 23 -6 0 -8 3 -5 7 4 3 17 2
      30 -4 33 -16 149 -45 155 -39 2 3 -7 11 -22 17 -14 7 -26 16 -26 21 0 4 -3 7
      -7 7 -19 -3 -34 2 -29 9 3 5 -10 14 -28 20 -30 11 -89 62 -72 62 5 0 -2 9 -15
      19 -41 33 -13 34 32 2 23 -17 48 -31 55 -31 7 0 16 -9 19 -20 3 -11 14 -20 23
      -20 13 0 17 10 18 48 1 55 34 154 82 250 14 28 22 32 47 30 26 -3 35 -12 65
      -69 19 -37 46 -80 60 -97 31 -37 120 -92 149 -92 25 0 26 4 4 40 -15 25 -15
      38 -6 100 6 40 14 74 17 77 8 8 166 -40 191 -57 11 -8 116 -66 158 -87 15 -8
      27 -18 27 -23 0 -4 9 -10 19 -13 13 -3 21 -15 23 -38 l4 -34 8 28 c6 21 4 33
      -9 47 -17 18 -17 21 2 62 39 82 39 81 -24 125 -66 45 -201 113 -226 113 -9 0
      -17 4 -17 9 0 9 191 106 271 137 24 9 89 43 145 76 55 32 106 58 112 58 6 0
      10 -12 10 -28 -1 -69 45 -182 100 -241 32 -34 44 -41 57 -33 12 6 14 11 6 16
      -6 4 -11 15 -11 26 0 10 -16 37 -35 60 -40 47 -39 45 -25 71 6 11 7 19 3 18
      -4 -1 -14 -1 -22 0 -16 1 -5 16 11 16 18 0 21 24 5 31 -13 5 -13 9 -2 31 8 15
      12 30 9 35 -3 4 1 8 9 8 9 0 14 -9 13 -23 -1 -12 2 -33 6 -46 5 -13 10 -37 12
      -53 2 -16 9 -35 15 -41 9 -9 10 -2 5 28 -10 53 -7 125 7 210 7 39 12 76 12 83
      0 6 4 12 8 12 4 0 11 15 14 32 4 18 16 45 26 59 10 14 15 29 12 33 -8 8 38 42
      51 38 5 -2 3 5 -5 14 -8 10 -9 15 -3 11 7 -4 14 0 18 8 3 8 10 15 15 15 7 0 7
      -9 1 -25 -9 -23 -8 -25 10 -15 11 6 20 19 20 29 0 10 8 22 18 25 32 12 62 33
      55 39 -3 4 -1 7 5 7 7 0 12 5 12 10 0 6 13 24 29 39 54 53 138 273 165 434 4
      20 10 37 15 37 12 0 -16 -176 -41 -255 -12 -38 -35 -98 -51 -132 -16 -35 -27
      -67 -25 -73 2 -6 20 3 40 20 21 17 38 25 40 19 2 -6 13 7 23 30 11 22 24 41
      28 41 5 0 5 4 2 10 -3 5 0 7 9 4 8 -3 19 3 26 15 6 12 18 21 26 21 9 0 29 14
      45 31 16 17 29 28 29 24 0 -5 21 14 47 41 27 27 47 54 45 61 -2 7 4 13 12 13
      8 0 18 9 21 20 3 11 13 20 21 20 8 0 14 5 14 11 0 5 -6 7 -12 3 -7 -3 -1 4 13
      17 14 13 41 60 58 104 18 44 39 87 47 96 8 9 14 20 13 25 -1 5 3 23 10 39 7
      17 15 41 17 54 3 13 9 31 13 40 5 9 12 36 16 61 4 25 10 49 13 54 3 6 7 19 8
      30 1 12 5 39 9 61 3 22 7 60 9 85 2 25 6 64 11 88 6 35 3 47 -12 64 -10 12
      -13 18 -6 15 18 -11 27 12 27 72 1 70 21 79 31 14 10 -72 16 -93 26 -88 4 3 4
      17 -1 31 -6 14 -10 40 -10 57 0 44 -43 204 -59 220 -10 10 -11 6 -7 -18 2 -16
      5 -31 6 -32 1 -2 2 -29 2 -60 0 -37 -4 -58 -11 -57 -28 2 -31 5 -31 28 0 13
      -7 27 -16 30 -8 3 -13 10 -9 15 3 5 1 12 -5 16 -5 3 -7 20 -3 37 4 22 3 29 -5
      24 -7 -4 -12 -1 -12 7 0 7 -11 20 -25 27 -14 7 -25 18 -25 25 0 6 -6 17 -12
      23 -10 10 -16 -1 -31 -50 -10 -35 -20 -79 -23 -98 -3 -19 -9 -52 -15 -73 -5
      -20 -7 -42 -4 -47 3 -5 1 -11 -5 -15 -5 -3 -10 -15 -10 -25 0 -10 -7 -25 -15
      -33 -7 -8 -17 -27 -21 -42 -4 -14 -12 -28 -18 -31 -19 -6 -69 -15 -101 -18
      -67 -6 -73 -12 -80 -84 -9 -91 -11 -95 -19 -37 -13 100 -23 120 -55 123 -25 2
      -40 -7 -80 -47 -33 -33 -59 -50 -82 -54 -19 -2 -37 -3 -41 -1 -11 7 0 90 31
      234 16 74 33 178 36 230 9 126 9 406 -1 495 -4 38 -7 75 -6 81 1 6 -7 19 -18
      29 -24 21 -26 41 -5 48 12 5 12 10 0 33 -7 14 -11 33 -8 40 4 10 0 12 -13 8
      -17 -5 -17 -4 -4 8 9 7 14 21 12 31 -2 9 1 17 7 17 6 0 16 10 22 23 11 20 11
      21 -4 9 -13 -11 -15 -10 -10 8 6 22 23 38 23 21 0 -5 9 -12 20 -16 11 -3 41
      -23 67 -44 67 -52 115 -80 176 -102 74 -27 80 -25 104 30 l20 49 49 -6 49 -5
      -18 24 c-9 13 -22 34 -27 47 -5 12 -14 22 -19 22 -6 0 -6 12 0 32 11 39 12 64
      2 54 -13 -13 -31 -77 -26 -95 3 -10 -1 -22 -8 -26 -8 -5 -10 -4 -5 3 5 8 0 12
      -13 12 -11 0 -37 10 -58 21 -21 12 -63 35 -93 52 -30 16 -62 35 -70 42 -8 7
      -22 15 -30 19 -20 9 -50 27 -77 47 -22 15 -98 154 -142 257 -27 65 -40 62 -17
      -4 19 -55 20 -74 6 -74 -6 0 -13 14 -17 30 -3 17 -11 30 -18 30 -10 0 -9 -20
      6 -86 33 -152 1 -302 -104 -489 -33 -60 -68 -124 -76 -142 -29 -64 -59 -49
      -137 69 -24 38 -49 68 -54 68 -6 0 -32 -16 -59 -35 -60 -43 -88 -45 -97 -7 -3
      15 -12 50 -19 77 -8 28 -18 83 -24 123 -10 74 -21 106 -21 61 0 -51 22 -207
      36 -257 l15 -53 46 2 c71 5 73 -2 67 -286 -2 -132 -9 -278 -15 -325 -22 -170
      -60 -397 -85 -500 -14 -58 -36 -163 -50 -234 -77 -393 -256 -743 -459 -897
      -49 -37 -166 -107 -145 -87 3 3 29 26 59 52 192 169 313 389 411 746 18 63 41
      145 52 183 11 37 18 73 15 80 -2 6 -10 -8 -17 -33 -19 -71 -88 -239 -127 -310
      -115 -212 -420 -494 -660 -610 -71 -35 -86 -37 -79 -12 2 9 7 37 11 62 10 70
      53 240 80 321 14 40 23 75 20 77 -2 3 -7 -4 -11 -14 -3 -10 -14 -37 -24 -59
      -27 -63 -58 -172 -75 -270 -36 -200 -45 -262 -45 -294 0 -59 -10 -27 -18 55
      -6 71 -9 79 -27 76 -20 -4 -20 -4 0 11 46 34 4 21 -72 -23 -88 -50 -214 -96
      -240 -86 -13 5 -2 20 48 64 93 82 216 209 236 243 10 16 25 31 34 34 10 4 22
      31 33 78 19 77 65 244 114 417 17 58 58 187 92 288 64 191 76 263 30 175 -14
      -26 -37 -67 -53 -90 -25 -38 -71 -130 -135 -273 -77 -172 -132 -337 -187 -560
      -15 -63 -32 -125 -37 -136 -18 -40 -165 -179 -229 -216 -50 -30 -74 -38 -114
      -38 -32 0 -45 -3 -36 -9 11 -7 11 -10 0 -15 -29 -13 190 7 254 23 65 17 67 17
      67 -1 0 -24 -25 -33 -130 -47 -117 -16 -126 -31 -18 -31 124 0 133 -6 103 -67
      -13 -25 -23 -31 -61 -37 -74 -10 -134 -7 -134 6 0 6 -3 9 -6 5 -3 -3 -17 -2
      -31 4 -22 8 -24 7 -17 -13 10 -35 96 -196 114 -216 33 -36 61 -82 50 -82 -7 0
      -14 9 -17 20 -3 11 -10 20 -17 20 -6 0 -27 22 -46 48 -19 25 -50 62 -67 81
      -18 19 -36 43 -39 53 -8 27 -24 22 -24 -7 0 -29 60 -155 83 -173 29 -25 7 -50
      -79 -91 -86 -42 -105 -57 -56 -47 33 7 65 -15 60 -41 -2 -10 -28 -32 -58 -50
      -119 -69 -183 -109 -222 -138 -23 -16 -67 -48 -97 -69 -31 -22 -90 -69 -132
      -105 -42 -36 -107 -91 -144 -121 -69 -55 -126 -105 -265 -230 -41 -37 -93 -83
      -114 -101 -22 -19 -48 -42 -58 -51 -10 -10 -22 -18 -27 -18 -5 0 -16 -11 -25
      -25 -32 -49 -35 -13 -5 68 34 92 119 271 171 362 20 33 47 80 60 105 52 93 71
      126 88 150 9 14 19 32 23 41 16 46 135 97 192 83 20 -5 27 -1 35 21 5 14 10
      40 10 57 0 30 -19 97 -30 108 -3 3 -15 24 -26 47 l-22 42 29 6 c16 4 29 11 29
      17 0 6 -10 8 -22 5 -13 -3 -48 -9 -78 -13 -30 -3 -107 -19 -170 -34 -210 -52
      -479 -69 -571 -37 -76 26 -329 153 -399 199 -278 184 -552 422 -668 580 -88
      120 -179 321 -207 456 -19 92 -18 288 2 457 16 133 12 459 -6 531 -6 22 -13
      72 -16 110 -6 63 -10 101 -14 114 -1 3 -6 -2 -11 -10 -5 -8 -7 -38 -3 -67 9
      -85 2 -90 -60 -43 -30 22 -58 40 -64 40 -16 0 -38 31 -57 80 -10 25 -22 52
      -27 60 -58 100 -79 206 -78 397 0 82 6 178 13 216 7 37 10 67 6 67 -9 0 -80
      -221 -95 -299 -6 -27 -9 -31 -20 -20 -28 31 -85 251 -86 334 -1 30 -4 55 -8
      55 -4 0 -20 -48 -36 -106 -16 -59 -31 -102 -32 -97 -4 11 16 103 46 213 11 41
      25 125 31 185 6 61 17 142 24 180 8 39 12 72 10 74 -2 2 -13 -18 -24 -45z
      m5126 -884 c13 0 24 -6 24 -13 0 -8 9 -22 20 -32 32 -29 58 -133 71 -277 12
      -146 3 -357 -17 -390 -8 -13 -74 -38 -103 -38 -14 -1 -43 -7 -65 -15 -49 -17
      -59 -13 -75 31 -7 19 -19 38 -27 41 -19 7 -19 170 0 318 8 61 20 189 26 285 7
      96 14 182 17 190 3 10 20 -3 54 -43 36 -40 58 -57 75 -57z"/>
                    <path d="M1931 4829 c-7 -19 -19 -48 -27 -64 -12 -28 -57 -147 -88 -231 -8
      -22 -17 -30 -32 -29 -20 1 -21 -2 -16 -39 2 -23 9 -47 14 -53 7 -9 5 -15 -5
      -19 -9 -3 -13 -12 -10 -20 3 -8 -1 -14 -8 -14 -7 0 -9 -3 -6 -7 4 -3 -1 -12
      -11 -20 -16 -13 -15 -14 7 -9 19 4 10 -8 -38 -52 -43 -40 -60 -62 -56 -73 4
      -10 0 -19 -10 -23 -9 -3 -15 -12 -13 -20 6 -30 -71 -17 -135 24 -26 16 -47 25
      -47 20 0 -14 81 -76 123 -94 l38 -15 -7 -103 c-6 -88 -3 -114 15 -181 25 -94
      52 -157 58 -140 2 6 -3 35 -11 64 -30 98 -16 251 31 342 34 68 109 146 163
      170 51 23 212 28 246 9 18 -11 18 -11 -3 -12 -36 0 -105 -31 -136 -59 -113
      -105 -155 -404 -84 -608 6 -18 15 -33 20 -33 5 0 7 -7 4 -15 -4 -8 -2 -17 2
      -20 5 -3 19 -24 30 -46 34 -66 92 -107 155 -111 20 -2 36 -5 36 -8 0 -3 12 -6
      28 -6 19 -1 7 8 -43 31 -48 21 -83 46 -108 75 -36 43 -72 121 -78 170 -5 42
      20 97 56 124 57 44 145 30 145 -23 0 -9 9 -34 20 -55 18 -37 18 -40 2 -52 -14
      -11 -13 -11 10 -7 16 3 39 -2 57 -13 l31 -18 35 34 c28 28 34 40 30 61 -8 36
      17 56 51 40 14 -6 29 -11 34 -11 6 0 10 35 10 78 0 125 -55 313 -116 400 -19
      26 -34 50 -34 54 0 4 16 14 35 22 48 21 44 32 -12 33 -33 0 -66 10 -107 32
      -33 17 -64 31 -70 31 -6 0 -24 7 -41 16 -33 18 -113 25 -118 10 -5 -15 -53 2
      -87 31 -29 24 -32 30 -26 69 3 24 31 118 61 210 31 92 54 171 52 177 -2 6 -9
      -5 -16 -24z m96 -711 c29 -27 29 -57 2 -92 -38 -49 -119 -26 -119 34 0 34 41
      80 71 80 13 0 33 -10 46 -22z"/>
                    <path d="M4330 4687 c0 -4 7 -23 15 -43 8 -19 15 -38 16 -42 1 -4 12 -23 24
      -42 12 -19 32 -56 44 -82 13 -27 27 -50 32 -54 5 -3 17 -22 28 -43 28 -58 122
      -179 192 -246 35 -33 56 -51 46 -39 -9 11 -15 23 -12 26 3 3 -14 27 -38 54
      -39 44 -105 130 -147 194 -8 12 -28 41 -45 64 -33 45 -33 46 -94 161 -42 78
      -61 107 -61 92z"/>
                    <path d="M3917 4454 c-4 -4 -7 -19 -7 -33 0 -57 -9 -68 -59 -75 -26 -3 -80
      -22 -121 -42 -70 -33 -77 -35 -112 -23 -21 7 -38 16 -38 20 0 4 24 19 53 33
      31 15 44 25 32 26 -11 0 -37 -11 -57 -25 -20 -14 -42 -25 -47 -25 -6 0 -11 -8
      -11 -17 0 -19 41 -83 53 -83 7 0 -2 -11 -77 -95 -38 -43 -45 -58 -21 -49 11 5
      15 -1 15 -20 0 -14 4 -26 8 -26 7 0 88 64 102 81 5 6 34 21 132 70 197 98 474
      76 641 -53 121 -92 181 -171 224 -297 27 -79 27 -80 10 -132 -9 -29 -14 -55
      -12 -57 6 -7 55 106 71 163 17 60 16 58 4 50 -10 -6 -66 102 -58 111 3 2 26 7
      52 10 47 7 48 7 41 -17 -4 -13 -5 -21 -1 -18 4 4 11 20 16 37 8 30 7 32 -28
      38 -66 11 -73 15 -171 108 -53 50 -107 99 -121 109 -25 18 -25 18 5 1 l30 -17
      -23 25 c-23 25 -73 53 -143 81 -45 18 -148 35 -261 43 -49 3 -88 9 -89 12 -8
      64 -20 97 -32 86z"/>
                    <path d="M4022 4160 c-29 -10 -70 -33 -91 -50 -22 -16 -44 -30 -50 -30 -6 0
      -10 -4 -8 -9 1 -5 -14 -29 -34 -53 -20 -24 -40 -55 -44 -68 -4 -14 -11 -27
      -14 -30 -4 -3 -18 -27 -31 -55 -22 -45 -24 -63 -24 -180 0 -150 16 -226 65
      -307 60 -97 156 -167 230 -167 19 1 58 -2 87 -6 69 -10 155 9 225 49 64 36
      158 139 132 144 -18 4 -47 -16 -40 -28 3 -4 -1 -10 -9 -13 -10 -4 -15 7 -19
      40 -7 68 -22 70 -21 3 0 -78 -23 -109 -108 -141 -59 -22 -156 -30 -209 -17
      -33 8 -80 46 -126 101 -17 21 -14 99 5 120 15 16 14 17 -1 11 -16 -6 -16 -4 0
      25 10 17 24 31 31 31 7 0 15 7 18 15 12 30 45 28 72 -4 63 -72 161 -40 202 67
      18 48 19 56 6 113 -8 34 -26 79 -40 100 -28 41 -24 46 21 27 15 -6 30 -12 33
      -13 30 -8 50 -18 50 -26 0 -5 6 -9 14 -9 26 0 98 -99 127 -174 25 -65 27 -77
      16 -105 -11 -29 -10 -34 7 -47 22 -15 37 -18 34 -6 0 4 1 14 5 22 44 117 51
      174 30 265 -36 155 -119 298 -209 362 -86 60 -235 79 -332 43z m-65 -171 c7
      -6 13 -24 13 -40 0 -33 -53 -79 -90 -79 -74 0 -82 105 -10 133 20 8 70 0 87
      -14z"/>
                    <path d="M4311 3041 c-8 -11 -21 -16 -32 -14 -15 4 -18 1 -13 -11 3 -9 11 -13
      18 -9 6 4 5 0 -2 -9 -8 -9 -19 -15 -26 -12 -14 5 -39 -63 -29 -79 3 -6 1 -7
      -5 -3 -7 4 -12 1 -12 -8 0 -8 5 -16 11 -18 8 -3 6 -9 -4 -20 -16 -16 -23 -37
      -37 -118 -4 -25 -10 -52 -13 -60 -24 -62 -41 -432 -23 -503 12 -50 22 -20 23
      72 2 141 46 374 105 556 28 88 52 170 52 182 1 11 4 19 7 17 4 -2 9 3 13 11 3
      8 1 15 -5 15 -6 0 -8 4 -4 9 11 18 -12 20 -24 2z"/>
                    <path d="M1614 1843 c76 -203 99 -250 158 -333 16 -22 18 -22 24 -4 4 10 12
      22 18 26 22 15 13 44 -25 75 -51 41 -111 112 -103 124 3 5 0 9 -5 9 -6 0 -11
      6 -11 14 0 15 -49 106 -57 106 -3 0 -2 -8 1 -17z"/>
                    <path d="M2865 1124 c-48 -25 -62 -42 -89 -110 -25 -61 -25 -67 -11 -94 9 -17
      19 -30 23 -30 5 0 23 32 40 70 17 39 47 95 67 125 38 60 30 71 -30 39z"/>
                </g>
            </svg>
        </div>
        <svg id="stripes" class="full-size" width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg"
             xmlns:xlink="http://www.w3.org/1999/xlink"></svg>
    </div>
<?php $this->need('footer.php'); ?>