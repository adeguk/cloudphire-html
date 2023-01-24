<?php include_once('inc/_header.php') ?>

<section id="below-header" data-track-name="below-header" data-track-index="3">
  <style>
    .flex-container {
      display: flex;
      align-content: stretch;
      width: 100%;
      align-items: stretch;
      flex-direction: row;
      flex-wrap: wrap;
      position: relative
    }

    .flex-container.lazy-bg {
      border-radius: var(--ux-2jubes, 2px)
    }

    .flex-container>* {
      flex: 1 auto
    }

    .flex-container.no-wrap {
      flex-wrap: nowrap;
      overflow-x: scroll;
      cursor: default
    }

    .flex-container.no-wrap::-webkit-scrollbar {
      display: none
    }

    @media(hover:hover) {

      .flex-container.no-wrap.active,
      .flex-container.no-wrap.active>*>* {
        cursor: grabbing;
        cursor: -webkit-grabbing
      }
    }

    #id-74818614-5358-4047-bbb7-c9367434d953 {
      overflow: hidden;
    }
  </style>

  <div id="id-74818614-5358-4047-bbb7-c9367434d953" class="flex-container fos container">
    <style>
      @media(min-width:1200px) {
        #id-74818614-5358-4047-bbb7-c9367434d953>* {
          min-width: 50%;
          flex: 1
        }
      }

      @media only screen and (min-width:992px) and (max-width:1199px) {
        #id-74818614-5358-4047-bbb7-c9367434d953>* {
          min-width: 50%;
          flex: 1
        }
      }

      @media only screen and (min-width:768px) and (max-width:991px) {
        #id-74818614-5358-4047-bbb7-c9367434d953>* {
          min-width: 100%;
          flex: 1
        }
      }

      @media(max-width:767px) {
        #id-74818614-5358-4047-bbb7-c9367434d953>* {
          min-width: 100%;
          flex: 1
        }
      }

      .domain-search-v2 {
        margin: 1rem 0
      }

      .domain-search-v2 .input-group .form-control[type="text"] {
        font-size: 1rem;
        line-height: 1.5rem;
        font-weight: 500;
        height: 3.75rem;
        color: #2b2b2b;
        border: 0;
        padding-block-start: 1rem;
        padding-block-end: 1rem;
        padding-inline-start: 1.25rem;
        padding-inline-end: 0;
        border-radius: var(--ux-1oqjeuu, 2px) 0 0 var(--ux-1oqjeuu, 2px)
      }

      .domain-search-v2 .input-group .form-control[type="text"]:focus,
      .domain-search-v2 .input-group .form-control[type="text"]:hover {
        box-shadow: none
      }

      .domain-search-v2 .input-group .form-control[type="text"]::placeholder {
        color: #444 !important;
        opacity: 1
      }

      .domain-search-v2 .input-group .form-control[type="text"] .input-group-btn button:hover {
        transition: .3s background ease-in-out
      }

      .domain-search-v2 input::-webkit-calendar-picker-indicator {
        display: none
      }

      @media(min-width:992px) {
        .domain-search-v2 .domain-search-deepsee:before {
          left: 1.5rem
        }

        .domain-search-v2 .input-group .form-control[type="text"] {
          font-size: 1.25rem
        }

        .domain-search-v2 .input-group-btn button {
          padding: 1rem 2rem
        }
      }

      @media(min-width:1200px) {
        .domain-search-v2 .input-group-btn button {
          font-size: 1rem;
          background-image: none;
          font-weight: 700
        }

        .domain-search-v2 .input-group-btn button:hover {
          background: #09757a;
          background-image: none;
          transition: .3s background ease-in-out
        }
      }

      .domain-search-v2 .input-group-ltr {
        width: 100%;
        display: flex;
        flex-direction: row
      }

      @media(max-width:767px) {
        .domain-search-v2 {
          margin: .5rem 0
        }
      }

      @media (min-width:1200px) {
        #top-search-form {
          padding-right: 40px;
        }
      }

      @media only screen and (min-width:992px) and (max-width:1199px) {
        #top-search-form {
          padding-right: 40px;
        }
      }

      #top-search-form.domain-search-v2 .input-group-btn button {
        background-color: #00838C;
      }

      #top-search-form.domain-search-v2 .input-group-btn button:hover {
        background-color: #00838C;
      }

      #top-search-form.domain-search-v2 .input-group .form-control[type="text"] {
        background-color: #EBEBEB;
      }
    </style>
    <form id="top-search-form" class="domain-search-v2 fos" name="domainsearchform" method="get" action="domainsearch/find">
      <div class="overlay"></div>
      <input type="hidden" name="checkAvail" value="1">
      <!--div-- class="general-input">
        <input class="fill-input" type="email" name="email" placeholder="Type the domain you want">
        <input type="submit" value="Search Domain" class="btn btn-default-yellow-fill initial-transform">
      </!--div-->
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Type the domain you want" aria-label="Type the domain you want" aria-describedby="button-addon2">
        <button class="btn btn-outline-secondary" type="button" id="button-addon2" style="border-radius:0;">Button</button>
      </div>
    </form>
    <style>
      .bug-bar-container {
        display: flex;
        padding-top: .25rem;
        padding-bottom: .25rem;
        width: 100%;
        position: relative;
        justify-content: center
      }

      #right-below-header {
        justify-content: flex-end;
        margin-right: 0;
      }

      @media (min-width:1200px) {
        #right-below-header {
          flex-grow: 0;
          flex-shrink: 2;
          flex-basis: auto;
          width: auto;
          min-width: unset;
        }
      }

      @media only screen and (min-width:992px) and (max-width:1199px) {
        #right-below-header {
          flex-grow: 0;
          flex-shrink: 2;
          flex-basis: auto;
          width: auto;
          min-width: unset;
        }
      }

      @media only screen and (min-width:768px) and (max-width:991px) {
        #right-below-header {
          display: none
        }
      }

      @media only screen and (max-width:767px) {
        #right-below-header {
          display: none
        }
      }

      @media screen and (min-width: 1720px) {
        #right-below-header .bug-bar-item:nth-of-type(n+6) {
          display: none
        }

        #right-below-header .bug-bar-item:nth-of-type(n+5) {
          margin-right: 0
        }
      }

      @media screen and (min-width: 1200px) and (max-width: 1719px) {
        #right-below-header .bug-bar-item:nth-of-type(n+5) {
          display: none
        }

        #right-below-header .bug-bar-item:nth-of-type(n+4) {
          margin-right: 0
        }
      }

      @media screen and (min-width: 992px) and (max-width: 1199px) {
        #right-below-header .bug-bar-item:nth-of-type(n+4) {
          display: none;
        }

        #right-below-header .bug-bar-item:nth-of-type(n+3) {
          margin-right: 0;
        }
      }

      @media screen and (min-width: 768px) and (max-width: 991px) {
        #right-below-header .bug-bar-item:nth-of-type(n+3) {
          display: none;
        }

        #right-below-header .bug-bar-item:nth-of-type(n+2) {
          margin-right: 0;
        }
      }
    </style>
    <div id="right-below-header" class="bug-bar-container fos container-fluid">
      <style>
        a.bug-bar-item {
          text-decoration: none;
          align-self: center;
          margin: .5rem 1rem;
          align-items: center;
          flex-grow: 0
        }

        a.bug-bar-item>*:not(:first-child) {
          margin-left: .5rem
        }

        html[dir=rtl] a.bug-bar-item>*:not(:first-child) {
          margin-left: 0;
          margin-right: .5rem
        }
      </style>

      <a id="id-1a8e1568-e574-45e3-ad0a-23d31f54b5ad" href="https://www.godaddy.com/en-uk/tlds/shop-domain" class="bug-bar-item fos" aria-label="">
        <svg xmlns="http://www.w3.org/2000/svg" width="33.5914" height="20" viewBox="0 0 33.5914 20">
          <defs>
            <style>
              .a {
                fill: #767676
              }
            </style>
          </defs>
          <title>img_icon_bug_tld-shop</title>
          <path class="a" d="M12.0585,4a.1809.1809,0,0,0,.04.0217,1.1022,1.1022,0,0,1,.8772,1.107c.0021.6332.0005,1.2664.0005,1.8995V7.153c.2553-.0278.4994-.0694.7448-.0784a3.8271,3.8271,0,0,1,2.1827.5581A2.567,2.567,0,0,1,16.87,8.81a4.4818,4.4818,0,0,1,.3761,1.8689c.0063,1.2663.002,2.5327.0018,3.799,0,.2066-.0591.2661-.2654.2662q-.82,0-1.64,0c-.2256,0-.2794-.0531-.2794-.2759,0-1.1641.0044-2.3282-.0032-3.4923a4.8213,4.8213,0,0,0-.0708-.867A.9713.9713,0,0,0,13.9649,9.24a1.79,1.79,0,0,0-.8672.1819.1847.1847,0,0,0-.1238.195q.0052,2.4186.0025,4.8373c0,.24-.05.29-.2886.29H11.0832c-.2414,0-.2917-.05-.2917-.2878q0-1.54.0017-3.0793a.1559.1559,0,0,0-.1087-.1748,1.0675,1.0675,0,0,1-.61-1.2836,3.963,3.963,0,0,1,.6423-1.29.3848.3848,0,0,0,.0719-.2119c.0044-1.0894,0-2.1788.0046-3.2681a1.0917,1.0917,0,0,1,.6039-1.031A2.3321,2.3321,0,0,1,11.7281,4Z"></path>
          <path class="a" d="M0,13.038c.0165-.0721.0345-.144.0493-.2164a1.77,1.77,0,0,1,1.7937-1.385,1.7832,1.7832,0,0,1,1.6621,1.4339,1.7637,1.7637,0,1,1-3.4793.575A.4594.4594,0,0,0,0,13.3684Z"></path>
          <path class="a" d="M7.0516,7.0671a3.916,3.916,0,0,1,2.0913.5938,1.0064,1.0064,0,0,1,.4987,1.164.9918.9918,0,0,1-1.3529.6025,8.0406,8.0406,0,0,0-.91-.3148,1.4753,1.4753,0,0,0-.8377.0352.9089.9089,0,0,0-.3245.18.3137.3137,0,0,0,.0816.5417,1.7986,1.7986,0,0,0,.4755.123c.3923.0561.7916.0731,1.1794.1494a2.3953,2.3953,0,0,1,.3246,4.6165,3.71,3.71,0,0,1-2.824-.1276,3.7911,3.7911,0,0,1-1.3019-.9353c-.1459-.1585-.1385-.259.0281-.3916q.5629-.4479,1.1259-.8955c.1911-.152.2433-.1474.4207.0157a1.8772,1.8772,0,0,0,1.695.4962.8668.8668,0,0,0,.2412-.09A.3578.3578,0,0,0,7.88,12.482a.35.35,0,0,0-.2609-.3423,3.1211,3.1211,0,0,0-.5432-.0924,5.2674,5.2674,0,0,1-1.41-.2493,2.2668,2.2668,0,0,1-1.55-1.91,2.2931,2.2931,0,0,1,1.097-2.3271A3.2014,3.2014,0,0,1,7.0516,7.0671Z"></path>
          <path class="a" d="M33.5915,10.413a3.95,3.95,0,0,0-4.9733-3.2,2.41,2.41,0,0,0-1.8473,1.8334,4.98,4.98,0,0,0-.0887,1.231c0,.1843,0,.3686,0,.553-.0286.01-.0467.016-.065.0217a1.0175,1.0175,0,0,0-.7053,1.325,4.0329,4.0329,0,0,0,.6931,1.3163.3705.3705,0,0,1,.074.21c.0047,1.0144.003,2.0288.0034,3.0432,0,.2006.0526.2533.2484.2533h1.6749c.2007,0,.2548-.0547.2549-.26q.0006-.8493,0-1.6985V14.895c.0506.0045.0858.0046.12.011a3.8849,3.8849,0,0,0,1.4409-.0039A3.9406,3.9406,0,0,0,33.5915,10.413Zm-4.02,2.3658a3.324,3.324,0,0,1-.6025-.1433c-.084-.0211-.1115-.0736-.11-.1634.0056-.381.0024-.7622.0024-1.1432,0-.3693-.0111-.7391.0048-1.1077a1.5437,1.5437,0,0,1,.108-.5127.76.76,0,0,1,.7977-.4606A1.7888,1.7888,0,0,1,31.41,10.61,1.7643,1.7643,0,0,1,29.5712,12.7788Z"></path>
          <path class="a" d="M21.7808,7.0671a3.9522,3.9522,0,1,0,3.9478,3.9544A3.9545,3.9545,0,0,0,21.7808,7.0671Zm-.0043,5.7185A1.77,1.77,0,1,1,23.55,11.0205,1.7659,1.7659,0,0,1,21.7765,12.7856Z"></path>
        </svg>
        <span class="price"><span class="p-xs d-block text-muted">£1.39</span></span>
      </a>

      <a id="id-a1e2ea17-5659-4030-b82b-65533d3f70a2" href="https://www.godaddy.com/en-uk/tlds/co-uk-domain" class="bug-bar-item fos">
        <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" width="32.9" height="20" viewBox="0 0 32.9 20">
          <defs>
            <style>
              .cls-1 {
                fill: #767676;
              }
            </style>
          </defs>
          <path class="cls-1" d="M22.7.2a9.9,9.9,0,0,1,9.5,7.6,9.9,9.9,0,0,1-7.3,11.8,12.2,12.2,0,0,1-3.3.2,9.8,9.8,0,0,1-7.3-4.5.4.4,0,0,1-.1-.5.6.6,0,0,1,.5-.5.5.5,0,0,1,.5.3h.1a8.6,8.6,0,0,0,5.4,3.7,8.5,8.5,0,0,0,9.8-5.1,7.2,7.2,0,0,0,.7-3.8,8.6,8.6,0,0,0-4.6-7.1,7.5,7.5,0,0,0-3.2-1,8.7,8.7,0,0,0-7.3,2.8c-.1.2-.4.4-.6.3a.6.6,0,0,1-.4-.9l.2-.2A9.8,9.8,0,0,1,20.8.3Z"></path>
          <path class="cls-1" d="M23.4,10.8h0V13a.3.3,0,0,0,.3.3h.1c.2,0,.2.1.2.3H19.4a.6.6,0,0,1-.5-.5v-.3h-.1a2.2,2.2,0,0,1-1.4.8h-.9a1.7,1.7,0,0,1-1.3-1.3V10.3a4.3,4.3,0,0,1-.1-.5c0-.2-.2-.3-.4-.4h-.2c-.1,0-.1-.1,0-.2h.1l1.8-.9h.2c.2-.1.3,0,.3.2v3.3a2,2,0,0,0,.1.7v.3a.8.8,0,0,0,1.1.2,1.4,1.4,0,0,0,.5-1,19.2,19.2,0,0,0,0-2.4V9.2a.8.8,0,0,0-.4-.4h-.1L20,7.6h.2c.1,0,.3.1.3.2v5.2a.5.5,0,0,0,.6.4c.3,0,.5-.1.5-.4V5.2a.7.7,0,0,0-.4-.5H21c-.1,0-.1-.1,0-.2h.1l1.8-.9h.2c.2,0,.2,0,.3.2v6.7h.1l1.6-1.2V8.8c.1-.1.1-.2-.1-.3h-.2c-.2,0-.2,0-.2-.2s0-.1.2-.1h2.2c.2,0,.3,0,.2.2h-.4l-.6.2-.5.3-1.1,1c-.1,0-.1,0,0,.1l2.1,2.6.4.4h.6c.1,0,.2.1.2.3H24.9c-.2,0-.2-.1-.2-.2s0-.2.1-.2H25c.1,0,.1-.1.1-.2H25l-1.5-2.2Z"></path>
          <path class="cls-1" d="M9.8,13.8A2.7,2.7,0,0,1,7,11.3a2.7,2.7,0,0,1,.3-1.5A2.5,2.5,0,0,1,9.5,8.2a2.8,2.8,0,0,1,2.4.9,4.4,4.4,0,0,1,.6,1.6,3.3,3.3,0,0,1-.4,1.7A2.5,2.5,0,0,1,9.8,13.8ZM11.7,11v-.2A1.9,1.9,0,0,0,9.9,8.9,1.9,1.9,0,0,0,8,10a2.4,2.4,0,0,0-.2,1.4A2,2,0,0,0,11,12.6,1.9,1.9,0,0,0,11.7,11Z"></path>
          <path class="cls-1" d="M6.8,12.8v.6h0a4,4,0,0,1-2.4.2,2.7,2.7,0,0,1-1.7-2,3.1,3.1,0,0,1,.2-1.9A2.4,2.4,0,0,1,5.5,8.2l1.1.2h.1v.7H6.5a1.7,1.7,0,0,0-1-.3,1.7,1.7,0,0,0-2,1.6,2.9,2.9,0,0,0,0,1.3,1.9,1.9,0,0,0,1.6,1.3,3.7,3.7,0,0,0,1.5-.3Z"></path>
          <path class="cls-1" d="M1.2,13.7a1.1,1.1,0,0,1-.9-.9,1,1,0,0,1,1-.9.9.9,0,0,1,.8.9A.9.9,0,0,1,1.2,13.7Z"></path>
          <path class="cls-1" d="M14.6,12.8a.8.8,0,0,1-.8.9.9.9,0,1,1,0-1.8A.9.9,0,0,1,14.6,12.8Z"></path>
        </svg>
        <span class="price"><span class="p-xs d-block text-muted">&#x202A;£0.99&#x202C;</span></span>
      </a>

      <a id="id-91d7e197-c061-4747-81c1-97a5a3427588" href="https://www.godaddy.com/en-uk/tlds/llc-domain" class="bug-bar-item fos">
        <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="30" height="20" viewBox="0 0 261.000000 210.000000" preserveAspectRatio="xMidYMid meet">
          <g transform="translate(0.000000,210.000000) scale(0.100000,-0.100000)" fill="#5d5b5b" stroke="none">
            <path d="M1051 2003 c-64 -8 -114 -66 -126 -147 -11 -72 -1 -96 39 -96 59 0
