<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>limondo/</title>
    <link rel="stylesheet" href="./src/css/normalize.css">
    <link rel="stylesheet" href="./src/css/style.css">
    <link rel="icon" href="./src/assets/p.png">
</head>
<body>

<header class="header">
    <?php include ROOT . '/view/nav.php'; ?>
    <div class="upper">
        <div class="row">
            <a class="logo"></a>
            <div class="right">
                <div class="text">Деньги у вас в:</div>

                    <div class="timer">
                        <div class="timer__items">
                            <div class="timer__item timer__minutes">00</div>
                            <div class="timer__item timer__seconds">00</div>
                        </div>
                    </div>

            </div>
        </div>
        <div class="marquee">

            <div class="dinamyc-texts">
                <p>Анна И. получила 18 200₽, Москва</p>
                <p>Денис К. получил 13 500₽, Санкт-Петербург</p>
                <p>Елена З. получила 22 300₽, Новосибирск</p>
                <p>Сергей М. получил 16 800₽, Екатеринбург</p>
                <p>Ксения Л. получила 19 700₽, Казань</p>
                <p>Иван Н. получил 14 900₽, Ростов-на-Дону</p>
                <p>Анна И. получила 18 200₽, Москва</p>
                <p>Денис К. получил 13 500₽, Санкт-Петербург</p>
                <p>Елена З. получила 22 300₽, Новосибирск</p>
                <p>Сергей М. получил 16 800₽, Екатеринбург</p>
                <p>Ксения Л. получила 19 700₽, Казань</p>
                <p>Иван Н. получил 14 900₽, Ростов-на-Дону</p>
                <p>Анна И. получила 18 200₽, Москва</p>
                <p>Денис К. получил 13 500₽, Санкт-Петербург</p>
                <p>Елена З. получила 22 300₽, Новосибирск</p>
                <p>Сергей М. получил 16 800₽, Екатеринбург</p>
                <p>Ксения Л. получила 19 700₽, Казань</p>
                <p>Иван Н. получил 14 900₽, Ростов-на-Дону</p>
            </div>
        </div>

    </div>
    <div class="lower">
        <div class="lower-wrapper">


            <div class="content">
                <div class="left">


                    <h1 class="p1"><strong>. Вам</strong> присвоен статус <strong>хорошего</strong> клиента, вы можете
                        взять заём в следующих МФО:</h1>
                    <div class="recomend">Рекомендация</div>
                    <div class="p2">Отправьте онлайн-заявку минимум <strong>в 4 компании</strong> для 100% получения
                        денег!
                    </div>
                    <div class="robot"></div>

                </div>
                <div class="right"></div>
                <a class="badge">
                    <div class="webbankir"></div>
                    <span class="slogan">Онлайн решение за 5 минут!</span>
                    <span class="arrow-right">
                    <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11 15L16 10L11 5M15 10H4"></path>
                            </svg>
                </span>
                </a>
            </div>
        </div>
    </div>
</header>

<main class="main">

    <section class="wrapper">
        <div class="container">
            <div class="section-text">
                <h2>Лучшие предложения</h2>
            </div>
            <div class="offer-row">
                <?=$view;?>
            </div>
        </div>
    </section>

    <section class="wrapper">
        <div class="container">
            <div class="section-text">
                <h2>Также для вас</h2>
            </div>
            <div class="offer-row">

                <article class="offer-wrapper">
                    <a href="#" class="offer">
                        <span class="status">Новое МФО
                        </span>
                        <span class="content">
                            <div class="info">
                                <div class="logo">
                                    <img src="https://ltt-bucket.storage.yandexcloud.net/65d32f06898b62.89342775"
                                         alt="">
                                </div>
                                <div class="label"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 6L16 12L21 8L19 18H5L3 8L8 12L12 6Z"></path>
                                        </svg></div>
                            </div>
                            <span class="content-inner">
                                <span class="rating">
                                    <span class="rating-value">5.0</span>
                                    <span class="rating-stars">
