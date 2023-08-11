@extends('layout')
@section('content')
<div class="home-hero__container">
        <div class="text">
          <h6 class="description">The Ultimate Luxury Experience</h6>
          <h3 class="title">The Perfect Base For You</h3>
          <div class="button-display">
          <button class="take-tour">Take a tour</button>
          <button class="learn-more">Lean more</button>
          </div>
        </div>
       <!-- <div class="submit-message-container">
                <h1></h1>
      
            </div> -->
       
        <form class="date-check" action="index.php" method="POST">
          <div class="container-input">
            <label for="">Arrival Date</label>
            <input type="date" name="arrival"/>
            <div class="input-error"> </div>
          </div>
          <div class="container-input">
            <label for="">Departure Date</label>
            <input type="date" name="departure"/>
            <div class="input-error"> </div>
          </div>
          <button type="submit" name="submit" class="btn-check">Check availability</button>
      </form>

      </div>
    </header>
    <main>
      <div class="about__container">
        <div class="text-container">
          <h6 class="text-section">About Us</h6>
          <h1 class="title">Discover Our Underground.</h1>
          <p class="text">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias,
            maxime at saepe quia velit possimus in! Ut nobis distinctio ex, autem
            assumenda quos sit placeat adipisci molestiae expedita rem qui,
            doloremque laboriosam. Obcaecati, enim reprehenderit odio recusandae
            illo magni voluptatibus, ipsam quas doloribus ut maiores!
          </p>
          <button>Book now</button>
        </div>
        <div class="container-team">
        <div class="team">
          <div class="img">
            <img src="/assets/team.jpg" alt="" />
          </div>
          <div class="description">
            <img src="/assets/people.png" alt="" />
            <h1>Strong Team</h1>
            <p>
              Lorem ipsum ipsum dolor sit amet consectetur adipisicing elit.
              Ipsum, sint?
            </p>
          </div>
        </div>
        <div class="luxury">
          <div class="img">
            <img src="/assets/room.jpg" alt="" />
          </div>
          <div class="luxury-description">
            <div class="img-black">
              <img src="/assets/calendar.png" alt="" />
              <h1>Luxury Room</h1>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Voluptates dicta debitis omnis.
              </p>
            </div>
          </div>
        </div>
        </div>
      </div>
      <div class="rooms__container">
        <h6 class="text-section">ROOMS</h6>
        <h1 class="title">Hand Picked Rooms</h1>
        <div class="slider-container">
          <div class="icons">
            <svg
              width="12"
              height="9"
              viewBox="0 0 12 9"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M3.27273 4.36364C3.59637 4.36364 3.91274 4.26767 4.18184 4.08786C4.45094 3.90805 4.66068 3.65249 4.78453 3.35348C4.90838 3.05448 4.94079 2.72546 4.87765 2.40803C4.81451 2.09061 4.65866 1.79904 4.42981 1.57019C4.20096 1.34134 3.90939 1.18549 3.59197 1.12235C3.27454 1.05921 2.94552 1.09162 2.64652 1.21547C2.34751 1.33932 2.09195 1.54906 1.91214 1.81816C1.73233 2.08726 1.63636 2.40363 1.63636 2.72727C1.63636 3.16126 1.80877 3.57748 2.11564 3.88436C2.42252 4.19124 2.83874 4.36364 3.27273 4.36364V4.36364ZM3.27273 2.18182C3.38061 2.18182 3.48607 2.21381 3.57577 2.27374C3.66547 2.33368 3.73538 2.41887 3.77666 2.51854C3.81795 2.61821 3.82875 2.72788 3.8077 2.83369C3.78665 2.93949 3.73471 3.03668 3.65842 3.11297C3.58214 3.18925 3.48495 3.2412 3.37914 3.26225C3.27333 3.28329 3.16366 3.27249 3.06399 3.23121C2.96432 3.18992 2.87913 3.12001 2.8192 3.03031C2.75926 2.94061 2.72727 2.83515 2.72727 2.72727C2.72727 2.58261 2.78474 2.44387 2.88703 2.34158C2.98933 2.23929 3.12806 2.18182 3.27273 2.18182ZM10.3636 1.09091H6C5.85534 1.09091 5.7166 1.14838 5.61431 1.25067C5.51201 1.35296 5.45455 1.4917 5.45455 1.63636V4.90909H1.09091V0.545455C1.09091 0.400791 1.03344 0.262053 0.931149 0.15976C0.828857 0.0574675 0.690118 0 0.545455 0C0.400791 0 0.262052 0.0574675 0.15976 0.15976C0.0574673 0.262053 0 0.400791 0 0.545455V7.63636C0 7.78103 0.0574673 7.91977 0.15976 8.02206C0.262052 8.12435 0.400791 8.18182 0.545455 8.18182C0.690118 8.18182 0.828857 8.12435 0.931149 8.02206C1.03344 7.91977 1.09091 7.78103 1.09091 7.63636V6H10.9091V7.63636C10.9091 7.78103 10.9666 7.91977 11.0689 8.02206C11.1711 8.12435 11.3099 8.18182 11.4545 8.18182C11.5992 8.18182 11.7379 8.12435 11.8402 8.02206C11.9425 7.91977 12 7.78103 12 7.63636V2.72727C12 2.29328 11.8276 1.87707 11.5207 1.57019C11.2138 1.26331 10.7976 1.09091 10.3636 1.09091ZM10.9091 4.90909H6.54545V2.18182H10.3636C10.5083 2.18182 10.647 2.23929 10.7493 2.34158C10.8516 2.44387 10.9091 2.58261 10.9091 2.72727V4.90909Z"
                fill="#222222"
              />
            </svg>

            <svg
              width="12"
              height="10"
              viewBox="0 0 12 10"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M5.95 6.32047C5.24315 6.32047 4.53629 6.61153 4.07892 7.15207C3.66312 7.65102 2.91469 6.98575 3.33048 6.48679C3.99576 5.73836 4.95209 5.32256 5.95 5.32256C6.94791 5.32256 7.90424 5.73836 8.56952 6.48679C8.98531 6.98575 8.23688 7.65102 7.82108 7.15207C7.36371 6.61153 6.65685 6.32047 5.95 6.32047ZM5.95 9.81316C5.40946 9.81316 4.95209 9.35579 4.95209 8.81525C4.95209 8.27472 5.40946 7.81734 5.95 7.81734C6.49053 7.81734 6.94791 8.27472 6.94791 8.81525C6.94791 9.35579 6.49053 9.81316 5.95 9.81316ZM5.95 3.8257C4.61945 3.8257 3.41364 4.28307 2.45731 5.2394C2.04151 5.6552 1.2515 5.03151 1.75046 4.53255C2.87311 3.4099 4.36997 2.82779 5.95 2.82779C7.53003 2.82779 9.02689 3.4099 10.1495 4.53255C10.6485 5.03151 9.85849 5.6552 9.44269 5.2394C8.48636 4.28307 7.28055 3.8257 5.95 3.8257ZM5.95 1.33092C4.03734 1.33092 2.24941 2.03777 0.877283 3.32674C0.378328 3.78412 -0.328526 3.07726 0.17043 2.61989C1.79204 1.12302 3.78786 0.333008 5.95 0.333008C8.11214 0.333008 10.108 1.12302 11.7296 2.61989C12.2285 3.07726 11.5217 3.78412 11.0227 3.32674C9.65059 2.03777 7.86266 1.33092 5.95 1.33092Z"
                fill="#222222"
              />
            </svg>

            <svg
              width="12"
              height="10"
              viewBox="0 0 12 10"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M1.75638 3.28816L1.93336 2.75725H1.63638C1.36851 2.75725 1.15154 2.54028 1.15154 2.2724C1.15154 2.00452 1.36851 1.78755 1.63638 1.78755C1.93335 1.78755 2.2565 1.78755 2.2565 1.78755C2.2565 1.78755 2.48778 1.09374 2.63105 0.664647C2.69699 0.466586 2.8822 0.333008 3.09093 0.333008C4.22232 0.333008 7.77772 0.333008 8.90911 0.333008C9.11784 0.333008 9.30305 0.466586 9.36899 0.664647L9.74354 1.78755H10.3637C10.6315 1.78755 10.8485 2.00452 10.8485 2.2724C10.8485 2.54028 10.6315 2.75725 10.3637 2.75725H10.0667L10.2437 3.28816C10.8703 3.4501 11.3334 4.01931 11.3334 4.69664V9.06028C11.3334 9.32816 11.1164 9.54513 10.8485 9.54513C10.5523 9.54513 10.1751 9.54513 9.87881 9.54513C9.61093 9.54513 9.39396 9.32816 9.39396 9.06028V8.57543H2.60608V9.06028C2.60608 9.32816 2.38911 9.54513 2.12123 9.54513C1.82499 9.54513 1.44778 9.54513 1.15154 9.54513C0.883657 9.54513 0.666687 9.32816 0.666687 9.06028C0.666687 8.1381 0.666687 6.09834 0.666687 4.69664C0.666687 4.01931 1.12972 3.4501 1.75638 3.28816ZM2.60608 5.18149C2.87396 5.18149 3.09093 5.39846 3.09093 5.66634C3.09093 5.93422 2.87396 6.15119 2.60608 6.15119C2.18305 6.15119 1.63638 6.15119 1.63638 6.15119V7.60574H3.27614C3.27614 7.60574 3.84584 6.46658 4.11178 5.93446C4.19396 5.7701 4.36172 5.66634 4.54547 5.66634C5.20826 5.66634 6.79178 5.66634 7.45457 5.66634C7.63832 5.66634 7.80608 5.7701 7.88826 5.93446C8.1542 6.46658 8.7239 7.60574 8.7239 7.60574H10.3637V6.15119H9.39396C9.12608 6.15119 8.90911 5.93422 8.90911 5.66634C8.90911 5.39846 9.12608 5.18149 9.39396 5.18149C9.81699 5.18149 10.3637 5.18149 10.3637 5.18149V4.69664C10.3637 4.42877 10.1467 4.2118 9.87881 4.2118C8.35105 4.2118 3.64899 4.2118 2.12123 4.2118C1.85335 4.2118 1.63638 4.42877 1.63638 4.69664V5.18149H2.60608ZM7.15493 6.63604H4.84511L4.36026 7.60574H7.63978L7.15493 6.63604ZM3.44051 1.3027L2.79396 3.2421H9.20608L8.55954 1.3027H3.44051Z"
                fill="#222222"
              />
            </svg>
            <svg
              width="12"
              height="12"
              viewBox="0 0 12 12"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M10.832 8.36893L9.40798 7.55243L10.6456 7.00868C10.818 6.93293 10.8974 6.73118 10.8219 6.55818C10.7479 6.39081 10.54 6.30868 10.3712 6.38243L8.67048 7.12956L6.68736 5.99231L8.66098 4.85306L10.381 5.60206C10.5556 5.67731 10.7577 5.59118 10.8299 5.42456C10.9047 5.25156 10.8252 5.05006 10.6529 4.97531L9.39661 4.42831L10.8279 3.60206C10.9069 3.55643 10.9634 3.48268 10.9869 3.39443C11.0104 3.30618 10.9982 3.21418 10.9525 3.13518C10.8615 2.97868 10.6435 2.91918 10.4857 3.01005L9.06411 3.83068L9.21636 2.48743C9.22686 2.3963 9.20111 2.30668 9.14398 2.23493C9.08711 2.16368 9.00598 2.11893 8.91611 2.10905C8.72486 2.08643 8.55736 2.22468 8.53773 2.41105L8.34461 4.25618L6.37498 5.40206V3.12668L7.86561 2.01268C7.93611 1.96093 7.98223 1.88443 7.99548 1.79718C8.00923 1.70605 7.98498 1.61055 7.92923 1.53505C7.82036 1.38743 7.61236 1.35355 7.46311 1.46343L6.37498 2.27505V0.62568C6.37498 0.42443 6.17686 0.28418 5.99898 0.28418C5.82211 0.28418 5.62498 0.42443 5.62498 0.62568V2.26505L4.55336 1.4633C4.40673 1.35443 4.19298 1.38743 4.08386 1.53493C4.02673 1.61193 4.00211 1.70893 4.01598 1.8008C4.02898 1.88668 4.07448 1.9618 4.14311 2.01193L5.62498 3.11618V5.40093L3.68486 4.28018L3.47823 2.4338C3.45761 2.26155 3.31411 2.13168 3.14411 2.13168C3.13048 2.13168 3.11636 2.13243 3.10336 2.13418C2.91886 2.1553 2.78473 2.32468 2.80448 2.5133L2.96223 3.85681L1.50711 3.02218C1.45561 2.99281 1.39711 2.97718 1.33798 2.97718C1.21573 2.97718 1.10223 3.04293 1.04173 3.14893C0.948859 3.3108 1.00498 3.5198 1.16798 3.6153L2.63236 4.45506L1.37823 5.00581C1.29448 5.04256 1.23011 5.10955 1.19723 5.19443C1.16411 5.27943 1.16623 5.37231 1.20286 5.45543C1.27486 5.62143 1.47623 5.70618 1.65273 5.63193L3.36998 4.87793L5.31686 5.99418L3.36586 7.12056L1.66323 6.37893C1.49411 6.30556 1.28686 6.38793 1.21386 6.55581C1.13836 6.72818 1.21761 6.93006 1.39061 7.00606L2.62961 7.54556L1.17686 8.38431C1.01473 8.47931 0.958984 8.68868 1.05261 8.85106C1.11336 8.95631 1.22711 9.02168 1.34886 9.02168C1.40948 9.02168 1.46873 9.00556 1.51911 8.97593L2.98161 8.13156L2.82648 9.49431C2.81648 9.58518 2.84236 9.67443 2.89961 9.74593C2.95661 9.81706 3.03786 9.86193 3.12536 9.87143C3.13873 9.87331 3.15311 9.87368 3.16736 9.87368C3.34111 9.87368 3.48686 9.74343 3.50648 9.56968L3.70198 7.70618L5.62498 6.58781V8.85781L4.30448 9.96243C4.16348 10.0806 4.14748 10.2962 4.26773 10.4416C4.33098 10.5199 4.43111 10.5667 4.53561 10.5667C4.62998 10.5667 4.69336 10.5262 4.74073 10.4886L5.62498 9.74693V11.3734C5.62498 11.5747 5.82211 11.7149 5.99898 11.7149C6.17686 11.7149 6.37498 11.5747 6.37498 11.3734V9.73593L7.27286 10.4901C7.42236 10.6104 7.62461 10.5819 7.73923 10.4431C7.79673 10.3739 7.82711 10.2881 7.82461 10.2009C7.82198 10.1063 7.78098 10.0214 7.70973 9.96206L6.37498 8.84656V6.58243L8.33848 7.71693L8.54673 9.58068C8.56736 9.75256 8.71123 9.88218 8.88161 9.88218C8.89773 9.88218 8.90773 9.88131 8.91873 9.87968C9.00873 9.86981 9.08948 9.82506 9.14611 9.75406C9.20336 9.68231 9.22911 9.59243 9.21848 9.50106L9.05986 8.14018L10.4922 8.96156C10.5436 8.99118 10.6024 9.00681 10.6621 9.00681C10.7845 9.00681 10.898 8.94093 10.9581 8.83493C11.0512 8.67243 10.995 8.46331 10.832 8.36893Z"
                fill="#222222"
              />
            </svg>

            <svg
              width="14"
              height="11"
              viewBox="0 0 14 11"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M5.05095 4.17525L9.03992 6.47828M6.19117 1.50942L4.79503 0.703356C4.62981 0.607961 4.41853 0.664573 4.32313 0.829801L1.7898 5.21766C1.6944 5.38291 1.75102 5.59417 1.91625 5.68956L3.31238 6.49562C3.47761 6.59102 3.68888 6.53442 3.78428 6.36918L6.31762 1.98132C6.41301 1.81609 6.3564 1.60481 6.19117 1.50942ZM12.1746 4.96396L10.7785 4.1579C10.6132 4.0625 10.402 4.11912 10.3066 4.28435L7.77325 8.67221C7.67785 8.83745 7.73445 9.04871 7.89969 9.14411L9.29583 9.95017C9.46107 10.0456 9.67233 9.98897 9.76773 9.82372L12.3011 5.43586C12.3965 5.27063 12.3399 5.05936 12.1746 4.96396ZM0.869696 3.35679L2.25151 0.963407C2.34691 0.798179 2.55819 0.741567 2.72341 0.836961L3.62093 1.35514C3.78616 1.45054 3.84277 1.66181 3.74738 1.82704L2.36556 4.22042C2.27016 4.38567 2.05889 4.44226 1.89366 4.34687L0.996141 3.82869C0.830914 3.73329 0.774293 3.52203 0.869696 3.35679ZM11.8394 9.69012L13.2212 7.29674C13.3166 7.13151 13.26 6.92024 13.0947 6.82484L12.1972 6.30666C12.032 6.21126 11.8207 6.26788 11.7253 6.4331L10.3435 8.82648C10.2481 8.99173 10.3047 9.20298 10.4699 9.29838L11.3675 9.81656C11.5327 9.91197 11.7439 9.85536 11.8394 9.69012Z"
                stroke="#222222"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </svg>

            <svg
              width="14"
              height="14"
              viewBox="0 0 14 14"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M4.33333 7.66667V10.3333M9.66667 2.33333V2.66667C9.66667 3.02029 9.80714 3.35943 10.0572 3.60948C10.3072 3.85952 10.6464 4 11 4C11.3536 4 11.6928 4.14048 11.9428 4.39052C12.1929 4.64057 12.3333 4.97971 12.3333 5.33333V5.66667M1 1L13 13M10.3333 10.3333H1.66667C1.48986 10.3333 1.32029 10.2631 1.19526 10.1381C1.07024 10.013 1 9.84348 1 9.66667V8.33333C1 8.15652 1.07024 7.98695 1.19526 7.86193C1.32029 7.7369 1.48986 7.66667 1.66667 7.66667H7.66667M10.3333 7.66667H12.3333C12.5101 7.66667 12.6797 7.7369 12.8047 7.86193C12.9298 7.98695 13 8.15652 13 8.33333V9.66667C13 9.85333 12.9233 10.022 12.8 10.1427L10.3333 7.66667Z"
                stroke="#222222"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </svg>

            <svg
              width="12"
              height="15"
              viewBox="0 0 12 15"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M6.36002 9.87301L1.88669 4.99301H10.8334L6.36002 9.87301ZM6.36002 9.87301C6.36002 10.2797 6.36002 13.533 6.36002 13.533M4.73335 13.533H7.98669M3.51335 6.61967H9.20669M3.10669 2.95967L5.95335 6.61967M0.666687 4.17967L5.14002 1.33301H1.88669L0.666687 4.17967Z"
                stroke="#222222"
                stroke-miterlimit="10"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </svg>
          </div>
          <div class="images-container">
            <img src="/assets/room2.jpg" alt="" class="image-slider active" id="first_image" />
            <img
              src="/assets/luxury.jpg"
              alt=""
              class="image-slider active"
              id="first_image"
            />
            <img
              src="/assets/room3.jpg"
              alt=""
              class="image-slider"
              id="second_image"
            />
            <img
              src="/assets/room6.jpg"
              alt=""
              class="image-slider"
              id="third_image"
            />
           
          </div>
          <button class="btn-left" id="btn_left" value="left"></button>
          <button class="btn-right" id="btn_right" value="right"></button>
          <div class="slider-bottom"></div>
        </div>
        <div class="description">
          <h1 class="title">Minimal Duplex Room</h1>
          <p class="text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim,
            voluptat quasi as voluptatibus consequuntu .
          </p>
          <h1 class="price">$345<span class="night">/Night</span></h1>
        </div>
      </div>
      <div class="video__container">
        <div class="sub-container">
        <div class="text-container">
        <h6 class="text-section">Intro video</h6>
        <h1 class="title">Meet With Our Luxury Place.</h1>
        <p class="text">
          Lorem, ipsum dolor sit amet consectetur adipisicing eee. Similique
          aliquam vero accusamus natus, vel ea escensa laboriosam adipisci
          repudiandae neque ducimus aliquffa voluptatibus a dolores eligendi
          officia fugit eveniet nesaa obcaecati architecto pariatur omnis
          exercitatioe Eaqueeg suscipit ipsum doloremque natus laboriosam, hic
        </p>
        <button class="btn-book">BOOK NOW</button>
        </div>
        <div class="video">
          <video preload="none" id="video" poster="/assets/video.jpg">
            <source type="video/mp4" src="/assets/hotelvideo.mp4" />
          </video>
          <div class="circle" id="circle">
            <svg
              width="12"
              height="14"
              viewBox="0 0 12 14"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M1.20002 13.4006C1.11018 13.4006 1.02033 13.378 0.939083 13.3324C0.770854 13.2381 0.666687 13.0603 0.666687 12.8673V1.13398C0.666687 0.94101 0.770854 0.763145 0.939083 0.668874C1.10757 0.574343 1.31408 0.578249 1.47815 0.67877L11.0781 6.54544C11.2367 6.64257 11.3334 6.81497 11.3334 7.00065C11.3334 7.18632 11.2367 7.35872 11.0781 7.45585L1.47815 13.3225C1.39299 13.3746 1.29637 13.4006 1.20002 13.4006ZM1.73335 2.08502V11.9163L9.77711 7.00065L1.73335 2.08502Z"
                fill="#111111"
              />
            </svg>
          </div>
        </div>
        </div>
        <button>BOOK NOW</button>
      </div>
      <div class="facilities__container">
        <h6 class="text-section">Facilities</h6>
        <h1 class="title">Core Features</h1>
        <div class="card-slider-container">
          <div class="filter-container active">
            <div class="card-slider">
              <svg
                class="icon"
                width="70"
                height="70"
                viewBox="0 0 70 70"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
              >
                <rect width="70" height="70" fill="url(#pattern0)" />
                <defs>
                  <pattern
                    id="pattern0"
                    patternContentUnits="objectBoundingBox"
                    width="1"
                    height="1"
                  >
                    <use
                      xlink:href="#image0_67_618"
                      transform="scale(0.0142857)"
                    />
                  </pattern>
                  <image
                    id="image0_67_618"
                    width="70"
                    height="70"
                    xlink:href="data:image/png;base64,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"
                  />
                </defs>
              </svg>
              <h1 class="number">01</h1>
            </div>
            <h1 class="title">Have High Rating</h1>
            <p class="text">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa aut
              ipsa expedita accusantium doloribus nulla voluptate minus alias
              quas numquam!
            </p>
          </div>
          <div class="filter-container">
            <div class="card-slider">
              <img class="icon" src="/assets/clock.png" alt="" />
              <h1 class="number">02</h1>
            </div>
            <h1 class="title">Quiet Hours</h1>
            <p class="text">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa aut
              ipsa expedita accusantium doloribus nulla voluptate minus alias
              quas numquam!
            </p>
          </div>
          <div class="filter-container">
            <div class="card-slider">
              <svg
                class="icon"
                width="70"
                height="70"
                viewBox="0 0 70 70"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M52.6883 48.3561C52.5241 48.3561 52.3574 48.3163 52.2029 48.2325C51.708 47.9639 51.5245 47.345 51.7932 46.8501C55.9821 39.131 58.106 31.8283 58.106 25.1449C58.106 12.4042 47.7407 2.03902 35.0001 2.03902C33.4556 2.03902 31.9119 2.19215 30.4117 2.49443C29.8603 2.60586 29.3222 2.2482 29.2111 1.69627C29.0999 1.14434 29.4573 0.606621 30.0092 0.495469C31.6414 0.166797 33.3205 0 35 0C48.8649 0 60.1449 11.28 60.1449 25.1449C60.1449 32.1717 57.9379 39.8016 53.5851 47.8226C53.4006 48.163 53.05 48.3561 52.6883 48.3561Z"
                  fill="#BEAD8E"
                />
                <path
                  d="M35 69.9999C33.9183 69.9999 32.9059 69.5736 32.1493 68.7997C29.2411 65.8247 23.6403 59.6753 18.8032 51.9169C12.8658 42.3939 9.8551 33.3865 9.8551 25.1448C9.8551 15.0163 15.883 5.92215 25.2122 1.97631C25.731 1.75701 26.3289 1.99941 26.5483 2.51813C26.7678 3.0367 26.5251 3.63498 26.0066 3.85428C17.4336 7.48033 11.8941 15.8373 11.8941 25.1448C11.8941 43.7178 28.5137 62.1633 33.6074 67.3744C33.9771 67.7527 34.4717 67.9609 35 67.9609C35.5283 67.9609 36.0229 67.7527 36.3926 67.3744C39.2228 64.4791 44.6756 58.4953 49.3966 50.9501C49.6955 50.4726 50.3245 50.328 50.8018 50.6266C51.2791 50.9253 51.4239 51.5544 51.1253 52.0317C46.3027 59.739 40.7382 65.8457 37.8507 68.7997C37.0941 69.5736 36.0817 69.9999 35 69.9999Z"
                  fill="#BEAD8E"
                />
                <path
                  d="M35 36.6312C32.4001 36.6312 29.9395 35.7948 27.8845 34.2124C27.4383 33.8689 27.3551 33.2288 27.6987 32.7826C28.0422 32.3366 28.6822 32.2531 29.1283 32.5968C30.8238 33.9022 32.8542 34.5922 35.0001 34.5922C40.3126 34.5922 44.6344 30.2702 44.6344 24.9579C44.6344 19.6455 40.3125 15.3234 35 15.3234C29.6875 15.3234 25.3657 19.6454 25.3657 24.9577C25.3657 26.4421 25.6939 27.8653 26.3414 29.1878C26.589 29.6935 26.3797 30.3043 25.874 30.5519C25.3677 30.7992 24.7574 30.59 24.51 30.0844C23.7248 28.4804 23.3267 26.7556 23.3267 24.9577C23.3267 18.521 28.5633 13.2844 35 13.2844C41.4367 13.2844 46.6733 18.521 46.6733 24.9577C46.6733 31.3945 41.4367 36.6312 35 36.6312Z"
                  fill="#BEAD8E"
                />
              </svg>

              <h1 class="number">03</h1>
            </div>
            <h1 class="title">Best Locations</h1>
            <p class="text">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa aut
              ipsa expedita accusantium doloribus nulla voluptate minus alias
              quas numquam!
            </p>
          </div>
          <div class="filter-container">
            <div class="card-slider">
              <img class="icon" src="/assets/clock.png" alt="" />
              <h1 class="number">04</h1>
            </div>
            <h1 class="title">Free Cancellation</h1>
            <p class="text">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa aut
              ipsa expedita accusantium doloribus nulla voluptate minus alias
              quas numquam!
            </p>
          </div>
          <div class="filter-container">
            <div class="card-slider">
              <svg
                class="icon"
                width="71"
                height="70"
                viewBox="0 0 71 70"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <g clip-path="url(#clip0_10_473)">
                  <path
                    d="M37.8549 46.0802H56.7822C57.492 46.0802 57.9652 45.6137 57.9652 44.9139V34.4172C57.9652 33.7175 57.492 33.251 56.7822 33.251H37.8549C37.1451 33.251 36.6719 33.7175 36.6719 34.4172V44.9139C36.6718 45.6136 37.1451 46.0802 37.8549 46.0802ZM39.0378 35.5835H55.5993V43.7476H39.0378V35.5835Z"
                    fill="#BEAD8E"
                  />
                  <path
                    d="M5.91485 30.918H15.3786C16.0884 30.918 16.5615 30.4515 16.5615 29.7517C16.5615 29.0519 16.0884 28.5854 15.3786 28.5854H5.91485C5.20507 28.5854 4.73193 29.0519 4.73193 29.7517C4.73193 30.4515 5.20507 30.918 5.91485 30.918Z"
                    fill="#BEAD8E"
                  />
                  <path
                    d="M20.1104 30.918H29.5742C30.2839 30.918 30.7571 30.4515 30.7571 29.7517C30.7571 29.0519 30.2839 28.5854 29.5742 28.5854H20.1104C19.4006 28.5854 18.9275 29.0519 18.9275 29.7517C18.9275 30.4515 19.4006 30.918 20.1104 30.918Z"
                    fill="#BEAD8E"
                  />
                  <path
                    d="M5.91485 35.5835H21.2933C22.0031 35.5835 22.4763 35.117 22.4763 34.4172C22.4763 33.7174 22.0031 33.251 21.2933 33.251H5.91485C5.20507 33.251 4.73193 33.7174 4.73193 34.4172C4.73193 35.117 5.20507 35.5835 5.91485 35.5835Z"
                    fill="#BEAD8E"
                  />
                  <path
                    d="M29.574 33.2505H26.0251C25.3154 33.2505 24.8422 33.717 24.8422 34.4167C24.8422 35.1165 25.3154 35.583 26.0251 35.583H29.574C30.2838 35.583 30.757 35.1165 30.757 34.4167C30.757 33.717 30.2838 33.2505 29.574 33.2505Z"
                    fill="#BEAD8E"
                  />
                  <path
                    d="M69.9131 18.7885C69.0851 17.7389 68.0205 17.1557 66.7191 17.0391L63.88 16.6999V13.4235V11.0909C63.88 8.52513 61.7507 6.42578 59.1482 6.42578H4.73181C2.12933 6.42564 0 8.52499 0 11.0909V13.4236V22.7541V48.4127C0 50.5193 1.43578 52.3104 3.38988 52.8844C3.33027 55.2437 5.1409 57.292 7.57106 57.5098L62.224 63.5746C62.3422 63.5746 62.5789 63.5746 62.6971 63.5746C65.0631 63.5746 67.1924 61.8251 67.4289 59.6092L70.9778 22.1709C71.0961 21.0045 70.7412 19.7215 69.9131 18.7885ZM2.36597 14.5899H61.5142V17.6223V21.5877H2.36597V14.5899ZM4.73181 8.7583H59.1481C60.4494 8.7583 61.5141 9.80797 61.5141 11.0909V12.2572H2.36597V11.0909C2.36597 9.80797 3.43064 8.7583 4.73181 8.7583ZM2.36597 48.4125V23.9202H61.5142V48.4125C61.5142 49.6955 60.4495 50.7452 59.1482 50.7452H4.8502H4.73195C3.43064 50.7452 2.36597 49.6955 2.36597 48.4125ZM68.6118 21.7043L65.063 59.1426C64.9447 60.4255 63.7616 61.3585 62.4605 61.2419L7.92581 55.1772C6.74289 55.0606 5.91473 54.1275 5.79648 53.0778H59.1481C61.7506 53.0778 63.8799 50.9785 63.8799 48.4127V22.7539V18.9051L66.6008 19.1384C67.1923 19.1384 67.7837 19.4883 68.1386 19.9548C68.4936 20.4213 68.7302 21.1211 68.6118 21.7043Z"
                    fill="#BEAD8E"
                  />
                </g>
                <defs>
                  <clipPath id="clip0_10_473">
                    <rect width="71" height="70" fill="white" />
                  </clipPath>
                </defs>
              </svg>
              <h1 class="number">05</h1>
            </div>
            <h1 class="title">Payment Options</h1>
            <p class="text">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa aut
              ipsa expedita accusantium doloribus nulla voluptate minus alias
              quas numquam!
            </p>
          </div>
          <div class="filter-container">
            <div class="card-slider">
              <img class="icon" src="/assets/ribbon.png" alt="" />
              <h1 class="number">06</h1>
            </div>
            <h1 class="title">Special Offers</h1>
            <p class="text">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa aut
              ipsa expedita accusantium doloribus nulla voluptate minus alias
              quas numquam!
            </p>
          </div>
          <div class="dots">
            <span class="dot dot--active"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
          </div>
        </div>
      </div>
      <div class="menu__container-icon">
        <div class="food-icon">
          <img class="foodimg" src="/assets/food.png" alt="" />
          <img class="foodCompleteimg" src="/assets/foodComplete.png" alt="" />
        </div>
        <div class="container-menu">
          <div class="container-text">
          <h6 class="text-section">Menu</h6>
          <h1 class="title">Our Foods Menu</h1>
          </div>
          <div class="container-cards">
          <div class="container-card-menu active">
            <div class="card-menu">
              <img class="img" src="/assets/eggs-bacon.png" alt="" />
              <div class="text-container">
                <h1 class="subtitle">Eggs & Bacon</h1>
                <p class="text">
                  Lorem ipsum dipisci oditaesentium. Lorem ipsum dipisci
                  oditaesentium.
                </p>
              </div>
            </div>
            <div class="card-menu">
              <img class="img" src="/assets/coffee.jpg" alt="" />
              <div class="text-container">
                <h1 class="subtitle">Tea or Coffee</h1>
                <p class="text">
                  Lorem ipsum dipisci oditaesentium. Lorem ipsum dipisci
                  oditaesentium.
                </p>
              </div>
            </div>
            <div class="card-menu">
              <img class="img" src="/assets/chia.jpg" alt="" />
              <div class="text-container">
                <h1 class="subtitle">Chia Oatmeal</h1>
                <p class="text">
                  Lorem ipsum doloo sci oditaese Lorem ipsum dipisci
                  oditaesentium../..
                </p>
              </div>
            </div>
          </div>
          <div class="container-card-menu">
            <div class="card-menu">
              <img class="img" src="/assets/fruit.jpg" alt="" />
              <div class="text-container">
                <h1 class="subtitle">Fruit Parfait</h1>
                <p class="text">
                  Lorem ipsum dipisci oditaesentium. Lorem ipsum dipisci
                  oditaesentium.
                </p>
              </div>
            </div>
            <div class="card-menu">
              <img class="img" src="/assets/marme.jpg" alt="" />
              <div class="text-container">
                <h1 class="subtitle">Marmelade Selection</h1>
                <p class="text">
                  Lorem ipsum dipisci oditaesentium. Lorem ipsum dipisci
                  oditaesentium.
                </p>
              </div>
            </div>
            <div class="card-menu">
              <img class="img" src="/assets/cheese.jpg"alt="" />
              <div class="text-container">
                <h1 class="subtitle">Cheese Plate</h1>
                <p class="text">
                  Lorem ipsum doloo sci oditaese Lorem ipsum dipisci
                  oditaesentium../..
                </p>
              </div>
            </div>
          </div>
          </div>
          <div class="slider-container">
            <div class="container-buttons">
              <button class="btn-left-menu" id="btn_left_menu" value="leftMenu">
                <svg
                  width="6"
                  height="10"
                  viewBox="0 0 6 10"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M5.33841 9.67603C5.29092 9.67605 5.24388 9.66671 5.2 9.64855C5.15611 9.6304 5.11623 9.60377 5.08264 9.5702L0.625466 5.11279C0.557675 5.04498 0.519592 4.95302 0.519592 4.85713C0.519592 4.76125 0.557675 4.66929 0.625466 4.60148L5.08264 0.144067C5.11621 0.110478 5.15607 0.0838309 5.19994 0.0656466C5.24381 0.0474623 5.29084 0.0380971 5.33833 0.0380859C5.38582 0.0380748 5.43285 0.0474177 5.47673 0.0655814C5.52061 0.083745 5.56048 0.110374 5.59407 0.143947C5.62766 0.17752 5.6543 0.21738 5.67249 0.261252C5.69067 0.305124 5.70004 0.352147 5.70005 0.399638C5.70006 0.447129 5.69072 0.494157 5.67255 0.538038C5.65439 0.581918 5.62776 0.621791 5.59419 0.65538L1.39256 4.85701L5.59419 9.05864C5.64479 9.10922 5.67926 9.17366 5.69323 9.24383C5.70719 9.314 5.70003 9.38673 5.67265 9.45282C5.64527 9.51892 5.59889 9.57541 5.5394 9.61514C5.4799 9.65487 5.40995 9.67606 5.33841 9.67603Z"
                    fill="#111111"
                  />
                </svg>
              </button>
              <button
                class="btn-right-menu"
                id="btn_right_menu"
                value="rightMenu"
              >
                <svg
                  width="6"
                  height="10"
                  viewBox="0 0 6 10"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M0.661588 9.67603C0.709083 9.67605 0.756117 9.66671 0.800004 9.64855C0.843891 9.6304 0.88377 9.60377 0.917365 9.5702L5.37453 5.11279C5.44232 5.04498 5.48041 4.95302 5.48041 4.85713C5.48041 4.76125 5.44232 4.66929 5.37453 4.60148L0.917365 0.144067C0.883791 0.110478 0.843932 0.0838309 0.80006 0.0656466C0.756188 0.0474623 0.709165 0.0380971 0.661674 0.0380859C0.614182 0.0380748 0.567155 0.0474177 0.523274 0.0655814C0.479394 0.083745 0.439521 0.110374 0.405932 0.143947C0.372343 0.17752 0.345696 0.21738 0.327511 0.261252C0.309327 0.305124 0.299962 0.352147 0.29995 0.399638C0.299939 0.447129 0.309282 0.494157 0.327446 0.538038C0.34561 0.581918 0.372239 0.621791 0.405812 0.65538L4.60744 4.85701L0.405812 9.05864C0.355207 9.10922 0.320741 9.17366 0.306775 9.24383C0.292808 9.314 0.299969 9.38673 0.327352 9.45282C0.354734 9.51892 0.401109 9.57541 0.460605 9.61514C0.520101 9.65487 0.590045 9.67606 0.661588 9.67603Z"
                    fill="white"
                  />
                </svg>
              </button>
            </div>
          </div>
          <div class="images">
            <img src="" alt="" />
            <img src="" alt="" />
            <img src="" alt="" />
          </div>
        </div>
      </div>
      <div class="stats__container">
       
        <div class="stats-card">
          <img src="/assets/ship.png" alt="" />
          <h1 class="title">84k<span class="plus">+</span></h1>
          <h6 class="text">Projects are Completed</h6>
        </div>
        <div class="stats-card">
          <img src="/assets/people.png" alt="" />
          <h1 class="title">10M<span class="plus">+</span></h1>
          <h6 class="text">Active Backers Around World</h6>
        </div>
        <div class="stats-card">
          <img src="/assets/money.png" alt="" />
          <h1 class="title">02k<span class="plus">+</span></h1>
          <h6 class="text">Categories Served</h6>
        </div>
        <div class="stats-card">
          <img src="/assets/book.png" alt="" />
          <h1 class="title">100M<span class="plus">+</span></h1>
          <h6 class="text">Idea Raised Funds</h6>
        </div>
  
      </div>
      @endsection      
      @section('scripts')
    </main>
    <script src="/js/index.js"></script>
    <script src="/js/slider.js"></script>
    <script src="/js/cardsSlider.js"></script>
    <script src="/js/video.js"></script>
  </body>
</html>
@endsection