66 7 66 62 0 92 -13 88 259 88 271 0 265 2 267 -81 2 -60 8 -69 44 -69 51 0
60 8 60 57 0 103 -44 169 -122 184 -43 8 -422 10 -487 2z"></path>
            <path d="M468 1809 c-10 -5 -18 -19 -18 -29 0 -19 8 -20 109 -20 61 0 112 4
116 10 3 5 -3 18 -15 30 -17 17 -33 20 -97 20 -43 0 -86 -5 -95 -11z"></path>
            <path d="M1925 1804 c-30 -31 -12 -39 91 -42 112 -2 132 4 115 37 -11 19 -20
21 -101 21 -68 0 -92 -4 -105 -16z"></path>
            <path d="M115 1633 l-35 -36 0 -710 c0 -697 0 -710 20 -743 18 -28 28 -33 73 -39 29 -3 550 -5 1159 -3 l1107 3 23 23 23 23 0 734 0 735 -30 25 -30 24 -1137 1 -1137 0 -36 -37z m2051 -420 c81 -55 84 -63 42 -104 -75 -73 -71 -72 -109 -53 -19 10 -42 21 -51 26 -25 11 -126 10 -133 -2 -3 -5 -14 -10 -24 -10
              -10 0 -34 -15 -55 -32 -35 -31 -40 -43 -63 -136 -12 -49 34 -160 81 -195 69 -53 198 -53 247 -1 12 13 25 24 29 24 15 0 110 -102 110 -118 0 -22 -75 -71 -139 -91 -91 -28 -266 -12 -346 31 -40 22 -120 116 -138 163 -24 63 -37 123 -37 171 1 59 27 155 49 177 6 6 11 15 11 19 0 4 8 16 18 27 85 91 106 111 114
              111 6 0 24 6 41 14 48 22 72 25 189 22 106 -4 108 -4 164 -43z m-1398 -250 l2 -282 133 -3 132 -3 3 -72 3 -72 -214 -3 c-118 -2 -221 -2 -230 0 -15 3 -17 36 -17 356 0 194 3 356 7 360 4 4 46 5 93 4 l85 -3 3 -282z m529 275 c4 -7 8 -134 8 -283 l0 -270 135 -5 135 -5 3 -73 c2 -54 0 -72 -10 -72 -148 -3 -431 1
              -438 5 -11 7 -14 672 -4 699 5 13 22 16 84 16 52 0 81 -4 87 -12z m-823 -562 c33 -44 35 -97 4 -128 -34 -34 -126 -33 -162 1 -39 36 -35 79 11 124 30 31 43 37 78 37 37 0 46 -5 69 -34z"></path>
          </g>
        </svg>
        <span class="price"><span class="p-xs d-block text-muted"> £41.33 </span></span>
      </a>

      <a id="id-4d3a2df8-7da6-4c04-86b9-f55dbd43f2ae" href="tlds/tv-domain" class="bug-bar-item fos">
        <!--?xml version="1.0" encoding="UTF-8" standalone="no" ?-->
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="40" height="20" viewBox="0 0 40 20" xml:space="preserve">
          <desc>Created with Fabric.js 4.6.0</desc>
          <defs>
          </defs>
          <g transform="matrix(0.1 0 0 0.1 20 10)" id="PJd1XvaSCYpWTCl1t3w20">
            <image style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAASYAAACHCAYAAAC78/QlAAAEIUlEQVR4nO3dXXLaMBSAUSXD/tj/atJJG6aUYrBs/VxJ5zz1oSUJlj+uXEw+UmXX6/Wr9teAA6qv/UKWPH8+A3wPwHOrvqh/CBMQye9JVpggpqUvgQgTxLPsFu72B2GCWJaPUhImCEWUfggTEI4wQQympTvCBP2J0gNhgr5E6QlhAlp7ezuQMEE/7iPdIEzQhy3cC8IE7YnSG8IEtJD1MTPCBG25rrSDMEE7tnA7CRO0IUoZhAmo5fDHFwsT1Oe6UiZhgrps4Q4QJqhHlA4SJqCkIr8WS5igDteVThAmKM8W7iRhgrJEqQBhgnJEqRBhAsIRJijDtFSQMMF5olSYMME5olSBMAG5qkYpCROc4k2UlQgTHGMLV5EwQT5RqkyYgD2aRSkJE2RzXakBYYL9bOEaESbYR5QaEiZgS5coJWGCXVxXakyY4DVbuA6ECbaJUifCBM+JUkfCBIQjTPA/01JnwgT/EqUALqv9wJlmWKS1nv8ZT2BRCsLEBGsLOTgIE/zhTZSBCBPYwoUjTKxOlAISJlhP+P+QEiZW5rpSUMLEqmzhAhMmWMcw7ykUJljDUG90FiYgHGGC+Q13W5gwwdyGvFdVmGBew95AL0xAOMIEcxr544aECSY0dJSSMMF0ho9SEiaYyhRRSsIERCRMMIdppqUkTDCFqaKUhAmGN12UkjABEQkTjGvKaSkJEwxr2iglYYIhTR2lJExARMIEY5l+WkrCBENZIkpJmGAYy0QpCRMQkTBBfEtNS0mYILzlopSECUJbMkpJmICIhAliWnZaSsIEIS0dpW+X6/Va8vG+Mv7u8k8+PLH8efHtUuAxcmL06t85IKzOOfDjTJiOBund4zk4sLgjYSodpK3HFyhWYr3fybn4/dUgSo9fD1YgSg/2hqlXJFrHEFoTpSf2hClCGMQJFvIuTJGCIE7MxrS04VWYIoZAnJiFKL2wFabIARAnRidKbzwLkxMf6GrUe+XEk1GZlnZ4DNNIJ7w4MRpR2smnC0AbopThPkwjTiCmJpiQiQnqMy1luoXJ5AF1iNIBM0xMokpUonSQrRzUIUonCBMQzqetEBRnWjrJxARliVIBs4TJ1EcEolSIiQkIR5igDNNSQcIE54lSYcIE54hSBcIEhDNLmLxq0YN1V8mnJxcOcd5UZCsH+USpMmECwhEmyGNaauAWppGfbAuFVqy1RkxMsI8oNXQfphGfeIuFFqyzxkxMQDiPYRrplcGrGC1YZx2YmGCbKHXyLEwjHAwLhtqssY62JqbIB8WCgcm92spFDIAo0YJ11tlI15gsFlqwzgJ4F6aPIAfKYqEF6yyIvRNTzwNmscBicrZyPQIhSrRirQVyyfxWbgev9u9xs0hoyXoLJjdMN7UCZYHQmjUX0NEw3dwf1KORsjCAv1JKvwDv5lMxEv6d2AAAAABJRU5ErkJggg==" x="-147" y="-67.5" width="294" height="135"></image>
          </g>
        </svg>
        <span class="price"><span class="p-xs d-block text-muted">&#x202A;£24.61&#x202C;</span></span>
      </a>

      <a id="id-fb889c3c-05f3-4f29-b506-1abcf032f6c1" href="tlds/com-domain" class="bug-bar-item fos">
        <svg xmlns="http://www.w3.org/2000/svg" width="41.8692" height="20" viewBox="0 0 41.8692 20">
          <defs>
            <style>
              .a {
                fill: #767676;
              }
            </style>
          </defs>
          <title>img-logo-tld-bar-gray_com</title>
          <path class="a" d="M16.0737,11.1316A5.0346,5.0346,0,0,1,6.1414,9.9833,4.9206,4.9206,0,0,1,11.0905,5,4.9607,4.9607,0,0,1,16.057,8.9358H13.2188A2.1,2.1,0,0,0,11.192,7.6181,2.0136,2.0136,0,0,0,9.57,8.277,2.58,2.58,0,0,0,8.9625,10a2.2158,2.2158,0,0,0,2.23,2.3817,2.1533,2.1533,0,0,0,2.0268-1.25Z"></path>
          <path class="a" d="M16.6336,9.9833a4.8925,4.8925,0,0,1,5.0507-4.9661A4.8964,4.8964,0,0,1,26.7349,10a4.8965,4.8965,0,0,1-5.0506,4.9826A4.8962,4.8962,0,0,1,16.6336,10Zm2.8039.0337A2.2492,2.2492,0,1,0,23.9307,10a2.25,2.25,0,1,0-4.4932,0Z"></path>
          <path class="a" d="M27.4775,5.321h2.6183v.9967a2.2123,2.2123,0,0,1,.5741-.6588A3.113,3.113,0,0,1,32.7139,5a2.8621,2.8621,0,0,1,2.1455.8955,3.1608,3.1608,0,0,1,.5574.7768,3.8352,3.8352,0,0,1,.6755-.8105A3.3236,3.3236,0,0,1,38.39,5a3.398,3.398,0,0,1,2.4665.9458c.8783.9293,1.0131,1.5537,1.0131,3.6318v5.1183H39.0653V9.7129A3.3236,3.3236,0,0,0,38.88,8.3955a1.1833,1.1833,0,0,0-1.25-.76,1.3279,1.3279,0,0,0-1.3511.7767,2.68,2.68,0,0,0-.2031,1.1656v5.1183H33.2718V9.5945a3.2169,3.2169,0,0,0-.1689-1.1657A1.2116,1.2116,0,0,0,31.87,7.6353a1.3637,1.3637,0,0,0-1.3853.8277,3.0792,3.0792,0,0,0-.2026,1.25v4.983H27.4775Z"></path>
          <path class="a" d="M4.2938,10.0628A2.1469,2.1469,0,1,1,2.147,7.9154,2.147,2.147,0,0,1,4.2938,10.0628Z"></path>
        </svg>
        <span class="price"><span class="p-xs d-block text-muted">&#x202A;£1.00&#x202C;</span></span>
      </a>
    </div>
  </div>

  <script>
    /*var initializeEvents = function(n, t, i, r) {
      n.addEventListener("mousedown", function(u) {
        t = !0;
        n.classList.add("active");
        i = u.pageX - n.offsetLeft;
        r = n.scrollLeft
      });
      n.addEventListener("mouseleave", function() {
        t = !1;
        n.classList.remove("active")
      });
      n.addEventListener("mouseup", function() {
        t = !1;
        n.classList.remove("active")
      });
      n.addEventListener("mousemove", function(u) {
        var f = u.pageX - n.offsetLeft,
          e = f - i;
        t && (u.preventDefault(), n.scrollLeft = r - e)
      })
    };
    document.addEventListener("DOMContentLoaded", function() {
      for (var t = document.querySelectorAll(".flex-container"), n = 0; n < t.length; n++) initializeEvents(t[n], !1, null, null)
    })*/
  </script>