<svg viewBox="0 0 136 24" xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path d="M10.8587 3.51246C11.218 2.40689 12.782 2.40689 13.1413 3.51246L14.4248
                                                     7.46262C14.5854 7.95704 15.0461 8.2918 15.566 8.2918H19.7195C20.8819 8.2918
                                                     21.3653 9.77933 20.4248 10.4626L17.0646 12.9039C16.644 13.2095 16.468 13.7512
                                                     16.6287 14.2456L17.9122 18.1957C18.2714 19.3013 17.006 20.2207 16.0655 19.5374L12.7053
                                                     17.0961C12.2848 16.7905 11.7152 16.7905 11.2947 17.0961L7.93446 19.5374C6.994 20.2207
                                                     5.72862 19.3013 6.08784 18.1957L7.37133 14.2456C7.53198 13.7512 7.35599 13.2095 6.9354
                                                     12.9039L3.5752 10.4626C2.63474 9.77934 3.11807 8.2918 4.28054 8.2918H8.43398C8.95385
                                                     8.2918 9.4146 7.95704 9.57525 7.46262L10.8587 3.51246Z"></path>
                                                </g>
                                                <g>
                                                    <path d="M38.8587 3.51246C39.218 2.40689 40.782 2.40689 41.1413 3.51246L42.4248
                                                     7.46262C42.5854 7.95704 43.0461 8.2918 43.566 8.2918H47.7195C48.8819 8.2918
                                                     49.3653 9.77933 48.4248 10.4626L45.0646 12.9039C44.644 13.2095 44.468 13.7512
                                                     44.6287 14.2456L45.9122 18.1957C46.2714 19.3013 45.006 20.2207 44.0655
                                                     19.5374L40.7053 17.0961C40.2848 16.7905 39.7152 16.7905 39.2947 17.0961L35.9345
                                                     19.5374C34.994 20.2207 33.7286 19.3013 34.0878 18.1957L35.3713 14.2456C35.532
                                                     13.7512 35.356 13.2095 34.9354 12.9039L31.5752 10.4626C30.6347 9.77934 31.1181
                                                     8.2918 32.2805 8.2918H36.434C36.9539 8.2918 37.4146 7.95704 37.5752 7.46262L38.8587 3.51246Z"></path>
                                                </g>
                                                <g>
                                                    <path d="M66.8587 3.51246C67.218 2.40689 68.782 2.40689 69.1413 3.51246L70.4248
                                                     7.46262C70.5854 7.95704 71.0461 8.2918 71.566 8.2918H75.7195C76.8819 8.2918
                                                     77.3653 9.77933 76.4248 10.4626L73.0646 12.9039C72.644 13.2095 72.468 13.7512
                                                     72.6287 14.2456L73.9122 18.1957C74.2714 19.3013 73.006 20.2207 72.0655
                                                     19.5374L68.7053 17.0961C68.2848 16.7905 67.7152 16.7905 67.2947 17.0961L63.9345
                                                     19.5374C62.994 20.2207 61.7286 19.3013 62.0878 18.1957L63.3713 14.2456C63.532
                                                     13.7512 63.356 13.2095 62.9354 12.9039L59.5752 10.4626C58.6347 9.77934 59.1181
                                                     8.2918 60.2805 8.2918H64.434C64.9539 8.2918 65.4146 7.95704 65.5752 7.46262L66.8587 3.51246Z"></path>
                                                </g>
                                                <g>
                                                    <path d="M94.8587 3.51246C95.218 2.40689 96.782 2.40689 97.1413 3.51246L98.4248
                                                     7.46262C98.5854 7.95704 99.0461 8.2918 99.566 8.2918H103.719C104.882 8.2918
                                                     105.365 9.77933 104.425 10.4626L101.065 12.9039C100.644 13.2095 100.468 13.7512
                                                     100.629 14.2456L101.912 18.1957C102.271 19.3013 101.006 20.2207 100.066 19.5374L96.7053
                                                     17.0961C96.2848 16.7905 95.7152 16.7905 95.2947 17.0961L91.9345 19.5374C90.994 20.2207
                                                     89.7286 19.3013 90.0878 18.1957L91.3713 14.2456C91.532 13.7512 91.356 13.2095 90.9354
                                                     12.9039L87.5752 10.4626C86.6347 9.77934 87.1181 8.2918 88.2805 8.2918H92.434C92.9539
                                                     8.2918 93.4146 7.95704 93.5752 7.46262L94.8587 3.51246Z"></path>
                                                </g>
                                                <g>
                                                    <path d="M122.859 3.51246C123.218 2.40689 124.782 2.40689 125.141 3.51246L126.425
                                                     7.46262C126.585 7.95704 127.046 8.2918 127.566 8.2918H131.719C132.882 8.2918
                                                     133.365 9.77933 132.425 10.4626L129.065 12.9039C128.644 13.2095 128.468 13.7512
                                                     128.629 14.2456L129.912 18.1957C130.271 19.3013 129.006 20.2207 128.066
                                                     19.5374L124.705 17.0961C124.285 16.7905 123.715 16.7905 123.295 17.0961L119.934
                                                     19.5374C118.994 20.2207 117.729 19.3013 118.088 18.1957L119.371 14.2456C119.532
                                                     13.7512 119.356 13.2095 118.935 12.9039L115.575 10.4626C114.635 9.77934 115.118
                                                     8.2918 116.281 8.2918H120.434C120.954 8.2918 121.415 7.95704 121.575 7.46262L122.859 3.51246Z"></path>
                                                </g>

                                            </svg>
                                    </span>
                                </span>
                            <span class="params">
                                <span class="item">
                                    Сумма
                                    <span> 20 000 ₽ </span>
                                </span>
                                <span class="item">
                                    Первый заём
                                    <b> бесплатно </b>
                                </span>
                                <span class="item">
                                    Срок
                                    <b> 30 дней </b>
                                </span>
                            </span>
                            <span class="license">Лиц. №651303045003951</span>
                            <button class="button">Получить деньги</button>
                            </span>
                        </span>
                    </a>
                </article>

            </div>
        </div>

    </section>

    <section class="wrapper">
        <div class="container">
            <div class="section-text">
                <h2>Онлайн-эфир ваших заявок</h2>
            </div>
            <div class="online">
                <div class="left">

                    <div class="step">
                        <div class="info">
                            <div class="name">
                                <p>Ге***** Г.С</p>
                                <span>Сейчас</span>
                            </div>
                            <div class="spin">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 50"
                                     style="enable-background:new 0 0 50 50;" xml:space="preserve">
                            <path d="M43.935,25.145c0-10.318-8.364-18.683-18.683-18.683c-10.318,0-18.683,8.365-18.683,18.683h4.068c0-8.071,
                            6.543-14.615,14.615-14.615c8.072,0,14.615,6.543,14.615,14.615H43.935z">
                                <animateTransform attributeType="xml" attributeName="transform" type="rotate"
                                                  from="0 25 25" to="360 25 25" dur="0.6s"
                                                  repeatCount="indefinite"></animateTransform>
                            </path>
                        </svg>
                            </div>
                            <div class="result">
                                <p>50 000 ₽</p>
                                <span>Одобрено</span>
                            </div>

                        </div>
                        <div class="progress">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <div class="step">
                        <div class="info">
                            <div class="name">
                                <p>Ге***** Г.С</p>
                                <span>Сейчас</span>
                            </div>
                            <div class="spin">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 50"
                                     style="enable-background:new 0 0 50 50;" xml:space="preserve">
                            <path d="M43.935,25.145c0-10.318-8.364-18.683-18.683-18.683c-10.318,0-18.683,8.365-18.683,18.683h4.068c0-8.071,
                            6.543-14.615,14.615-14.615c8.072,0,14.615,6.543,14.615,14.615H43.935z">
                                <animateTransform attributeType="xml" attributeName="transform" type="rotate"
                                                  from="0 25 25" to="360 25 25" dur="0.6s"
                                                  repeatCount="indefinite"></animateTransform>
                            </path>
                        </svg>
                            </div>
                            <div class="result">
                                <p>50 000 ₽</p>
                                <span>Одобрено</span>
                            </div>

                        </div>
                        <div class="progress">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <div class="step">
                        <div class="info">
                            <div class="name">
                                <p>Ге***** Г.С</p>
                                <span>Сейчас</span>
                            </div>
                            <div class="spin">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 50"
                                     style="enable-background:new 0 0 50 50;" xml:space="preserve">
                            <path d="M43.935,25.145c0-10.318-8.364-18.683-18.683-18.683c-10.318,0-18.683,8.365-18.683,18.683h4.068c0-8.071,
                            6.543-14.615,14.615-14.615c8.072,0,14.615,6.543,14.615,14.615H43.935z">
                                <animateTransform attributeType="xml" attributeName="transform" type="rotate"
                                                  from="0 25 25" to="360 25 25" dur="0.6s"
                                                  repeatCount="indefinite"></animateTransform>
                            </path>
                        </svg>
                            </div>
                            <div class="result">
                                <p>50 000 ₽</p>
                                <span>Одобрено</span>
                            </div>

                        </div>
                        <div class="progress">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>


                <div class="right">
                    <div class="step">
                        <div class="info">
                            <div class="name">
                                <p>Ге***** Г.С</p>
                                <span>Сейчас</span>
                            </div>
                            <div class="spin">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 50"
                                     style="enable-background:new 0 0 50 50;" xml:space="preserve">
                            <path d="M43.935,25.145c0-10.318-8.364-18.683-18.683-18.683c-10.318,0-18.683,8.365-18.683,18.683h4.068c0-8.071,
                            6.543-14.615,14.615-14.615c8.072,0,14.615,6.543,14.615,14.615H43.935z">
                                <animateTransform attributeType="xml" attributeName="transform" type="rotate"
                                                  from="0 25 25" to="360 25 25" dur="0.6s"
                                                  repeatCount="indefinite"></animateTransform>
                            </path>
                        </svg>
                            </div>
                            <div class="result">
                                <p>50 000 ₽</p>
                                <span>Одобрено</span>
                            </div>

                        </div>
                        <div class="progress">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <div class="step">
                        <div class="info">
                            <div class="name">
                                <p>Ге***** Г.С</p>
                                <span>Сейчас</span>
                            </div>
                            <div class="spin">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 50"
                                     style="enable-background:new 0 0 50 50;" xml:space="preserve">
                            <path d="M43.935,25.145c0-10.318-8.364-18.683-18.683-18.683c-10.318,0-18.683,8.365-18.683,18.683h4.068c0-8.071,
                            6.543-14.615,14.615-14.615c8.072,0,14.615,6.543,14.615,14.615H43.935z">
                                <animateTransform attributeType="xml" attributeName="transform" type="rotate"
                                                  from="0 25 25" to="360 25 25" dur="0.6s"
                                                  repeatCount="indefinite"></animateTransform>
                            </path>
                        </svg>
                            </div>
                            <div class="result">
                                <p>50 000 ₽</p>
                                <span>Одобрено</span>
                            </div>

                        </div>
                        <div class="progress">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <div class="step">
                        <div class="info">
                            <div class="name">
                                <p>Ге***** Г.С</p>
                                <span>Сейчас</span>
                            </div>
                            <div class="spin">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 50"
                                     style="enable-background:new 0 0 50 50;" xml:space="preserve">
                            <path d="M43.935,25.145c0-10.318-8.364-18.683-18.683-18.683c-10.318,0-18.683,8.365-18.683,18.683h4.068c0-8.071,
                            6.543-14.615,14.615-14.615c8.072,0,14.615,6.543,14.615,14.615H43.935z">
                                <animateTransform attributeType="xml" attributeName="transform" type="rotate"
                                                  from="0 25 25" to="360 25 25" dur="0.6s"
                                                  repeatCount="indefinite"></animateTransform>
                            </path>
                        </svg>
                            </div>
                            <div class="result">
                                <p>50 000 ₽</p>
                                <span>Одобрено</span>
                            </div>

                        </div>
                        <div class="progress">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="button-wrapper">
            <a href="#" class="button">
                Получить деньги
            </a>
            <p>
                <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.8299 4.03273C5.2152 4.12237 5.41369 4.83312 5.58978 5.17729C6.14205 4.14478 7.99896 5.24132
                         8.39115 6.52194C8.7049 7.54644 8.21712 8.22677 7.93431 8.43488H9.99132C9.99132 8.40286 9.99193 8.24758
                         9.99193 7.91462C9.99193 6.32025 9.02612 5.10525 8.54322 4.69705C8.79134 4.62769 9.30679 4.32407 9.38363
                         3.66455C9.23956 4.08876 6.59827 3.92068 5.8299 4.03273Z"></path>
                    <path d="M7.59053 11.1883V9.13927C5.2534 9.96367 4.96525 8.19481 5.72562 7.23434C4.81317 7.12229 2.37198
                         4.69711 1.42753 2.37598C-1.30981 4.24889 0.36301 9.53947 2.49205 11.0282C4.19528 12.2192 5.0533 10.8841
                         5.2694 10.0677C5.52819 10.3879 6.16424 10.9626 6.63807 10.7C7.1119 10.4375 7.47047 10.9161 7.59053 11.1883Z"></path>
                    <path d="M7.61475 12.5968V11.5883C4.97345 12.2366 7.07849 13.6293 6.91041 14.0775C6.77594 14.4361
                         5.33364 14.3336 4.6293 14.2376C4.12772 13.7653 3.03332 12.7376 2.66834 12.4047C2.82042 12.1566 2.42022
                         11.3642 2.10807 11.06C1.79592 10.7559 0.611341 11.044 0.763415 12.1726C0.885074 13.0754 1.87596 12.9116
                         2.35619 12.7168C2.72704 13.0503 3.63041 13.8838 4.27712 14.5497C3.94896 15.2381 4.72534 15.8624 5.2616
                         15.4622C5.65219 15.872 5.97928 15.9744 6.09401 15.9744C6.15003 15.881 6.12442 15.579 5.57375
                         15.118C5.84909 14.7466 6.98511 14.5364 7.5187 14.4777C7.35862 12.7088 9.23954 13.9894 9.33559
                         14.7738C8.03895 14.9259 5.6698 16.6067 7.29459 17.119C8.59442 17.5288 9.6344 18.5143 9.99191
                         18.9519L9.99191 14.3016C9.99191 13.3251 9.49566 13.3251 8.56721 13.3251C7.82445 13.3251 7.62275
                         12.8396 7.61475 12.5968Z"></path>
                    <path d="M14.1459 4.04079C14.7606 4.13043 14.5621 4.84118 14.3861 5.18534C13.8338 4.15284 11.9769
                         5.24938 11.5847 6.53C11.2709 7.5545 11.7581 8.22683 12.0409 8.43493H9.9839V7.92268C9.9839 6.3283
                         10.9497 5.11331 11.4326 4.70511C11.1845 4.63574 10.669 4.33213 10.5922 3.67261C10.7363 4.09681
                         13.3776 3.92873 14.1459 4.04079Z"></path>
                    <path d="M12.4095 11.1963V9.14733C14.7466 9.97173 15.0348 8.20287 14.2744 7.2424C15.1868 7.13035
                         17.628 4.70516 18.5725 2.38403C21.3098 4.25695 19.637 9.54752 17.508 11.0362C15.8047 12.2272 14.9467
                         10.8922 14.7306 10.0758C14.4718 10.3959 13.8358 10.9706 13.3619 10.7081C12.8881 10.4456 12.5295
                         10.9242 12.4095 11.1963Z"></path>
                    <path d="M12.3687 12.6047V11.5962C15.01 12.2445 12.905 13.6372 13.0731 14.0854C13.2075 14.444 13.7134
                         14.3495 14.4177 14.2535C14.5752 13.856 15.0259 12.8152 15.5383 12.8288C16.4427 12.8528 17.1391 14.5816
                         16.2827 15.5643C15.5143 16.2446 14.2736 15.8223 14.4177 15.1019C13.8895 14.6297 12.9023 14.6403 12.3687
                         14.5816C12.5288 12.8128 10.7439 13.9974 10.6479 14.7817C11.9445 14.9338 14.3137 16.6146 12.6889
                         17.1269C11.389 17.5367 10.3491 18.5142 9.99157 18.9518V14.3095C9.99157 13.333 10.4878 13.333 11.4163
                         13.333C12.159 13.333 12.3607 12.8475 12.3687 12.6047Z"></path>
                    <path d="M9.44795 10.4835L9.1438 10.2594C8.75694 10.1153 8.21535 9.74875 9.1438 9.435C10.3044 9.04281
                         9.49597 8.46653 9.94418 8.79469C10.2573 9.02396 10.4455 9.37043 10.4212 9.58299C10.7373 9.38667 11.3039
                         9.16332 11.2728 9.6351C11.2248 10.3635 11.3849 10.4835 10.8646 10.4835C10.3444 10.4835 10.2323 10.9798
                         10.8646 10.9798C11.4969 10.9798 11.561 11.1158 11.4569 11.404C11.3529 11.6921 10.8886 10.8677 10.6885
                         11.3079C10.5285 11.6601 10.8086 12.0576 10.9687 12.2124C11.0994 11.9536 11.3801 11.5256 11.4569
                         11.8842C11.553 12.3324 11.3849 13.1168 10.4724 13.0768C9.56 13.0368 9.1518 13.3169 8.89567 12.6526C8.7042
                         12.1559 9.15945 11.6672 9.45942 11.4464C9.19761 11.6198 8.76101 11.7873 8.71959 11.3079C8.66356 10.6596
                         7.9352 9.91523 8.41544 10.2594C8.79963 10.5347 9.26386 10.5235 9.44795 10.4835Z"></path>
                </svg>
                Высокая степень защиты данных
            </p>
        </div>

    </section>

    <section class="wrapper about">
        <div class="container">
            <h2>Условия получения:</h2>
            <p>Первый заём до 10 000 рублей выдается бесплатно в случае своевременного погашения;
                В случае нарушения сроков, размер неустойки составляет 0,10% от суммы просрочки в день, но не более 10%
                от суммы
                кредита;
                В случае длительной задержки выплаты информация будет передана в БКИ.
            </p>
            <h2>Информация о полной стоимости займа и пример расчета:</h2>
            <p>ПСК (полная стоимость кредита) в процентах составляет от 0 до 292% годовых.
            </p>
            <p>Пример:</p>
            <p>Заём в размере 10 000 рублей выдан на 61 дней с пролонгацией. В году 365 дней, по договору ставка
                составляет 0,8% в день (годовая ставка, соответственно будет равна 292%). Сумма процентов за год
                составляет 29 200 руб. (10 000*292% = 29 200), за 1 день 80 руб. (29 200/365 = 80), за 61 дней
                соответственно 4 880 руб. (80*61 = 4 880. Общая сумма платежа составляет 14 880 руб. (10 000 руб.
                основной долг + 4 880 руб. проценты). Процентная ставка по займам составляет от 0 до 292% годовых; По
                потребительским кредитам и кредитным картам - от 17 до 31% годовых;
            </p>
            <h2>Последствия невыплаты заёмных средств:</h2>
            <p>В случае невозвращения в условленный срок суммы кредита или суммы процентов за пользование заёмными
                средствами кредитор вынуждено начислит штраф за просрочку платежа. Большинство кредиторов идут на
                уступки и дают 3 дополнительных рабочих дня для оплаты. Они предусмотрены на случай, к примеру, если
                банковский перевод занял больше времени, чем обычно. Однако, в случае неполучения от Вас какой-либо
                реакции в течение продолжительного времени, будет начислен штраф за просрочку срока погашения размером в
                среднем 0,10% от первоначальной суммы для займов, 0,03% от суммы задолженности в среднем для
                потребительских кредитов и кредитных карт. При несоблюдении Вами условий по погашению кредитов и займов,
                данные о Вас могут быть переданы в реестр должников, а задолженность - коллекторскому агентству для
                взыскания долга. О всех приближающихся сроках платежа кредитор своевременно информирует Вас по СМС или
                электронной почте. Рекомендуем Вам вносить платеж в день получения данных напоминаний. Погашая
                задолженность в срок, Вы формируете хорошую кредитную историю, что повышает Ваши шансы в дальнейшем
                получить кредит на более выгодных условиях. Предложение не является офертой. Конечные условия уточняйте
                при прямом общении с кредиторами.
            </p>

        </div>

    </section>

</main>

<footer class="footer">

    <div class="container">
        <div class="block">
            <a href="#" class="logo">
                <img src="https://we-bucket.storage.yandexcloud.net/narodnyj-zajmsvg-params1834-664348b9548f9.svg"
                     alt="logo">
            </a>
            <div class="logo-text">
                <p>Сервис подбора займов</p>
            </div>
        </div>
        <div class="bottom">
            <div class="content">

                <div class="blocks">
                    <p>Общество с ограниченной ответственностью «БСМЕДИА» ОГРН 1216300005536
                    </p>
                    <p>443080, Россия, г. Самара, Московское шоссе, д. 43, оф. 706. Телефон: +7(846)2140525</p>
                    <p>Находится в реестре операторов, осуществляющих обработку персональных данных, Приказ № 30 от
                        18.03.2021 Рег. № 63-21-006490</p>
                </div>
                <div class="blocks">
                    <p>Вся представленная на сайте информация, касающаяся финансовых услуг, носит информационный
                        характер и ни при каких условиях не является публичной офертой, определяемой положениями статьи
                        437 Гражданского кодекса РФ.
                    </p>
                    <p>Нажатие на кнопки "Получить деньги", а также последующее заполнение тех или иных форм, не
                        накладывает на владельцев сайта никаких обязательств.
                    </p>
                    <p>Все материалы, размещенные на сайте являются собственностью владельцев сайта, либо собственностью
                        организаций, с которыми у владельцев сайта есть соглашение о размещении материалов.
                    </p>
                    <p>
                        Для аналитических целей на сайте работает система статистики, которая собирает информацию о
                        посещенных страницах сайта, заполненных формах и т.д. Сотрудники компании имеют доступ к этой
                        информации.
                    </p>
                    <p>
                        Регистрируясь на сайте или оставляя тем, или иным способом свои персональные данные (информацию
                        о себе), Вы предоставляете право сотрудникам компании обрабатывать вашу персональную информацию.
                    </p>

                </div>
                <div class="blocks">
                    <p>
                        Данное соглашение действует бессрочно и может быть отозвано путем отправки заявления в форме <a
                                href="#">«Отказ от рекламных предложений и услуг подбора»</a> указав номер телефона, на
                        который оставлена заявка.
                    </p>
                    <p>
                        Важно: предоплату берут только мошенники!
                    </p>
                    <p>
                        Сервис бесплатный - за предоставление информации комиссия не взимается.
                    </p>

                </div>

            </div>

        </div>

    </div>

</footer>

<script src="./../../src/js/util/timer.js" type="module"></script>
</body>
</html>
