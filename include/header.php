<!-- ヘッダー -->
<div class="Header">
  <header>
    <div class="Header__Wrap blue" id="sp-height">
      <nav class="Header__Wrap__Nav">
        <div class="frame">
          <div class="Header__Wrap__Nav__Logo pc">
            <img class="-img" src="/asset/img/common/logo-footer.svg" alt="健生グループのロゴイメージ">
          </div>
          <ul class="Header__Wrap__Nav__Menu">
            <li class="-li"> <a href="%{HOME_URL}" class="nav-menu">TOP</a></li>
            <li class="-li"> <a href="%{HOME_URL}merit/" class="nav-menu">健生の魅力</a></li>
            <li class="-li"> <a href="%{HOME_URL}group/" class="nav-menu">施設一覧</a></li>
            <li class="-li"> <a href="%{HOME_URL}guide/?ninka" class="nav-menu">入園案内</a></li>
            <li class="-li"> <a href="%{HOME_URL}recruit/" class="nav-menu">求人情報</a></li>
            <li class="-li"> <a href="%{HOME_URL}info/" class="nav-menu">お知らせ</a></li>
          </ul>
          <div class="Header__Wrap__Nav__Btn">
            <button class="btn more" data-modal="Modal_Parent">保護者専用ページ</button>
          </div>
        </div>
        <div class="BtnClose">
          <img class="-img" src="/asset/img/common/icon-menu-close.svg" alt="コンテンツを閉じる">
        </div>
      </nav>
      <div class="Header__Wrap__Group">
        <div class="Header__Wrap__Group__Up -Flex">
          <a class="Header__Wrap__Group__Up__Item green"  href="%{HOME_URL}kenseihoiku/">
            <picture>
              <source media="(min-width: 768px)" srcset="%{HTTP_THEMES_DIR}kensei/asset/img/top/img-tel-title01-pc.png">
              <img class="-img" src="/asset/img/common/menu-icon-01.png" alt="健生保育園">
            </picture>
          </a>
          <a class="Header__Wrap__Group__Up__Item pink" href="%{HOME_URL}kumanoko/">
            <picture>
              <source media="(min-width: 768px)" srcset="%{HTTP_THEMES_DIR}kensei/asset/img/top/img-tel-title02-pc.png">
              <img class="-img" src="/asset/img/common/menu-icon-02.png" alt="健生くまのこ園">
            </picture>
          </a>
          <a class="Header__Wrap__Group__Up__Item orange" href="%{HOME_URL}nursery/">
            <picture>
              <source media="(min-width: 768px)" srcset="%{HTTP_THEMES_DIR}kensei/asset/img/top/img-tel-title03-pc.png">
              <img class="-img" src="/asset/img/common/menu-icon-03.png" alt="健生ナーサリー">
            </picture>
          </a>
          <a class="Header__Wrap__Group__Up__Item yellow" href="%{HOME_URL}kidsbear/">
            <picture>
              <source media="(min-width: 768px)" srcset="%{HTTP_THEMES_DIR}kensei/asset/img/top/img-tel-title04-pc.png">
              <img class="-img" src="/asset/img/common/menu-icon-04.png" alt="健生キッズベア">
            </picture>
          </a>
        </div>
        <div class="Header__Wrap__Group__Under -Flex">
          <a class="Header__Wrap__Group__Under__Item mint" href="%{HOME_URL}kamisawa/">
            <picture>
              <source media="(min-width: 768px)" srcset="%{HTTP_THEMES_DIR}kensei/asset/img/top/img-tel-title05-pc.png">
              <img class="-img" src="/asset/img/common/menu-icon-05.png" alt="健生神沢こども発達支援室">
            </picture>
          </a>
          <a class="Header__Wrap__Group__Under__Item lightblue" href="%{HOME_URL}dayservice/">
            <picture>
              <source media="(min-width: 768px)" srcset="%{HTTP_THEMES_DIR}kensei/asset/img/top/img-tel-title06-pc.png">
              <img class="-img" src="/asset/img/common/menu-icon-06.png" alt="健生児童デイサービス">
            </picture>
          </a>
        </div>
        <ul class="Header__Wrap__Link -Flex">
          <li class="-li"> <a href="%{HOME_URL}info/philosophy.php">保育理念</a></li>
          <li class="-li"> <a href="%{HOME_URL}outline/">法人概要</a></li>
          <li class="-li"> <a href="%{HOME_URL}privacy/">プライバシーポリシー</a></li>
        </ul>
      </div>
    </div>
  </header>
</div>
<div class="cover-body"></div>

<div class="BtnOpen">
  <img class="-img" src="/asset/img/common/icon-menu.svg" alt="コンテンツを開く">
</div>
<div class="circle-bg"></div>

<div class="Fixed__Left">
  <a class="-btn" href="%{HOME_URL}">
    <img class="-img" src="/asset/img/common/logo.svg" alt="健生グループのロゴイメージ">
  </a>
</div>

<!-- /ヘッダー -->


<!-- 保護者専用モーダル -->
@include("/include/parts/modalParent.php")
<!-- / 保護者専用モーダル -->