</section>
<!--SLider sec start-->
<section class="slider-area">
  <div class="bg-overlay"></div>
  <div class="container position-relative">
    <div class="inner-bg-overlay"></div>
    <div class="row">
      <div class="slider-detail col-12 col-lg-6 text-center text-lg-left wow fadeInLeft" data-wow-delay=".8s">
        <div class="slider-slide">
          <div class="slider-inner-content">
            <h4 class="slide-heading">CREATIVE <span>DIGITAL AGENCY</span></h4>
            <p class="slide-text">Lorem ipsum is simply dummy text of the printing and typesetting. Lorem Ipsum has been the industry’s standard dummy. Lorem Ipsum has been the industry’s standard dummy.</p>
            <a href="#about-sec" class="btn anim-btn rounded-pill scroll">LEARN MORE
              <span></span>
              <span></span>
              <span></span>
              <span></span>
            </a>
          </div>
        </div>
        <div class="slider-slide">
          <div class="slider-inner-content">
            <h4 class="slide-heading">MODREN <span>CREATIVE STUDIO</span></h4>
            <p class="slide-text">Lorem Ipsum has been the industry’s standard dummy. Lorem ipsum is simply dummy text of the printing and typesetting. Lorem Ipsum has been the industry’s standard dummy.</p>
            <a href="#about-sec" class="btn anim-btn rounded-pill scroll">LEARN MORE
              <span></span><span></span><span></span><span></span>
            </a>
          </div>
        </div>
        <div class="slider-slide">
          <div class="slider-inner-content">
            <h4 class="slide-heading">STARTUP <span>MODERN WORKS</span></h4>
            <p class="slide-text">Lorem Ipsum has been the industry’s standard dummy. Lorem Ipsum has been the industry’s standard dummy. Lorem ipsum is simply dummy text of the printing and typesetting.</p>
            <a href="#about-sec" class="btn anim-btn rounded-pill scroll">LEARN MORE
              <span></span><span></span><span></span><span></span>
            </a>
          </div>
        </div>
      </div>
      <div class="slider-img col-12 col-lg-6 wow fadeInRight" data-wow-delay=".8s" data-depth="0.1">
        <div class="img-slide">
          <img src="assets/img/slide2.jpg">
        </div>
        <div class="img-slide">
          <img src="assets/img/slide1.jpg">
        </div>
        <div class="img-slide">
          <img src="assets/img/slide3.jpg">
        </div>
      </div>
    </div>
  </div>
