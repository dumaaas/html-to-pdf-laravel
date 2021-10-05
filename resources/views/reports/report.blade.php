<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reports</title>

    <link rel="stylesheet" type="text/css" href="{{ public_path('/css/app.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ public_path('/css/fonts.css') }}" >

<body>

    <!-- Cover page -->
    <div class="page-break cover-page">
        <div class="logo-heading">
            <div>
                <svg width="330" height="330" viewBox="0 0 330 330" fill="#fff" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect width="330" height="330" fill="url(#pattern0)" />
                    <defs>
                        <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                            <use xlink:href="#image0" transform="scale(0.0030303)" />
                        </pattern>
                        <image id="image0" width="330" height="330"
                            xlink:href="data:image/png;base64,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" />
                    </defs>
                </svg>
            </div>
            <div>
                <h1>
                    <span>Locate Cambridge</span>
                    Pharmaceuticals
                </h1>
            </div>
        </div>
        <div class="orange-dots">
            <img class="" src="{{ public_path('/img/orangedots.png') }}" alt="orangedots">
        </div>
    </div>

    <!-- Overview page -->
    <div class="page-break container">
        <div class="heading">
            <h1>
                Overview
            </h1>
        </div>
        <div class="content">
            <p>
                Locate Cambridge represents the combined authority of Cambridgeshire and Peterborough. Our team can help
                you
                connect and succeed, whether you are locating from another part of
                the UK or from overseas.
            </p>
        </div>
    </div>

    <!-- Pharmaceuticals Market page -->
    <div class="page-break container pharmaceuticals-market">
        <div class="heading flex-row">
            <div class="heading-title">
                <h1>
                    Pharmaceuticals
                    <span>
                        Market
                    </span>
                </h1>
            </div>
            <div class="heading-content flex-row">
                <div class="heading-content__left">
                    <p>
                        04
                        <span>
                            Market
                        </span>
                    </p>
                    <p>
                        12
                        <span>
                            Workforce & Salaries
                        </span>
                    </p>
                    <p>
                        16
                        <span>
                            Taxes
                        </span>
                    </p>
                </div>
                <div class="heading-content__right">
                    <p>
                        17
                        <span>
                            Cost of Operations
                        </span>
                    </p>
                    <p>
                        18
                        <span>
                            Investment
                        </span>
                    </p>
                    <p>
                        19
                        <span>
                            Services
                        </span>
                    </p>
                </div>
            </div>

        </div>
        <div class="content">
            <p>
                04
                <span>
                    Market Data
                </span>
            </p>
            <p>
                05
                <span>
                    Eco-System
                </span>
            </p>
            <p>
                06
                <span>
                    Networks
                </span>
            </p>
            <p>
                08
                <span>
                    Industry Stats
                </span>
            </p>
            <p>
                09
                <span>
                    Case Study Companies
                </span>
            </p>


        </div>
    </div>

    <!-- Market Value page -->
    <div class="page-break container market-value">
        <div class="heading heading__no-border flex-row align-start">
            <div class="heading-title">
                <h1>
                    Market Value
                </h1>
            </div>
            <div class="heading-content">
                The UK Pharmaceuticals market is one of the highest valued across Europe. The particular advantage of
                the UK
                is in the market’s connected landscape and the National Health Service’s (NHS) role as a partner for
                research, data and evidence development.
                The Cambridgeshire and Peterborough region is globally renowned as one of the best locations to grow a
                Life
                Sciences company. Aligned with world class Universities, the region boasts an impressive number of the
                largest Life Science companies in the UK. The regional cluster alone contributes over £3bn annually to
                the
                UK economy.
            </div>
        </div>
        <div class="content">
            <div class="source">
                <p>
                    Source: <span>
                        EFPIA pharma report
                    </span>
                </p>
            </div>
            <div class="content-info flex-row flex-center">
                <div class="content-info__item">
                    <div class="content-info__item-top">
                        <h2>
                            Market Value
                        </h2>
                        <span>
                            United Kingdom
                        </span>
                        <p>
                            £20.29B
                        </p>
                    </div>
                    <div class="content-info__item-bottom">
                        <span>
                            Europe
                        </span>
                        <p>
                            £208.95B
                        </p>
                    </div>
                </div>
                <div class="content-info__item">
                    <div class="content-info__item-top">
                        <h2>
                            R&D Spend
                        </h2>
                        <span>
                            United Kingdom
                        </span>
                        <p>
                            £5.29B
                        </p>
                    </div>
                    <div class="content-info__item-bottom">
                        <span>
                            Europe
                        </span>
                        <p>
                            £35.34B
                        </p>
                    </div>
                </div>
                <div class="content-info__item">
                    <div class="content-info__item-top">
                        <h2>
                            Production
                        </h2>
                        <span>
                            United Kingdom
                        </span>
                        <p>
                            £20.61B
                        </p>
                    </div>
                    <div class="content-info__item-bottom">
                        <span>
                            Europe
                        </span>
                        <p>
                            £250.87B
                        </p>
                    </div>
                </div>
            </div>
            <div class="content-graphs flex-row flex-start align-start">
                <div class="content-graphs__currency">
                    <p>
                        £BN
                    </p>
                </div>
                <div class="content-graphs__values flex-col">
                    <div>
                        2.5
                    </div>
                    <div>
                        2.0
                    </div>
                    <div>
                        1.5
                    </div>
                    <div>
                        1.0
                    </div>
                    <div>
                        0.5
                    </div>
                </div>
                <div class="content-graphs__table flex-col flex-center">
                    <div class="charts flex-row flex-center align-baseline">
                        <div class="chart flex-row align-baseline">
                            <div id="graph0" class="chart-orange">
                                <div class="chart-placeholder">
                                    <p>UK</p>
                                </div>
                            </div>
                            <div id="graph1" class="chart-gray">
                                <div class="chart-placeholder">
                                    <p>EU</p>
                                </div>
                            </div>
                        </div>
                        <div class="chart flex-row align-baseline">
                            <div id="graph2" class="chart-orange">
                                <div class="chart-placeholder">
                                    <p>UK</p>
                                </div>
                            </div>
                            <div id="graph3" class="chart-gray">
                                <div class="chart-placeholder">
                                    <p>EU</p>
                                </div>
                            </div>
                        </div>
                        <div class="chart flex-row align-baseline">
                            <div id="graph4" class="chart-orange">
                                <div class="chart-placeholder">
                                    <p>UK</p>
                                </div>
                            </div>
                            <div id="graph5" class="chart-gray">
                                <div class="chart-placeholder">
                                    <p>EU</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="line">

                    </div>
                    <div class="line">

                    </div>
                    <div class="line">

                    </div>
                    <div class="line">

                    </div>
                    <div class="line">

                    </div>
                    <div class="line">

                    </div>
                    <div class="line">

                    </div>
                    <div class="line">

                    </div>
                    <div class="line">

                    </div>
                    <div class="line">

                    </div>
                    <div class="line">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Eco-System page -->
    <div class="page-break container eco-system">
        <div class="heading heading__no-border flex-row align-start">
            <div class="heading-title">
                <h1>
                    Eco-System
                </h1>
            </div>
            <div class="heading-content">
                <p>
                    The Cambridgeshire and Peterborough region is globally renowned as one of the best locations to grow
                    a
                    Life
                    Sciences company. Aligned with world class Universities, the region boasts an impressive number of
                    the
                    largest Life Science companies in the UK. The regional cluster alone contributes over £3bn annually
                    to
                    the
                    UK economy.
                </p>
                <p class="pt-20">
                    The Cambridgeshire and Peterborough cluster is the global HQ of AstraZeneca and also has the
                    presence of
                    other global industry leaders such as GlaxoSmithKline and Envigo. Local industry generates numerous
                    spin-outs with innovative products, including Abcam (which offers research tools into proteins and
                    other
                    chemicals), Crescendo Biologics (therapeutics in oncology) and Kymab (developing antibody
                    technologies).
                </p>
            </div>
        </div>
        <div class="cards flex-row align-start">
            <div class="card">
                <div class="card-icon flex-row flex-center">
                    <div>
                        <svg width="90" height="120" viewBox="0 0 45 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M23.03 6.3575C28.305 10.95 30.575 16.04 30.5 22.835C30.4325 29.2925 28.365 37.3275 25.9725 46.63L25.75 47.5H20.27C17.6725 37.9975 15.5 29.7575 15.5 22.9775C15.5 16.2125 17.845 10.9675 23.03 6.3575ZM23 0C14.2775 6.2575 10.5 13.72 10.5 22.9775C10.5 31.3275 13.365 41.165 16.45 52.5H29.6325C32.585 40.83 35.4125 31.0575 35.5 22.89C35.6 13.5625 31.8975 6.2925 23 0ZM44.565 51.87L37.95 39.91C37.53 41.69 37.0975 43.435 36.6325 45.2775L41.04 53.245L35.51 49.6825L34.5275 53.5125L44.6075 60C44.95 58.6375 45.5 56.89 45.5 55.515C45.5 54.245 45.1825 52.9875 44.565 51.87ZM0.5 55.515C0.5 56.89 1.1075 58.6375 1.4525 60L11.53 53.5125L10.5475 49.6825L5.0175 53.245L9.425 45.2775C8.9575 43.435 8.5275 41.69 8.1075 39.91L1.4925 51.87C0.875 52.9875 0.5 54.245 0.5 55.515ZM26.6175 60H19.38L18 55H28L26.6175 60ZM27.88 20.255C24.7225 20.505 21.3325 20.505 18.17 20.26C17.68 21.6025 17.8 23.7325 18.06 24.76C19.54 24.955 21.2525 25.065 22.9975 25.065C24.73 25.065 26.4325 24.9575 27.91 24.7625C28.195 23.71 28.3125 21.5225 27.88 20.255Z"
                                fill="#514463" />
                        </svg>
                    </div>
                </div>
                <div class="card-title">
                    <h2>
                        Investment
                    </h2>
                    <p>
                        Active & Connected Investor Community
                    </p>
                </div>
            </div>
            <div class="card">
                <div class="card-icon flex-row flex-center">
                    <div>
                        <svg width="120" height="120" viewBox="0 0 60 60" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M32.5 50.005H37.5V60H32.5V50.005ZM15.245 60H21.8125L30.3625 50.005H23.78L15.245 60ZM39.6775 50.005L48.2275 60H54.795L46.26 50.005H39.6775ZM60 7.47977C60 9.66978 59.0025 11.6148 57.5 12.9798V44.9999H10.04V34.9999H0C2.135 31.6674 2.54 27.6699 2.54 21.3598V8.40228C2.54 3.24725 5.845 0.172239 9.9225 0.0547386C9.88 -0.0227618 52.4125 0.00473836 52.5 0.00473836C56.6425 0.00473836 60 3.33725 60 7.47977ZM12.6525 7.53227C12.6525 6.15477 11.5325 5.03226 10.1525 5.03226C8.285 5.03226 7.5 6.52977 7.5 8.40228V21.3598C7.5 25.3173 7.5 27.4649 6.9275 30.0049H10.0375V10.0323C11.4175 10.0323 12.6525 8.90978 12.6525 7.53227ZM52.54 14.9998H15V40.0049H52.54V14.9998ZM52.5 4.99976H17.19C17.8275 6.74727 17.785 8.34727 17.1875 10.0048H52.5C55.7575 10.0048 55.8625 4.99976 52.5 4.99976ZM25.835 34.9999C29.1025 29.1399 31.37 26.1299 34.47 23.4248L34.0675 22.4998C30.31 24.8373 28.2875 26.5999 25.23 30.0699C23.6025 28.9099 22.685 28.3749 21.2375 27.6749L20 28.8199C22.4775 31.1149 23.82 32.6274 25.835 34.9999ZM47.5 22.4998H37.5V24.9998H47.5V22.4998ZM47.5 27.4999H37.5V29.9999H47.5V27.4999ZM47.5 32.4999H37.5V34.9999H47.5V32.4999Z"
                                fill="#514463" />
                        </svg>
                    </div>
                </div>
                <div class="card-title">
                    <h2>
                        Research
                    </h2>
                    <p>
                        Top 2 global ranked Pharma Universities
                    </p>
                </div>
            </div>
            <div class="card">
                <div class="card-icon flex-row flex-center">
                    <div>
                        <svg width="120" height="120" viewBox="0 0 60 60" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M30 0C13.4325 0 0 13.4325 0 30C0 46.5675 13.4325 60 30 60C46.5675 60 60 46.5675 60 30C60 13.4325 46.5675 0 30 0ZM44.325 50.4575C44.06 49.1425 43.735 47.8425 43.33 46.57C45.5725 44.5425 45.48 41.0775 43.15 39.3625C44.605 33.5675 44.675 27.24 43.145 21.1425C43.61 20.865 44.015 20.5075 44.3325 20.08C47.9975 21.11 51.41 22.745 54.4625 24.8575C54.8125 26.52 55 28.2375 55 30C55 38.455 50.77 45.93 44.325 50.4575ZM5 30C5 27.8625 5.3 25.795 5.8075 23.8125C7.555 23.7025 9.29 23.7125 11.175 23.8925L11.275 24.4575C8.9725 26.395 6.9 28.61 5.0575 31.1425L5 30ZM12.9575 27.025C15.0775 28.6325 18.165 28.115 19.6125 25.8C26.8575 28.45 32.96 33.4925 36.9625 39.965C35.0475 41.9025 35.0725 44.96 37.01 46.7025C35.3075 49.78 33.14 52.565 30.61 54.97C18.355 55.2625 8.3 46.815 5.6875 35.7275C7.6175 32.4375 10.075 29.4925 12.9575 27.025ZM20.1725 22.2725C25.15 19.8375 30.56 18.6925 35.9825 18.83C36.745 20.3575 38.3075 21.52 40.1475 21.745H40.1625C41.555 27.1375 41.62 32.925 40.235 38.495L39.6775 38.5525C35.3675 31.49 28.595 25.725 20.27 22.8L20.1725 22.2725ZM35.3275 54.415C37.0825 52.3725 38.605 50.1775 39.86 47.8475L40.535 47.8275C40.965 49.2325 41.305 50.675 41.555 52.15C39.6125 53.165 37.525 53.935 35.3275 54.415ZM53.085 20.42C50.5625 19.02 47.895 17.915 45.1125 17.1425C44.8425 14.655 42.51 12.5825 39.815 12.6025C38.435 10.055 36.735 7.665 34.755 5.4675C43.0575 7.0725 49.9075 12.7925 53.085 20.42ZM36.905 13.65C36.2625 14.2 35.7975 14.9375 35.595 15.795C29.455 15.72 23.65 17.11 18.475 19.7075C16.35 18.1125 13.3 18.655 11.86 20.915C10.04 20.725 8.4125 20.685 6.8 20.735C10.49 11.5275 19.49 5 30 5H30.0025C32.745 7.485 35.0875 10.4 36.905 13.65Z"
                                fill="#514463" />
                        </svg>
                    </div>
                </div>
                <div class="card-title">
                    <h2>
                        Connections
                    </h2>
                    <p>
                        World class industry support networks
                    </p>
                </div>
            </div>
            <div class="card">
                <div class="card-icon flex-row flex-center">
                    <div>
                        <svg width="140" height="80" viewBox="0 0 70 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M56.9905 38H53.8302C53.8302 33.0853 54.0202 32.3792 51.0435 31.6888C46.4898 30.6375 42.1863 29.6463 40.6157 26.2137C40.0457 24.9597 39.6625 22.895 41.1065 20.1748C44.3397 14.0663 45.1503 8.82867 43.3295 5.8045C41.2015 2.27367 34.7573 2.25783 32.6103 5.85833C30.7863 8.92367 31.6097 14.1328 34.8682 20.1463C36.3407 22.857 35.9702 24.928 35.4002 26.1883C33.8485 29.6368 29.5862 30.6217 25.0705 31.6603C21.9608 32.3792 22.1572 33.0378 22.1572 38H19.0063L19 36.0272C19 32.0403 19.3167 29.7413 24.0287 28.652C29.355 27.4202 34.618 26.3213 32.0878 21.6568C24.5955 7.83433 29.9472 0 37.9937 0C45.885 0 51.3792 7.54617 43.9058 21.6568C41.4517 26.2928 46.5152 27.3948 51.965 28.652C56.6833 29.7413 56.9968 32.0467 56.9968 36.0398L56.9905 38ZM72.2222 30.989C68.1403 30.0453 64.3403 29.2188 66.1802 25.7418C71.7852 15.1588 67.6685 9.5 61.7468 9.5C57.741 9.5 54.6282 12.0872 54.6282 16.8625C54.6282 20.881 56.4458 23.75 57.4908 26.125H60.8095C60.2712 23.75 56.1672 18.012 58.3838 14.2943C59.6885 12.103 63.7798 12.0998 65.0782 14.2563C66.2815 16.2545 65.6513 19.9943 63.3872 24.2662C62.1585 26.5873 62.5005 28.386 63.004 29.4848C63.9698 31.5938 66.0978 32.6103 68.5045 33.3102C73.2767 34.7067 72.8365 33.4432 72.8365 37.9968H75.9937L76 36.5307C76 33.5382 75.7657 31.806 72.2222 30.989ZM0.00633333 38H3.1635C3.1635 33.4463 2.72333 34.7098 7.4955 33.3133C9.90533 32.6135 12.0333 31.597 12.996 29.488C13.4995 28.386 13.8415 26.5905 12.6128 24.2693C10.3487 19.9975 9.7185 16.2577 10.9218 14.2595C12.2202 12.0998 16.3115 12.103 17.6162 14.2975C19.8328 18.0183 15.7288 23.7532 15.1905 26.1282H18.5092C19.5542 23.7532 21.3718 20.8842 21.3718 16.8657C21.375 12.0872 18.2622 9.5 14.2563 9.5C8.33467 9.5 4.218 15.1588 9.823 25.7418C11.6628 29.222 7.86283 30.0453 3.781 30.989C0.234333 31.806 0 33.5382 0 36.5338L0.00633333 38Z"
                                fill="#514463" />
                        </svg>
                    </div>
                </div>
                <div class="card-title">
                    <h2>
                        Talent
                    </h2>
                    <p>
                        World leading R&D workforce
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Connections & Networks first page -->
    <div class="page-break container main-cards">
        <div class="heading flex-row align-start">
            <div class="heading-title">
                <h1 class="w-45">
                    Connections & Networks
                </h1>
            </div>
        </div>
        <div class="cards flex-row">
            <div class="card">
                <div class="card-top">
                    <img src="{{ public_path('/img/onenucleus.png') }}" alt="onenucleus">
                </div>
                <h2>One Nucleus</h2>
                <span>
                    onenucleus.com
                </span>
                <h3>
                    Public Sector | Network Support
                </h3>
                <p>
                    One Nucleus is a not-for-profit Life Sciences & Healthcare membership organisation HQ’d in
                    Cambridge.
                    They provide local, UK-wide and international connectivity for all their members to help them find
                    the
                    best talent and route to market.
                </p>
            </div>
            <div class="card">
                <div class="card-top">
                    <img src="{{ public_path('/img/ashn.png') }}" alt="ashn">
                </div>
                <h2>Eastern AHSN</h2>
                <span>
                    easternahsn.org
                </span>
                <h3>
                    Public Sector | Network Support
                </h3>
                <p>
                    Eastern AHSN helps innovators navigate complex systems, generate value propositions and convene key
                    stakeholders to realise the value of innovations quicker. Their focus is in the East of England, but
                    they are part of a national network to help innovators work with the NHS.
                </p>
            </div>
        </div>
    </div>

    <!-- Connections & Networks second page -->
    <div class="page-break container main-cards">
        <div class="heading flex-row align-start">
            <div class="heading-title">
                <h1 class="w-45">
                    Connections & Networks
                </h1>
            </div>
        </div>
        <div class="cards flex-row">
            <div class="card">
                <div class="card-top">
                    <img src="{{ public_path('/img/babraham.png') }}" alt="babraham">
                </div>
                <h2>Babraham Research Campus</h2>
                <span>
                    babraham.com
                </span>
                <h3>
                    Research Campus | Office & Lab Space
                </h3>
                <p>
                    Babraham provides access to Accelerate@Babraham as well as a comprehensive range of administrative,
                    IT
                    and corporate services. The world-class research and scientific facilities of the Babraham Institute
                    are
                    available to occupiers on the campus.
                </p>
            </div>
            <div class="card">
                <div class="card-top">
                    <img src="{{ public_path('/img/ashn.png') }}" alt="ashn">
                </div>
                <h2>Eastern AHSN</h2>
                <span>
                    easternahsn.org
                </span>
                <h3>
                    Public Sector | Network Support
                </h3>
                <p>
                    Eastern AHSN helps innovators navigate complex systems, generate value propositions and convene key
                    stakeholders to realise the value of innovations quicker. Their focus is in the East of England, but
                    they are part of a national network to help innovators work with the NHS.
                </p>
            </div>
        </div>
    </div>

    <!-- The Gateway to the UK Pharmaceuticals Industry page -->
    <div class="page-break container">
        <div class="heading flex-row align-start">
            <div class="heading-title">
                <h1 class="w-80">
                    The Gateway to the UK Pharmaceuticals Industry
                </h1>
            </div>
            <div class="heading-content">
                The UK Pharmaceuticals market is one of the highest valued across Europe.The particular advantage of the
                UK
                is in the market’s connected landscape and the National Health Service’s (NHS) role as a partner for
                research, data and evidence development. The Cambridgeshire and Peterborough region is globally renowned
                as
                one of the best locations to grow a Life Sciences company.
            </div>
        </div>
        <div class="flex-row gateway-cards align-start">
            <div class="card">
                <h4>
                    UK Pharmaceuticals market value
                </h4>
                <p>
                    £20.29bn
                </p>
            </div>
            <div class="card">
                <h4>
                    UK Pharmaceuticals R&D spend
                </h4>
                <p>
                    £5.29bn
                </p>
            </div>
            <div class="card">
                <h4>
                    Regional Workforce
                </h4>
                <p>
                    15,000+
                </p>
                <span>
                    employees within life sciences
                </span>
            </div>
        </div>
        <div class="flex-row gateway-cards align-start flex-start">
            <div class="card">
                <h4>
                    Regional R&D
                </h4>
                <p>
                    316
                </p>
                <span>
                    Patent applications per 100K residents (highest in UK)
                </span>
            </div>
            <div class="card">
                <h4>
                    Regional Industry
                </h4>
                <p>
                    450+
                </p>
                <span>
                    Life Science & Healthcare companies
                </span>
            </div>
        </div>

    </div>

    <!-- Case study companies first page -->
    <div class="page-break container main-cards">
        <div class="heading flex-row align-start">
            <div class="heading-title">
                <h1>
                    Case study companies
                </h1>
            </div>
        </div>
        <div class="cards flex-row">
            <div class="card">
                <div class="card-top">
                    <img src="{{ public_path('/img/astrazeneca.png') }}" alt="astrazeneca">
                </div>
                <h2>Astrazeneca</h2>
                <span>
                    astrazeneca.com
                </span>
                <h3>
                    Public Sector | Network Support
                </h3>
                <p>
                    Cambridge is one of the most exciting bioscience hotspots in the world. It is home to one of
                    AstraZeneca’s three global R&D Centres, alongside Gothenburg and Gaithersburg, and plays a central
                    role
                    in our mission to deliver life-changing medicines to patients.
                </p>
            </div>
            <div class="card">
                <div class="card-top">
                    <img src="{{ public_path('/img/abcam.png') }}" alt="abcam">
                </div>
                <h2>Abcam</h2>
                <span>
                    abcam.org
                </span>
                <h3>
                    Public Sector | Network Support
                </h3>
                <p>
                    As a global life sciences company, Abcam identifies, develops, and distributes high-quality
                    biological
                    reagents and tools that are crucial to research, drug discovery and diagnostics. Working across the
                    industry, Abcam supports scientists to achieve their mission, faster.
                </p>
            </div>
        </div>
    </div>

    <!-- Case study companies second page -->
    <div class="page-break container main-cards">
        <div class="heading flex-row align-start">
            <div class="heading-title">
                <h1>
                    Case study companies
                </h1>
            </div>
        </div>
        <div class="cards flex-row">
            <div class="card">
                <div class="card-top">
                    <img src="{{ public_path('/img/gsk.png') }}" alt="gsk">
                </div>
                <h2>GlaxoSmithKline</h2>
                <span>
                    gsk.com
                </span>
                <h3>
                    Public Sector | Network Support
                </h3>
                <p>
                    We are one of the largest global healthcare companies researching, developing and supplying
                    innovative
                    medicines, vaccines and healthcare products with our global HQ in the UK. Currently, we invest
                    around
                    £1bn in research and development (R&D) in the UK annually.
                </p>
            </div>
            <div class="card">
                <div class="card-top">
                    <img src="{{ public_path('/img/envigo.png') }}" alt="abcam">
                </div>
                <h2>Envigo</h2>
                <span>
                    envigo.org
                </span>
                <h3>
                    Public Sector | Network Support
                </h3>
                <p>
                    [Simon to supply copy]
                </p>
            </div>
        </div>
    </div>

    <!-- Pharmaceuticals Workforce page -->
    <div class="page-break container pharmaceuticals-market">
        <div class="heading flex-row">
            <div class="heading-title">
                <h1>
                    Pharmaceuticals
                    <span>
                        Workforce
                    </span>
                </h1>
            </div>
            <div class="heading-content flex-row">
                <div class="heading-content__left">
                    <p>
                        04
                        <span>
                            Market
                        </span>
                    </p>
                    <p>
                        12
                        <span>
                            Workforce & Salaries
                        </span>
                    </p>
                    <p>
                        16
                        <span>
                            Taxes
                        </span>
                    </p>
                </div>
                <div class="heading-content__right">
                    <p>
                        17
                        <span>
                            Cost of Operations
                        </span>
                    </p>
                    <p>
                        18
                        <span>
                            Investment
                        </span>
                    </p>
                    <p>
                        19
                        <span>
                            Services
                        </span>
                    </p>
                </div>
            </div>

        </div>
        <div class="content">
            <p>
                12
                <span>
                    Workforce Salaries
                </span>
            </p>
            <p>
                13
                <span>
                    Workforce Competing Locations
                </span>
            </p>
        </div>
    </div>

    <!-- Cambridgeshire and Peterborough Workforce  page -->
    <div class="page-break container market-value">
        <div class="heading flex-row align-start">
            <div class="heading-title">
                <h1>
                    Cambridgeshire and Peterborough Workforce
                </h1>
            </div>
            <div class="heading-content">
                A key part of the Lifesciences Golden Triangle the Cambridgeshire and Peterborough region enables access
                to
                workforce from Oxford and London. The accessible Pharmaceutical workforce is notable for it’s size and
                balance of experience levels from entry level through to the most experienced talent.
            </div>
        </div>
        <div class="donut-cards mr-40 flex-row align-start">
            <div class="card">
                <div class="donut-title">
                    <h2>
                        Pharmaceuticals Workforce
                    </h2>
                </div>
                <!-- <div class="donut-chart">
                    <div class="donut-chart__text flex-row flex-center">
                        <p>
                            <span>
                                Total
                            </span>
                            4864
                        </p>
                    </div>
                    <div class="brown-percent">
                        <span>
                            48.56%
                        </span>
                    </div>
                    <div class="orange-percent">
                        <span>
                            20.06%
                        </span>
                    </div>
                    <div class="lavander-percent">
                        <span>
                            30.08%
                        </span>
                    </div>
                </div> -->
                <div>
                    <canvas class="myCanvas" id="myCanvas1"></canvas>
                </div>

                <div class="donut-legend flex-row">
                    <div class="donut-legend-item orange">
                        <span>
                            0-5 yrs
                        </span>
                        <p>
                            2,362
                        </p>
                    </div>
                    <div class="donut-legend-item lavander">
                        <span>
                            0-5 yrs
                        </span>
                        <p>
                            2,362
                        </p>
                    </div>
                    <div class="donut-legend-item brown">
                        <span>
                            0-5 yrs
                        </span>
                        <p>
                            2,362
                        </p>
                    </div>
                </div>
                <div class="donut-info">
                    <p>
                        Staff retention &#8212; <span>Good</span>
                    </p>
                </div>
            </div>
            <div class="card w-49">
                <div class="donut-title">
                    <h2>
                        Salaries
                    </h2>
                </div>
                <div class="donut-table">
                    <div class="flex-row donut-table__row">
                        <div>
                            <span>
                                Clinical Researcher
                            </span>
                        </div>
                        <div>
                            <span>
                                Sales Manager
                            </span>
                        </div>
                        <div>
                            <span>
                                Administrator
                            </span>
                        </div>
                    </div>
                    <div class="flex-row donut-table__row">
                        <div>
                            <span>
                                1-5 years
                            </span>
                            <p>
                                £24,678
                            </p>
                        </div>
                        <div>
                            <span>
                                1-5 years
                            </span>
                            <p>
                                £24,678
                            </p>
                        </div>
                        <div>
                            <span>
                                1-5 years
                            </span>
                            <p>
                                £24,678
                            </p>
                        </div>
                    </div>
                    <div class="flex-row donut-table__row">
                        <div>
                            <span>
                                5-10 years
                            </span>
                            <p>
                                £44,678
                            </p>
                        </div>
                        <div>
                            <span>
                                5-10 years
                            </span>
                            <p>
                                £44,678
                            </p>
                        </div>
                        <div>
                            <span>
                                5-10 years
                            </span>
                            <p>
                                £44,678
                            </p>
                        </div>
                    </div>
                    <div class="flex-row donut-table__row">
                        <div>
                            <span>
                                10+ years
                            </span>
                            <p>
                                £44,678
                            </p>
                        </div>
                        <div>
                            <span>
                                10+ years
                            </span>
                            <p>
                                £44,678
                            </p>
                        </div>
                        <div>
                            <span>
                                10+ years
                            </span>
                            <p>
                                £44,678
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Competing Pharmaceuticals Locations first page -->
    <div class="page-break container market-value">
        <div class="heading flex-row align-start">
            <div class="heading-title">
                <h1 class="w-80">
                    Competing Pharmaceuticals Locations
                </h1>
            </div>
        </div>
        <div class="donut-cards flex-row align-start">
            <div class="card">
                <div class="donut-title">
                    <h2>
                        Warrington
                    </h2>
                </div>
                <!-- <div class="donut-chart">
                    <div class="donut-chart__text flex-row flex-center">
                        <p>
                            <span>
                                Total
                            </span>
                            4864
                        </p>
                    </div>
                    <div class="brown-percent">
                        <span>
                            48.56%
                        </span>
                    </div>
                    <div class="orange-percent">
                        <span>
                            20.06%
                        </span>
                    </div>
                    <div class="lavander-percent">
                        <span>
                            30.08%
                        </span>
                    </div>
                </div> -->
                <div>
                    <canvas class="myCanvas" id="myCanvas2"></canvas>
                </div>
                <div class="donut-legend flex-row">
                    <div class="donut-legend-item orange">
                        <span>
                            0-5 yrs
                        </span>
                        <p>
                            2,362
                        </p>
                    </div>
                    <div class="donut-legend-item lavander">
                        <span>
                            0-5 yrs
                        </span>
                        <p>
                            2,362
                        </p>
                    </div>
                    <div class="donut-legend-item brown">
                        <span>
                            0-5 yrs
                        </span>
                        <p>
                            2,362
                        </p>
                    </div>
                </div>
                <div class="donut-info">
                    <p>
                        Staff retention &#8212; <span>Good</span>
                    </p>
                </div>
            </div>
            <div class="card">
                <div class="donut-title">
                    <h2>
                        Burnley
                    </h2>
                </div>
                <!-- <div class="donut-chart">
                    <div class="donut-chart__text flex-row flex-center">
                        <p>
                            <span>
                                Total
                            </span>
                            4864
                        </p>
                    </div>
                    <div class="brown-percent">
                        <span>
                            48.56%
                        </span>
                    </div>
                    <div class="orange-percent">
                        <span>
                            20.06%
                        </span>
                    </div>
                    <div class="lavander-percent">
                        <span>
                            30.08%
                        </span>
                    </div>
                </div> -->
                <div>
                    <canvas class="myCanvas" id="myCanvas3"></canvas>
                </div>
                <div class="donut-legend flex-row">
                    <div class="donut-legend-item orange">
                        <span>
                            0-5 yrs
                        </span>
                        <p>
                            2,362
                        </p>
                    </div>
                    <div class="donut-legend-item lavander">
                        <span>
                            0-5 yrs
                        </span>
                        <p>
                            2,362
                        </p>
                    </div>
                    <div class="donut-legend-item brown">
                        <span>
                            0-5 yrs
                        </span>
                        <p>
                            2,362
                        </p>
                    </div>
                </div>
                <div class="donut-info">
                    <p>
                        Staff retention &#8212; <span>High</span>
                    </p>
                </div>
            </div>
            <div class="card">
                <div class="donut-title">
                    <h2>
                        Bolton
                    </h2>
                </div>
                <!-- <div class="donut-chart">
                    <div class="donut-chart__text flex-row flex-center">
                        <p>
                            <span>
                                Total
                            </span>
                            4864
                        </p>
                    </div>
                    <div class="brown-percent">
                        <span>
                            48.56%
                        </span>
                    </div>
                    <div class="orange-percent">
                        <span>
                            20.06%
                        </span>
                    </div>
                    <div class="lavander-percent">
                        <span>
                            30.08%
                        </span>
                    </div>
                </div> -->
                <div>
                    <canvas class="myCanvas" id="myCanvas4"></canvas>
                </div>
                <div class="donut-legend flex-row">
                    <div class="donut-legend-item orange">
                        <span>
                            0-5 yrs
                        </span>
                        <p>
                            2,362
                        </p>
                    </div>
                    <div class="donut-legend-item lavander">
                        <span>
                            0-5 yrs
                        </span>
                        <p>
                            2,362
                        </p>
                    </div>
                    <div class="donut-legend-item brown">
                        <span>
                            0-5 yrs
                        </span>
                        <p>
                            2,362
                        </p>
                    </div>
                </div>
                <div class="donut-info">
                    <p>
                        Staff retention &#8212; <span>Low</span>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Competing Pharmaceuticals Locations second page -->
    <div class="page-break container market-value">
        <div class="heading flex-row align-start">
            <div class="heading-title">
                <h1 class="w-80">
                    Competing Pharmaceuticals Locations
                </h1>
            </div>
        </div>
        <div class="donut-cards flex-row align-start">
            <div class="card">
                <div class="donut-title">
                    <h2>
                        Middle Earth
                    </h2>
                </div>
                <!-- <div class="donut-chart">
                    <div class="donut-chart__text flex-row flex-center">
                        <p>
                            <span>
                                Total
                            </span>
                            4864
                        </p>
                    </div>
                    <div class="brown-percent">
                        <span>
                            48.56%
                        </span>
                    </div>
                    <div class="orange-percent">
                        <span>
                            20.06%
                        </span>
                    </div>
                    <div class="lavander-percent">
                        <span>
                            30.08%
                        </span>
                    </div>
                </div> -->
                <div>
                    <canvas class="myCanvas" id="myCanvas5"></canvas>
                </div>
                <div class="donut-legend flex-row">
                    <div class="donut-legend-item orange">
                        <span>
                            0-5 yrs
                        </span>
                        <p>
                            2,362
                        </p>
                    </div>
                    <div class="donut-legend-item lavander">
                        <span>
                            0-5 yrs
                        </span>
                        <p>
                            2,362
                        </p>
                    </div>
                    <div class="donut-legend-item brown">
                        <span>
                            0-5 yrs
                        </span>
                        <p>
                            2,362
                        </p>
                    </div>
                </div>
                <div class="donut-info">
                    <p>
                        Staff retention &#8212; <span>Good</span>
                    </p>
                </div>
            </div>
            <div class="card">
                <div class="donut-title">
                    <h2>
                        Kentucky
                    </h2>
                </div>
                <!-- <div class="donut-chart">
                    <div class="donut-chart__text flex-row flex-center">
                        <p>
                            <span>
                                Total
                            </span>
                            4864
                        </p>
                    </div>
                    <div class="brown-percent">
                        <span>
                            48.56%
                        </span>
                    </div>
                    <div class="orange-percent">
                        <span>
                            20.06%
                        </span>
                    </div>
                    <div class="lavander-percent">
                        <span>
                            30.08%
                        </span>
                    </div>
                </div> -->
                <div>
                    <canvas class="myCanvas" id="myCanvas6"></canvas>
                </div>
                <div class="donut-legend flex-row">
                    <div class="donut-legend-item orange">
                        <span>
                            0-5 yrs
                        </span>
                        <p>
                            2,362
                        </p>
                    </div>
                    <div class="donut-legend-item lavander">
                        <span>
                            0-5 yrs
                        </span>
                        <p>
                            2,362
                        </p>
                    </div>
                    <div class="donut-legend-item brown">
                        <span>
                            0-5 yrs
                        </span>
                        <p>
                            2,362
                        </p>
                    </div>
                </div>
                <div class="donut-info">
                    <p>
                        Staff retention &#8212; <span>High</span>
                    </p>
                </div>
            </div>
            <div class="card">
                <div class="donut-title">
                    <h2>
                        Streatham
                    </h2>
                </div>
                <!-- <div class="donut-chart">
                    <div class="donut-chart__text flex-row flex-center">
                        <p>
                            <span>
                                Total
                            </span>
                            4864
                        </p>
                    </div>
                    <div class="brown-percent">
                        <span>
                            48.56%
                        </span>
                    </div>
                    <div class="orange-percent">
                        <span>
                            20.06%
                        </span>
                    </div>
                    <div class="lavander-percent">
                        <span>
                            30.08%
                        </span>
                    </div>
                </div> -->
                <div>
                    <canvas class="myCanvas" id="myCanvas7"></canvas>
                </div>
                <div class="donut-legend flex-row">
                    <div class="donut-legend-item orange">
                        <span>
                            0-5 yrs
                        </span>
                        <p>
                            2,362
                        </p>
                    </div>
                    <div class="donut-legend-item lavander">
                        <span>
                            0-5 yrs
                        </span>
                        <p>
                            2,362
                        </p>
                    </div>
                    <div class="donut-legend-item brown">
                        <span>
                            0-5 yrs
                        </span>
                        <p>
                            2,362
                        </p>
                    </div>
                </div>
                <div class="donut-info">
                    <p>
                        Staff retention &#8212; <span>Low</span>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Pharmaceuticals Taxes page -->
    <div class="page-break container pharmaceuticals-market">
        <div class="heading flex-row">
            <div class="heading-title">
                <h1>
                    Pharmaceuticals
                    <span>
                        Taxes
                    </span>
                </h1>
            </div>
            <div class="heading-content flex-row">
                <div class="heading-content__left">
                    <p>
                        04
                        <span>
                            Market
                        </span>
                    </p>
                    <p>
                        12
                        <span>
                            Workforce & Salaries
                        </span>
                    </p>
                    <p>
                        16
                        <span>
                            Taxes
                        </span>
                    </p>
                </div>
                <div class="heading-content__right">
                    <p>
                        17
                        <span>
                            Cost of Operations
                        </span>
                    </p>
                    <p>
                        18
                        <span>
                            Investment
                        </span>
                    </p>
                    <p>
                        19
                        <span>
                            Services
                        </span>
                    </p>
                </div>
            </div>
        </div>
        <div class="content">
            <p>
                16
                <span>
                    Corporation Tax
                </span>
            </p>
            <p>
                16
                <span>
                    Employee Tax
                </span>
            </p>
            <p>
                16
                <span>
                    Dividend repatriation
                </span>
            </p>
        </div>
    </div>

    <!-- UK Taxes page -->
    <div class="page-break container market-value">
        <div class="heading heading__no-border flex-row align-start">
            <div class="heading-title">
                <h1>
                    UK Taxes
                </h1>
            </div>
            <div class="heading-content">
                The UK has the lowest corporation tax in the G20 and the tax information below is a based upon the
                standard
                rate for corporation tax and repatriation of dividends as well as an estimation rate for employee
                liability.
            </div>
        </div>
        <div class="graphs-content">
            <div class="graphs-content__info flex-row align-start">
                <div class="flex-col graphs-content__info-left">
                    <div class="bl-2 bl-orange">
                        <p>
                            Corporation Tax
                        </p>
                        <span>
                            A direct tax imposed on the profits of companies
                        </span>
                    </div>
                    <div class="bl-2 bl-yellow">
                        <p>
                            Employee Tax
                        </p>
                        <span>
                            Includes compulsory contributions to pension, health and unemployment insurance.
                        </span>
                    </div>
                    <div class="bl-2 bl-lavander">
                        <p>
                            Dividend Repatriation
                        </p>
                        <span>
                            Refers to the return of earnings from foreign subsidiaries to their parent companies.
                        </span>
                    </div>
                </div>
                <div class="graphs-content__info-right cloud">
                    <p>
                        Ease of doing business
                    </p>
                    <span>
                        According to the World Bank’s ease of doing business index the UK is the 7th easiest country in
                        the world to do business and is ranked 2nd in Europe
                    </span>
                </div>
            </div>
            <div class="content-graphs flex-row flex-start align-start">
                <div class="content-graphs__currency">
                    <p>
                        %
                    </p>
                </div>
                <div class="content-graphs__values flex-col">
                    <div>
                        100
                    </div>
                    <div>
                        80
                    </div>
                    <div>
                        60
                    </div>
                    <div>
                        40
                    </div>
                    <div>
                        20
                    </div>
                </div>
                <div class="content-graphs__table flex-col flex-center">
                    <div class="charts flex-row flex-center">
                        <div class="chart flex-row align-baseline">
                            <div id="chart1" class="chart-orange">
                                <div class="chart-placeholder">
                                    <p>UK</p>
                                </div>
                                <div class="chart-number">
                                    <p class="color-white">19</p>
                                </div>
                            </div>
                            <div class="chart-yellow">
                                <div class="chart-number">
                                    <p class="color-white">14</p>
                                </div>
                            </div>
                            <div class="chart-gray">
                                <div class="chart-number">
                                    <p>0</p>
                                </div>
                            </div>
                        </div>
                        <div class="chart flex-row align-baseline">
                            <div id="chart1" class="chart-orange">
                                <div class="chart-placeholder">
                                    <p>Switzerland</p>
                                </div>
                                <div class="chart-number">
                                    <p class="color-white">19</p>
                                </div>
                            </div>
                            <div class="chart-yellow">
                                <div class="chart-number">
                                    <p class="color-white">14</p>
                                </div>
                            </div>
                            <div class="chart-gray">
                                <div class="chart-number">
                                    <p>0</p>
                                </div>
                            </div>
                        </div>
                        <div class="chart flex-row align-baseline">
                            <div id="chart1" class="chart-orange">
                                <div class="chart-placeholder">
                                    <p>Germany</p>
                                </div>
                                <div class="chart-number">
                                    <p class="color-white">19</p>
                                </div>
                            </div>
                            <div class="chart-yellow">
                                <div class="chart-number">
                                    <p class="color-white">14</p>
                                </div>
                            </div>
                            <div class="chart-gray">
                                <div class="chart-number">
                                    <p>0</p>
                                </div>
                            </div>
                        </div>
                        <div class="chart flex-row align-baseline">
                            <div id="chart1" class="chart-orange">
                                <div class="chart-placeholder">
                                    <p>France</p>
                                </div>
                                <div class="chart-number">
                                    <p class="color-white">19</p>
                                </div>
                            </div>
                            <div class="chart-yellow">
                                <div class="chart-number">
                                    <p class="color-white">14</p>
                                </div>
                            </div>
                            <div class="chart-gray">
                                <div class="chart-number">
                                    <p>0</p>
                                </div>
                            </div>
                        </div>
                        <div class="chart flex-row align-baseline">
                            <div id="chart1" class="chart-orange">
                                <div class="chart-placeholder">
                                    <p>Netherlands</p>
                                </div>
                                <div class="chart-number">
                                    <p class="color-white">19</p>
                                </div>
                            </div>
                            <div class="chart-yellow">
                                <div class="chart-number">
                                    <p class="color-white">14</p>
                                </div>
                            </div>
                            <div class="chart-gray">
                                <div class="chart-number">
                                    <p>0</p>
                                </div>
                            </div>
                        </div>
                        <div class="chart flex-row align-baseline">
                            <div id="chart1" class="chart-orange">
                                <div class="chart-placeholder">
                                    <p>Italy</p>
                                </div>
                                <div class="chart-number">
                                    <p class="color-white">19</p>
                                </div>
                            </div>
                            <div class="chart-yellow">
                                <div class="chart-number">
                                    <p class="color-white">14</p>
                                </div>
                            </div>
                            <div class="chart-gray">
                                <div class="chart-number">
                                    <p>0</p>
                                </div>
                            </div>
                        </div>
                        <div class="chart flex-row align-baseline">
                            <div id="chart1" class="chart-orange">
                                <div class="chart-placeholder">
                                    <p>Spain</p>
                                </div>
                                <div class="chart-number">
                                    <p class="color-white">19</p>
                                </div>
                            </div>
                            <div class="chart-yellow">
                                <div class="chart-number">
                                    <p class="color-white">14</p>
                                </div>
                            </div>
                            <div class="chart-gray">
                                <div class="chart-number">
                                    <p>0</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="line">

                    </div>
                    <div class="line">

                    </div>
                    <div class="line">

                    </div>
                    <div class="line">

                    </div>
                    <div class="line">

                    </div>
                    <div class="line">

                    </div>
                    <div class="line">

                    </div>
                    <div class="line">

                    </div>
                    <div class="line">

                    </div>
                    <div class="line">

                    </div>
                    <div class="line">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Cost of operations page -->
    <div class="page-break container cost-operations">
        <div class="heading heading__no-border flex-row align-start">
            <div class="heading-title">
                <h1>
                    Cost of operations
                </h1>
            </div>
            <div class="heading-content">
                This example is based on a pharmaceuticals company with 35 employees and a turnover of £3.2m. Employees
                cover all aspects of research, development, sales, marketing and management. Operating costs labour
                (including employer taxes), property and average utility costs for each country. National corporation
                tax is
                used to calculate post Tax profits. The calculations are purely to provide guidance and are based upon
                information correct at the time of publishing.
            </div>
        </div>
        <div class="graphs-content">
            <div class="graphs-content__info flex-row">
                <div class="flex-col graphs-content__info-left">
                    <h2>
                        Cost of operations example
                    </h2>
                </div>
                <div class="graphs-content__info-right flex-row">
                    <div class="bl-2 bl-orange">
                        <p>
                            Operating Profit Before Tax
                        </p>
                    </div>
                    <div class="bl-2 bl-lavander">
                        <p>
                            Operating Profit Before Tax
                        </p>
                    </div>
                </div>
            </div>
            <div class="content-graphs flex-row flex-start align-start ">
                <div class="content-graphs__currency">
                    <p>
                        £M
                    </p>
                </div>
                <div class="content-graphs__values flex-col">
                    <div>
                        2.5
                    </div>
                    <div>
                        2.0
                    </div>
                    <div>
                        1.5
                    </div>
                    <div>
                        1.0
                    </div>
                    <div>
                        0.5
                    </div>
                    <div>
                        2.5
                    </div>
                    <div>
                        2.0
                    </div>
                    <div>
                        1.5
                    </div>
                    <div>
                        1.0
                    </div>
                    <div>
                        0.5
                    </div>
                </div>
                <div class="content-graphs__table flex-col flex-center">
                    <div class="charts charts-cost flex-row flex-center">
                        <div class="chart flex-col align-baseline">
                            <div class="chart-line lavander">
                                <div class="chart-circle lavander">
                                    <p>£1,465,442</p>
                                </div>
                            </div>
                            <div class="chart-line orange">
                                <div class="chart-circle orange">
                                    <p>£1,465,442</p>
                                </div>
                                <div class="chart-placeholder">
                                    <p>UK</p>
                                </div>
                            </div>
                        </div>
                        <div class="chart flex-col align-baseline">
                            <div class="chart-line lavander">
                                <div class="chart-circle lavander">
                                    <p>£1,465,442</p>
                                </div>
                            </div>
                            <div class="chart-line orange">
                                <div class="chart-circle orange">
                                    <p>£1,465,442</p>
                                </div>
                                <div class="chart-placeholder">
                                    <p>Switzerland</p>
                                </div>
                            </div>
                        </div>
                        <div class="chart flex-col align-baseline">
                            <div class="chart-line lavander">
                                <div class="chart-circle lavander">
                                    <p>£1,465,442</p>
                                </div>
                            </div>
                            <div class="chart-line orange">
                                <div class="chart-circle orange">
                                    <p>£1,465,442</p>
                                </div>
                                <div class="chart-placeholder">
                                    <p>Germany</p>
                                </div>
                            </div>
                        </div>
                        <div class="chart flex-col align-baseline">
                            <div class="chart-line lavander">
                                <div class="chart-circle lavander">
                                    <p>£1,465,442</p>
                                </div>
                            </div>
                            <div class="chart-line orange">
                                <div class="chart-circle orange">
                                    <p>£1,465,442</p>
                                </div>
                                <div class="chart-placeholder">
                                    <p>France</p>
                                </div>
                            </div>
                        </div>
                        <div class="chart flex-col align-baseline">
                            <div class="chart-line lavander">
                                <div class="chart-circle lavander">
                                    <p>£1,465,442</p>
                                </div>
                            </div>
                            <div class="chart-line orange">
                                <div class="chart-circle orange">
                                    <p>£1,465,442</p>
                                </div>
                                <div class="chart-placeholder">
                                    <p>Netherlands</p>
                                </div>
                            </div>
                        </div>
                        <div class="chart flex-col align-baseline">
                            <div class="chart-line lavander">
                                <div class="chart-circle lavander">
                                    <p>£1,465,442</p>
                                </div>
                            </div>
                            <div class="chart-line orange">
                                <div class="chart-circle orange">
                                    <p>£1,465,442</p>
                                </div>
                                <div class="chart-placeholder">
                                    <p>Italy</p>
                                </div>
                            </div>
                        </div>
                        <div class="chart flex-col align-baseline">
                            <div class="chart-line lavander">
                                <div class="chart-circle lavander">
                                    <p>£1,465,442</p>
                                </div>
                            </div>
                            <div class="chart-line orange">
                                <div class="chart-circle orange">
                                    <p>£1,465,442</p>
                                </div>
                                <div class="chart-placeholder">
                                    <p>Spain</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="line">

                    </div>
                    <div class="line">

                    </div>
                    <div class="line">

                    </div>
                    <div class="line">

                    </div>
                    <div class="line">

                    </div>
                    <div class="line">

                    </div>
                    <div class="line">

                    </div>
                    <div class="line">

                    </div>
                    <div class="line">

                    </div>
                    <div class="line">

                    </div>
                    <div class="line">

                    </div>
                    <div class="line">

                    </div>
                    <div class="line">

                    </div>
                    <div class="line">

                    </div>
                    <div class="line">

                    </div>
                    <div class="line">

                    </div>
                    <div class="line">

                    </div>
                    <div class="line">

                    </div>
                    <div class="line">

                    </div>
                    <div class="line">

                    </div>
                    <div class="line">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- UK Investment Landscape page -->
    <div class="page-break container pharmaceuticals-investment">
        <div class="heading heading__no-border flex-row align-start">
            <div class="heading-title">
                <h1 class="w-80">
                    UK Investment Landscape
                </h1>
            </div>
            <div class="heading-content">
                The UK has a dominant role within the European investment landscape due to it's market size, R&D
                incentives
                and mature investment eco-system.
                The investment landscape has benefited from generous tax incentives UK investors receive when backing UK
                companies. The dominant tax incentives are Seed Enterprise Investment Scheme (SEIS) and Enterprise
                Investment Scheme (EIS).
            </div>
        </div>
        <div class="graphs-content ">
            <div class="graphs-content__info flex-row align-start">
                <div class="flex-col graphs-content__info-left">
                    <h2>
                        Pharmaceuticals Investment
                    </h2>
                </div>
                <div class="graphs-content__info-right">
                    <span>
                        SEIS was introduced in 2011 and is aimed at pre-seed companies who can raise £150,000 with
                        investors receiving 50% tax relief on their investment. EIS was introduced in 1994 and is aimed
                        at companies who are scaling and can raise up to £12m with investors receiving 30% tax relief on
                        their investment.
                    </span>
                    <span class="pt-20">
                        Full details at: <b>
                            www.gov.uk/topic/business-tax/investment-schemes
                        </b>
                    </span>
                </div>
            </div>
            <div class="content-graphs flex-row flex-start align-start ">
                <div class="content-graphs__currency">
                    <p>
                        £BN
                    </p>
                </div>
                <div class="content-graphs__values flex-col">
                    <div>
                        2.5
                    </div>
                    <div>
                        2.0
                    </div>
                    <div>
                        1.5
                    </div>
                    <div>
                        1.0
                    </div>
                    <div>
                        0.5
                    </div>
                </div>
                <div class="content-graphs__table flex-col flex-center">
                    <div class="charts flex-row flex-center">
                        <div class="chart flex-row align-baseline">
                            <div id="chart1" class="chart-orange">
                                <div class="chart-placeholder">
                                    <p>UK</p>
                                </div>
                            </div>
                        </div>
                        <div class="chart flex-row align-baseline">
                            <div class="chart-orange">
                                <div class="chart-placeholder">
                                    <p>Switzerland</p>
                                </div>
                            </div>
                        </div>
                        <div class="chart flex-row align-baseline">
                            <div class="chart-orange">
                                <div class="chart-placeholder">
                                    <p>Germany</p>
                                </div>
                            </div>
                        </div>
                        <div class="chart flex-row align-baseline">
                            <div id="chart1" class="chart-orange">
                                <div class="chart-placeholder">
                                    <p>France</p>
                                </div>
                            </div>
                        </div>
                        <div class="chart flex-row align-baseline">
                            <div id="chart1" class="chart-orange">
                                <div class="chart-placeholder">
                                    <p>Netherlands</p>
                                </div>
                            </div>
                        </div>
                        <div class="chart flex-row align-baseline">
                            <div id="chart1" class="chart-orange">
                                <div class="chart-placeholder">
                                    <p>Italy</p>
                                </div>
                            </div>
                        </div>
                        <div class="chart flex-row align-baseline">
                            <div id="chart1" class="chart-orange">
                                <div class="chart-placeholder">
                                    <p>Spain</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="line">

                    </div>
                    <div class="line">

                    </div>
                    <div class="line">

                    </div>
                    <div class="line">

                    </div>
                    <div class="line">

                    </div>
                    <div class="line">

                    </div>
                    <div class="line">

                    </div>
                    <div class="line">

                    </div>
                    <div class="line">

                    </div>
                    <div class="line">

                    </div>
                    <div class="line">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Our Services page -->
    <div class="page-break container pharmaceuticals-market">
        <div class="heading flex-row">
            <div class="heading-title">
                <h1>
                    Our Services
                </h1>
            </div>
            <div class="heading-content flex-row">
                <div class="heading-content__left">
                    <p>
                        04
                        <span>
                            Market
                        </span>
                    </p>
                    <p>
                        12
                        <span>
                            Workforce & Salaries
                        </span>
                    </p>
                    <p>
                        16
                        <span>
                            Taxes
                        </span>
                    </p>
                </div>
                <div class="heading-content__right">
                    <p>
                        17
                        <span>
                            Cost of Operations
                        </span>
                    </p>
                    <p>
                        18
                        <span>
                            Investment
                        </span>
                    </p>
                    <p>
                        19
                        <span>
                            Services
                        </span>
                    </p>
                </div>
            </div>
        </div>
        <div class="content">
            <p>
                20
                <span>
                    Market Entry Support
                </span>
            </p>
            <p>
                21
                <span>
                    Our Process
                </span>
            </p>
        </div>
    </div>

    <!-- Services first page -->
    <div class="page-break container market-value">
        <div class="heading heading__no-border flex-row align-start">
            <div class="heading-title">
                <h1>
                    Services
                </h1>
            </div>
        </div>
        <div class="locate-cambridge graphs-content ">
            <div class="graphs-content__info flex-row align-start">
                <div class="graphs-content__info-left">
                    <h2>
                        Locate Cambridge
                    </h2>
                    <p>
                        At Locate Cambridge we represent the combined authority of Cambridgeshire and Peterborough. Our
                        remit is to help companies looking to expand into the region, providing information and
                        connections for successful UK market entry.
                    </p>
                </div>
                <div class="graphs-content__info-right">
                    <span>
                        Our team have supported over 1000 companies to expand in and around the UK. We can help you
                        understand the opportunities and pathways across each industry and can help you connect and
                        succeed, whether you are locating from another part of the UK or from overseas.
                    </span>
                    <span>
                        We are part of a wider set of services to help companies in the region and once you are set up
                        we can connect you into a wide range of support including; growth coaching, skills support and
                        access to finance
                    </span>
                    <span>
                        Every company we support has unique requirements, our aim is to connect you to the right people
                        and networks to help you grow and avoid mistakes.
                    </span>
                </div>
            </div>
        </div>
    </div>

    <!-- Services second page -->
    <div class="page-break container market-value">
        <div class="heading heading__no-border flex-row align-start">
            <div class="heading-title">
                <h1>
                    Services
                </h1>
            </div>
            <div class="heading-content">
                UK Market Entry Support
                We have supported over 1000 companies to expand in and around the UK. Our team can help you understand
                the
                opportunities and pathways across each industry.
            </div>
        </div>
        <div class="services">
            <h2>
                Our Process
            </h2>
            <div class="process-cards flex-row align-start">
                <div class="card">
                    <h2>
                        1. Research
                    </h2>
                    <p>
                        We can help you build your plan, identifying opportunities and exploring business set up issues.
                        Highlighting the free support you can access and your roadmap for the UK market.
                    </p>
                    <span>
                        Contact a specialist
                        <span class="orange">
                            rebecca.bekkenutte@growthworks.uk
                        </span>

                    </span>
                </div>
                <div class="card">
                    <h2>
                        2. Connect
                    </h2>
                    <p>
                        When you are ready we can connect you to the people who can help with everything from company
                        set
                        up, legal and tax, recruitment and networks for business development.
                    </p>
                    <span>
                        General Enquiries
                        <span class="orange">
                            rosa.delcampo@growthworks.uk
                        </span>
                    </span>
                </div>
                <div class="card">
                    <h2>
                        3. Launch
                    </h2>
                    <p>
                        Finally, we can help you with your future growth through the packages of support you can receive
                        from the GrowthWorks programme. Business coaching, investment and access to talent.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="{{ public_path('/js/chart.js') }}"></script>
    <script type="text/javascript" src="{{ public_path('/js/doughnot.js') }}"></script>

</body>

</html>