</section>
<!--SLider sec End-->
<!--section-- class="bg-color--concrete" id="banner">
  <div class="owl-carousel banner--slider" data-carousel-autoplay="true" data-carousel-nav="false" data-carousel-dots="true" data-carousel-dots-container="#bannerSliderNav">
    <div class="banner--item">
      <div class="container">
        <div class="row">
          <div class="col-md-5 banner--img d-none d-sm-block">
            <img class="svg custom-element-right" src="assets/patterns/rack.svg" alt="Hosting Package">
          </div>
          <div class="col-md-7 banner--content">
            <h1 class="mergecolor" data-aos="fade-up" data-aos-duration="800">Hosting <br>Package</h1>
            <p class="text-break seccolor" data-aos="fade-up" data-aos-duration="1200">By trusting us with your business needs, we promise you a 99.9% uptime on any
              services we provide, outside of any standard maintenance we may provide</p>
            <a href="hosting.php" class="btn btn-default-yellow-fill me-2">Order Now <i class="fas fa-cart-plus ps-1 f-15"></i></a>
            <a href="hosting.php" class="btn btn-default-pink-fill">Learn more</a>
          </div>
        </div>
      </div>
    </div>
    <div class="banner--item">
      <div class="container">
        <div class="row">
          <div class="col-md-5 banner--img d-none d-sm-block">
            <img alt="" data-rjs="2" src="assets/img/banner-img/slider-img-02.png" />
          </div>
          <div class="col-md-7 banner--content">
            <h2 class="h1">Build your Dream Website with CloudPhire</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
            <a href="#" class="btn btn-default">Learn More<i class="fa flm fa-long-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="banner--item">
      <div class="container">
        <div class="row">
          <div class="col-md-7 banner--content">
            <h2 class="h1">Build Your Dream Website With SSDCloud</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
            <a href="#" class="btn btn-default">Learn More<i class="fa flm fa-long-arrow-right"></i></a>
          </div>
          <div class="col-md-5 banner--img">
            <img alt="" data-rjs="2" src="assets/img/banner-img/slider-img-03.png" />
          </div>
        </div>
      </div>
    </div>
    <div class="banner--item">
      <div class="container">
        <div class="row">
          <div class="col-md-5 banner--img">
            <img alt="" data-rjs="2" src="assets/img/banner-img/slider-img-04.png" />
          </div>
          <div class="col-md-7 banner--content">
            <h2 class="h1">Build Your Dream Website With SSDCloud</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
            <a href="#" class="btn btn-default">Learn More<i class="fa flm fa-long-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="d-none d-sm-block banner--slider-nav">
    <ul class="nav" id="bannerSliderNav">
      <li class="active">
        <div class="icon"><i class="fa fa-server"></i></div>
        <div class="bg-color--theme content">
          <h3 class="h3">Shared Hosting</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod temporali
          </p>
          <a href="#">View More<i class="fa flm fa-long-arrow-right"></i></a>
        </div>
      </li>
      <li>
        <div class="icon"><i class="fa fa-database"></i></div>
        <div class="bg-color--theme content">
          <h3 class="h3">WordPress Hosting</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod temporali
          </p>
          <a href="#">View More<i class="fa flm fa-long-arrow-right"></i></a>
        </div>
      </li>
      <li>
        <div class="icon"><i class="fa fa-mixcloud"></i></div>
        <div class="bg-color--theme content">
          <h3 class="h3">Cloud Hosting</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod temporali
          </p>
          <a href="#">View More<i class="fa flm fa-long-arrow-right"></i></a>
        </div>
      </li>
      <li>
        <div class="icon"><i class="fa fa-lock"></i></div>
        <div class="bg-color--theme content">
          <h3 class="h3">SSL Certificate</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod temporali
          </p>
          <a href="#">View More<i class="fa flm fa-long-arrow-right"></i></a>
        </div>
      </li>
    </ul>
  </div>
</!--section-->

<!-- ***** SLIDER ***** -->
<!--section-- class="main-container slider">
  <div class="silder-container">
    <div class="carousel header-main-slider">
      <!-- 1 Slider -- >
      <div class="carousel-cell overlay">
        <div class="slider-content">
          <div class="container">
            <img class="svg custom-element-right" src="assets/patterns/domainmanage.svg" alt="Domains">
            <div class="col-sm-12 col-md-6 px-0">
              <h1 data-aos="fade-up" data-aos-duration="800">Find your new domain name</h1>
              <p data-aos="fade-up" data-aos-duration="1200">Enter the domain and tld you wish to use in the boxes below and click Lookup to see whether the domain is available for purchase.</p>
              <form class="domains-search" action="http://inebur.com/whmcs/domainchecker.php?carttpl=antler&systpl=antler" method="post">
                <input type="text" class="inputdomainsearch special-input" name="domain" placeholder="eg.example.com" autocapitalize="none">
                <span class="ds-content">
                  <input type="submit" class="btn btn-default-yellow-fill border-end-0 search initial-transform" value="Search">
                  <button data-bs-toggle="tooltip" data-bs-placement="bottom" title="Transfer" type="submit" name="transfer" class="btn btn-default-fill border-start-0 initial-transform" value="{$LANG.domainstransfer}"><i class="fa-solid fa-repeat"></i></button>
                </span>
              </form>
              <div class="special-note"><span class="text">Search a domain of your choise from <b>$6.00/yr</b></span></div>
            </div>
          </div>
        </div>
        <div class="slider-video">
          <div class="cover-wrapper">
            <video class="cover-video" autoplay="" loop="" muted="">
              <source src="assets/videos/planet.mp4" type="video/mp4">
            </video>
          </div>
        </div>
      </div>
      <!-- 2 Slider -- >
      <div class="carousel-cell overlay">
        <div class="slider-content">
          <div class="container ">
            <img class="svg custom-element-right" src="assets/patterns/api.svg" alt="Dedicated Server">
            <div class="col-sm-12 col-md-6 px-0">
              <h1 data-aos="fade-up" data-aos-duration="800">Dedicated <br>Server with <br> <span id="typed1"></span></h1>
              <p class="text-break" data-aos="fade-up" data-aos-duration="1200">If you want to use custom nameservers then enter them below. By default, new domains will use our nameservers for hosting on our network</p>
              <a href="dedicated.php" class="btn btn-default-yellow-fill me-2">Order Now <i class="fas fa-cart-plus ps-1 f-15"></i></a>
              <a href="dedicated.php" class="btn btn-default-pink-fill">Learn more</a>
            </div>
          </div>
        </div>
        <div class="carousel full-slider">
          <img src="assets/img/topbanner01.jpg" alt="Domains">
        </div>
      </div>
      <!-- 3 Slider -- >
      <div class="carousel-cell sec-bg6 bg-colorstyle">
        <div class="slider-content">
          <div class="container ">
            <img class="svg custom-element-right" src="assets/patterns/rack.svg" alt="Hosting Package">
            <div class="col-sm-12 col-md-6 px-0">
              <h1 class="mergecolor" data-aos="fade-up" data-aos-duration="800">Hosting <br>Package</h1>
              <p class="text-break seccolor" data-aos="fade-up" data-aos-duration="1200">By trusting us with your business needs, we promise you a 99.9% uptime on any services we provide, outside of any standard maintenance we may provide</p>
              <a href="hosting.php" class="btn btn-default-yellow-fill me-2">Order Now <i class="fas fa-cart-plus ps-1 f-15"></i></a>
              <a href="hosting.php" class="btn btn-default-pink-fill">Learn more</a>
            </div>
          </div>
        </div>
      </div>
      <!-- 4 Slider -- >
      <div class="carousel-cell sec-bg6 bg-colorstyle">
        <div class="slider-content">
          <div class="container">
            <img class="svg custom-element-right" src="assets/patterns/monitoring.svg" alt="Support Requests">
            <div class="col-sm-12 col-md-6 px-0">
              <h1 class="mergecolor" data-aos="fade-up" data-aos-duration="800">Support Requests</h1>
              <p class="text-break seccolor" data-aos="fade-up" data-aos-duration="1200">Our dedication to customer support reaches across the globe as well. We are here to help you with your hosting in any way possible, and you can reach us via phone, email, or live chat.</p>
              <a href="contact.php" class="btn btn-default-yellow-fill me-2">Contact Us <i class="fa-solid fa-headset"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</!--section-->

<!-- ***** PRICING TABLES - CAROUSEL ***** -->
<section class="slick sec-normal sec-bg31 bg-colorstyle1">
  <div class="container">
    <h2 class="section-heading text-white1 mergecolor">Popular Hosting Products</h2>
  </div>
  <div id="slider">
    <div class="plan-container">
      <div class="wrapper noshadow">
        <div class="top-content bg-seccolorstyle">
          <div class="plans badge feat bg-pink">Hosting</div>
          <div class="pricing-heading">
            <img class="svg mb-3" src="assets/fonts/svg/linuxserver.svg" alt="Shared hosting from £2.49">
            <h3 class="title">Shared Hosting</h3>
          </div>
          <div class="fromer seccolor">Starting at</div>
          <div class="price mergecolor"><sup>£</sup>19.99 <span class="period">/mo</span></div>
          <a href="" class="btn btn-default-yellow-fill">All Plans</a>
        </div>
        <ul class="list-info bg-pink">
          <li><i class="icon-cpu"></i> <span class="c-purple">CPU</span><br> <span>2 Cores</span></li>
          <li><i class="icon-ram"></i> <span class="c-purple">RAM</span><br> <span>2Gb Memory</span></li>
          <li><i class="icon-drives"></i> <span class="c-purple">DISK</span><br> <span>Unlimited Space</span></li>
          <li><i class="icon-speed"></i> <span class="c-purple">DATA</span><br> <span>Unlimited Bandwidth</span></li>
        </ul>
      </div>
    </div>
    <div class="plan-container">
      <div class="wrapper bg-seccolorstyle noshadow">
        <div class="top-content bg-seccolorstyle">
          <div class="pricing-heading">
            <img class="svg mb-3" src="assets/fonts/svg/dedicated.svg" alt="">
            <h3 class="title">Dedicated Server</h3>
          </div>
          <div class="fromer seccolor">windows</div>
          <div class="price mergecolor"><sup>$</sup>185.00 <span class="period">/mo</span></div>
          <a href="" class="btn btn-default-yellow-fill">Configure</a>
        </div>
        <ul class="list-info bg-purple">
          <li><i class="icon-cpu"></i> <span class="c-pink">CPU</span><br> <span>4x 3.20Ghz 2 Cores</span></li>
          <li><i class="icon-ram"></i> <span class="c-pink">RAM</span><br> <span>16GB (up to 32GB)</span></li>
          <li><i class="icon-drivessd"></i> <span class="c-pink">DRIVES</span><br> <span>2 x 1TB SATA 3.5</span></li>
          <li><i class="icon-git"></i> <span class="c-pink">UPLINK</span><br> <span>1Gbps - 20TB</span></li>
        </ul>
      </div>
    </div>
    <div class="plan-container">
      <div class="wrapper bg-seccolorstyle noshadow">
        <div class="top-content bg-seccolorstyle">
          <div class="pricing-heading">
            <img class="svg mb-3" src="assets/fonts/svg/cloudfiber.svg" alt="">
            <h3 class="title">Cloud Hosting</h3>
          </div>
          <div class="fromer seccolor">Starting from</div>
          <div class="price mergecolor"><sup>$</sup>24.99 <span class="period">/mo</span></div>
          <a href="" class="btn btn-default-yellow-fill">Order now</a>
        </div>
        <ul class="list-info bg-pink">
          <li><i class="icon-drives"></i> <span class="c-purple">DISK</span><br> <span>250GB SSD</span></li>
          <li><i class="icon-speed"></i> <span class="c-purple">DATA</span><br> <span>1TB Bandwidth</span></li>
          <li><i class="icon-emailopen"></i> <span class="c-purple">EMAIL</span><br> <span>120 Emails</span></li>
          <li><i class="icon-domains"></i> <span class="c-purple">TLD</span><br> <span>30 Domains</span></li>
        </ul>
      </div>
    </div>
    <div class="plan-container">
      <div class="wrapper bg-seccolorstyle noshadow">
        <div class="top-content bg-seccolorstyle">
          <div class="pricing-heading">
            <img class="svg mb-3" src="assets/fonts/svg/security.svg" height="65" alt="">
            <h3 class="title">SSL Certificate</h3>
          </div>
          <div class="fromer seccolor">Starting from</div>
          <div class="price mergecolor"><sup>$</sup>36.90 <span class="period">/mo</span></div>
          <a href="" class="btn btn-default-yellow-fill">Order now</a>
        </div>
        <ul class="list-info bg-purple">
          <li><i class="icon-drives"></i> <span class="c-pink">DISK</span><br> <span>250GB SSD</span></li>
          <li><i class="icon-speed"></i> <span class="c-pink">DATA</span><br> <span>1TB Bandwidth</span></li>
          <li><i class="icon-emailopen"></i> <span class="c-pink">EMAIL</span><br> <span>120 Emails</span></li>
          <li><i class="icon-domains"></i> <span class="c-pink">TLD</span><br> <span>30 Domains</span></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Start Experience Area -->
<section class="experience-area pt-10">
  <div class="container">
    <div class="experience-wrap">
      <div class="row align-items-center">
        <div class="col-lg-8">
          <div class="section-title">
            <span>Experience</span>
            <h2>We're Ready To Share Our Advice And Experience</h2>
          </div>
        </div>

        <div class="col-lg-4">
          <a href="#" class="default-btn active">
            Know more
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-sm-6 p-0">
          <div class="single-experience">
            <i class="flaticon-share"></i>
            <h3>Network Connector For Business</h3>
            <a href="#" class="read-more">
              Learn More
            </a>
            <span class="flaticon-share"></span>
          </div>
        </div>

        <div class="col-lg-3 col-sm-6 p-0">
          <div class="single-experience">
            <i class="flaticon-progress"></i>
            <h3>Business Growth Management</h3>
            <a href="#" class="read-more">
              Learn More
            </a>
            <span class="flaticon-progress"></span>
          </div>
        </div>

        <div class="col-lg-3 col-sm-6 p-0">
          <div class="single-experience">
            <i class="flaticon-energy"></i>
            <h3>The Energy-Saving Strategy</h3>
            <a href="#" class="read-more">
              Learn More
            </a>
            <span class="flaticon-energy"></span>
          </div>
        </div>

        <div class="col-lg-3 col-sm-6 p-0">
          <div class="single-experience">
            <i class="flaticon-market"></i>
            <h3>Capital Management Support</h3>
            <a href="#" class="read-more">
              Learn More
            </a>
            <span class="flaticon-market"></span>
          </div>
        </div>

        <div class="col-lg-3 col-sm-6 p-0">
          <div class="single-experience">
            <i class="flaticon-portfolio"></i>
            <h3>Tax Support Team Consulting</h3>
            <a href="#" class="read-more">
              Learn More
            </a>
            <span class="flaticon-portfolio"></span>
          </div>
        </div>

        <div class="col-lg-3 col-sm-6 p-0">
          <div class="single-experience">
            <i class="flaticon-umbrella"></i>
            <h3>Insurance Consulting Support</h3>
            <a href="#" class="read-more">
              Learn More
            </a>
            <span class="flaticon-umbrella"></span>
          </div>
        </div>

        <div class="col-lg-3 col-sm-6 p-0">
          <div class="single-experience">
            <i class="flaticon-goal"></i>
            <h3>Target Fulfillment Strategy</h3>
            <a href="#" class="read-more">
              Learn More
            </a>
            <span class="flaticon-goal"></span>
          </div>
        </div>

        <div class="col-lg-3 col-sm-6 p-0">
          <div class="single-experience">
            <i class="flaticon-worker"></i>
            <h3>Brand Management Support</h3>
            <a href="#" class="read-more">
              Learn More
            </a>
            <span class="flaticon-worker"></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Experience Area -->

<!-- ***** LOAD BALANCING ***** -->
<section class="balancing sec-normal bg-colorstyle">
  <div class="h-services">
    <div class="container">
      <!--div class="randomline">
        <div class="bigline"></div>
        <div class="smallline"></div>
      </!--div>
      <div-- class="row">
        <div class="col-md-12 text-center">
          <h2 class="section-heading whitecolor mergecolor">Cloud Load Balancing</h2>
          <p class="section-subheading whitecolor mergecolor">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
        </div>
        <div class="col-md-12">
          <div class="wrap-service load">
            <div class="wow animated fadeInUp fast">
              <img class="svg mt-50 w-100 ltr-img d-block" src="assets/patterns/balancing.svg" alt="Load Balancing">
              <img class="svg mt-50 w-100 rtl-img d-none" src="assets/patterns/balancing-rtl.svg" alt="Load Balancing">
            </div>
            <div class="row text-info text-center">
              <div class="col-md-4 pb-2 pt-5"><b class="c-purple">[1] Users</b> <br>
                <span class="info seccolor">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</span>
              </div>
              <div class="col-md-4 pb-2 pt-5"><b class="c-purple">[2] Load Balancing</b> <br>
                <span class="info seccolor">Eaque ipsa quae ab illo inventore veritatis et quasi. Eaque ipsa quae omnis iste</span>
              </div>
              <div class="col-md-4 pb-2 pt-5"><b class="c-purple">[3] Cloud Servers</b> <br>
                <span class="info seccolor">Omnis iste natus error sit voluptatem accusantium doloremque laudantium.</span>
              </div>
            </div>
          </div>
        </div>
      </div-->
    </div>
  </div>
</section>

<svg class="division-ontop bg-white d-none" viewbox="0 0 1440 150">
  <path fill="#fdd700" fill-opacity="1" d="M0,96L120,85.3C240,75,480,53,720,53.3C960,53,1200,75,1320,85.3L1440,96L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z">
  </path>
</svg>

<!-- ***** FEATURES ***** -->
<section class="services sec-normal sec-bg4">
  <div class="container">
    <div class="service-wrap">
      <div class="row">
        <div class="col-sm-12 text-center">
          <h2 class="section-heading">Why Choose Antler?</h2>
          <p class="section-subheading">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
        </div>
        <div class="col-md-12 col-lg-4 wow animated fadeInUp fast">
          <div class="service-section bg-colorstyle noshadow">
            <div class="plans badge feat bg-pink">Premium</div>
            <img class="svg" src="assets/fonts/svg/helpdesk.svg" alt="">
            <div class="title mergecolor">Support 24x7x365</div>
            <p class="subtitle seccolor">
              Excepteur sint occaecat cupidatat non proident voluptate
            </p>
            <a href="" class="btn btn-default-yellow-fill">Read more</a>
          </div>
        </div>
        <div class="col-md-12 col-lg-4 wow animated fadeInUp">
          <div class="service-section bg-colorstyle noshadow">
            <div class="plans badge feat bg-pink">Control Panel</div>
            <img class="svg" src="assets/fonts/svg/window.svg" alt="">
            <div class="title mergecolor">Free WHM &amp; cPanel</div>
            <p class="subtitle seccolor">
              Excepteur sint occaecat cupidatat non proident dolor
            </p>
            <a href="" class="btn btn-default-yellow-fill">Read more</a>
          </div>
        </div>
        <div class="col-md-12 col-lg-4 wow animated fadeInUp fast">
          <div class="service-section bg-colorstyle noshadow">
            <img class="svg" src="assets/fonts/svg/cloudmanaged.svg" alt="">
            <div class="title mergecolor">Perfomance Optimized</div>
            <p class="subtitle seccolor">
              Excepteur sint occaecat cupidatat non proident voluptate
            </p>
            <a href="" class="btn btn-default-yellow-fill">Read more</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ***** MAP ***** -->
<section class="services maping sec-normal sec-bg3 bg-colorstyle">
  <div class="container">
    <div class="service-wrap">
      <div class="row">
        <div class="col-sm-12 text-center">
          <h2 class="section-heading text-white mergecolor">Our Datacenters all across the world</h2>
          <p class="section-subheading text-muted mergecolor">We have pioneered the concept of a Globally distributed Datacenter. Our Datacenter is a globally distributed collection of redundant
            server infrastructure which hosts all our Products and Services.</p>
        </div>
        <div class="col-md-12 col-lg-7 pt-5 scrollme position-relative">
          <img src="assets/patterns/map.svg" class="lazyload w-10 animateme" alt="Load Balancing" data-when="view" data-from="1" data-to="0" data-opacity="0">
          <span class="datacenters montreal" data-bs-toggle="popover" data-bs-container="body" data-bs-trigger="hover" data-bs-placement="top" title="Montreal" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."></span>
          <span class="datacenters newyork" data-bs-toggle="popover" data-bs-container="body" data-bs-trigger="hover" data-bs-placement="top" title="New York" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."></span>
          <span class="datacenters london" data-bs-toggle="popover" data-bs-container="body" data-bs-trigger="hover" data-bs-placement="top" title="London" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."></span>
          <span class="datacenters moskow" data-bs-toggle="popover" data-bs-container="body" data-bs-trigger="hover" data-bs-placement="top" title="Moskow" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."></span>
          <span class="datacenters hongkong" data-bs-toggle="popover" data-bs-container="body" data-bs-trigger="hover" data-bs-placement="top" title="Hong Kong" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."></span>
          <span class="datacenters singapure" data-bs-toggle="popover" data-bs-container="body" data-bs-trigger="hover" data-bs-placement="top" title="Singapure" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."></span>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-1"></div>
        <div class="col-sm-12 col-md-12 col-lg-4 pt-5 text-start">
          <div class="mb-5 agpanel pt-3 ps-0">
            <h4 class="text-white mb-4 mergecolor"><b>Global Datacenters</b></h4>
            <p class="lh-32 text-muted seccolor">Our Datacenter consists of servers distributed across various Datacenters worldwide.
              Click the button below to learn more about what most of these datacentres have certain common...</p>
            <a href="#" class="btn btn-default-grad-purple-fill mt-3">Datacentre</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ***** CASE STUDY ***** -->
<section class="casestudy sec-bg2 bg-colorstyle">
  <div class="container">
    <div class="sec-main sec-up bg-purple mb-0 nomargin">
      <img class="lazyload ltr-img d-block" src="assets/img/casestudy.png" data-src="./assets/img/casestudy.png" alt="Case Study">
      <img class="lazyload rtl-img d-none" src="assets/img/casestudy-rtl.png" data-src="./assets/img/casestudy-rtl.png" alt="Case Study">
      <div class="plans badge feat bg-dark">case study</div>
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-9">
          <div class="slider-container slider-filter">
            <div class="slider-wrap">
              <div class="swiper-container main-slider" data-autoplay="4000" data-touch="1" data-mouse="0" data-slides-per-view="responsive" data-loop="1" data-speed="1200" data-mode="horizontal" data-xs-slides="1" data-sm-slides="1" data-md-slides="1" data-lg-slides="1">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <h3 class="author">Everth Group</h3>
                    <div class="content-info">
                      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totamer rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi.</p>
                      <div class="mb-3"> Michael Jones - Executive Director</div>
                      <a href="assets/casestudy/casestudy-everthgroup.pdf" class="btn btn-default-yellow-fill mb-2">Case Study Download</a>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <h3 class="author">Growtop Company</h3>
                    <div class="content-info">
                      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totamer rem aperiam, eaque ipsa quae ab illo inventore.</p>
                      <div class="mb-3"> Matt Radford - President &amp; Managing Director</div>
                      <a href="assets/casestudy/casestudy-growtop.pdf" class="btn btn-default-yellow-fill mb-2">Case Study Download</a>
                    </div>
                  </div>
                </div>
                <div class="pagination vertical-mode pagination-index"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ***** HELP ***** -->
<section class="services help sec-bg2 pt-4 pb-80 bg-colorstyle">
  <div class="container">
    <div class="service-wrap">
      <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-4">
          <div class="help-container bg-seccolorstyle noshadow">
            <a href="javascript:void(Tawk_API.toggle())" class="help-item">
              <div class="img">
                <img class="svg ico" src="assets/fonts/svg/livechat.svg" height="65" alt="">
              </div>
              <div class="inform">
                <div class="title mergecolor">Live Chat</div>
                <div class="description seccolor">Lorem Ipsum is simply dummy text printing.</div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4">
          <div class="help-container bg-seccolorstyle noshadow">
            <a href="contact.php" class="help-item">
              <div class="img">
                <img class="svg ico" src="assets/fonts/svg/emailopen.svg" height="65" alt="">
              </div>
              <div class="inform">
                <div class="title mergecolor">Send Ticket</div>
                <div class="description seccolor">Lorem Ipsum is simply dummy text printing.</div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4">
          <div class="help-container bg-seccolorstyle noshadow">
            <a href="knowledgebase-list.php" class="help-item">
              <div class="img">
                <img class="svg ico" src="assets/fonts/svg/book.svg" height="65" alt="">
              </div>
              <div class="inform">
                <div class="title mergecolor">Knowledge base</div>
                <div class="description seccolor">Lorem Ipsum is simply dummy text printing.</div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include_once('inc/_footer.php') ?>