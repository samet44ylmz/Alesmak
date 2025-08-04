<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>ALESMAK Admin Panel</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs4.min.css" integrity="sha512-ngQ4IGzHQ3s/Hh8kMyG4FC74wzitukRMIcTOoKT3EyzFZCILOPF0twiXOQn75eDINUfKBYmzYn2AA8DkAk8veQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="{{ asset('assets/css/plugins/select2.min.css') }}">
  <!-- Theme CSS Files (EKLEYİN) -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
  {{-- Eğer varsa --}}
 
  {{-- Diğer özel CSS dosyalarınız varsa buraya ekleyin --}}
  {{-- <link rel="stylesheet" href="{{ asset('assets/css/your-template.css') }}"> --}}
  
  <style>
  /* Admin panelde textarea ve metin alanlarında satır sonlarını koru */
  textarea {
      white-space: pre-wrap;
      word-wrap: break-word;
  }
  
  /* Metin gösterim alanlarında da satır sonlarını koru */
  .form-control,
  .card-body,
  .text-content {
      white-space: pre-wrap;
      word-wrap: break-word;
  }
  
  /* Özellikle description alanları için */
  textarea[name="description"],
  textarea[name="description_2"],
  textarea[name="btn_text"],
  textarea[name="adres_description"],
  textarea[name="phone_description"],
  textarea[name="hour_description"] {
      white-space: pre-wrap;
      word-wrap: break-word;
  }

  /* Mobile Responsive İyileştirmeler */
  @media (max-width: 768px) {
    .main-sidebar {
      transform: translateX(-100%);
      transition: transform 0.3s ease;
      position: fixed;
      z-index: 1000;
      height: 100vh;
      overflow-y: auto;
      width: 280px;
      background: #fff;
      border-right: 1px solid #e3e6f0;
    }
    
    .main-sidebar.show {
      transform: translateX(0);
      box-shadow: 2px 0 10px rgba(0,0,0,0.1);
    }
    
    .main-content {
      margin-left: 0 !important;
      width: 100% !important;
      padding: 1rem;
    }
    
    .navbar-brand {
      font-size: 1.2rem;
    }
    
    .card-statistic-1 {
      margin-bottom: 1rem;
    }
    
    .section-header h1 {
      font-size: 1.5rem;
    }
    
    .table-responsive {
      font-size: 0.9rem;
    }
    
    .btn {
      font-size: 0.9rem;
      padding: 0.375rem 0.75rem;
    }
    
    .form-control {
      font-size: 0.9rem;
    }
    
    .dropdown-menu {
      font-size: 0.9rem;
    }
    
         /* Mobilde navbar düzenlemesi */
     .navbar {
       padding: 0.5rem 1rem;
     }
     
     /* Sidebar toggle butonu navbar konumu */
     .navbar .sidebar-toggle {
       margin-right: 1rem;
       z-index: 1001;
     }
    
    .navbar-nav .nav-link {
      padding: 0.5rem 0.75rem;
    }
    
    /* Mobilde sidebar menü düzenlemesi */
    .sidebar-menu .nav-link {
      padding: 0.75rem 1rem;
      font-size: 0.9rem;
      border-radius: 0;
      transition: all 0.3s ease;
    }
    
    .sidebar-menu .nav-link:hover {
      background-color: #f8f9fa;
      color: #333;
    }
    
    .sidebar-menu .menu-header {
      padding: 0.5rem 1rem;
      font-size: 0.8rem;
      font-weight: 600;
      color: #6c757d;
      text-transform: uppercase;
      letter-spacing: 0.5px;
    }
    
    /* Mobilde form elemanları */
    .form-group {
      margin-bottom: 1rem;
    }
    
    .card {
      margin-bottom: 1rem;
    }
    
    /* Mobilde tablo düzenlemesi */
    .table th,
    .table td {
      padding: 0.5rem;
      font-size: 0.85rem;
    }
    
    /* Mobilde buton grupları */
    .btn-group .btn {
      font-size: 0.8rem;
      padding: 0.25rem 0.5rem;
    }
  }

  @media (max-width: 576px) {
    .card-statistic-1 .card-icon {
      width: 50px;
      height: 50px;
      font-size: 1.2rem;
    }
    
    .card-statistic-1 .card-body {
      font-size: 1.5rem;
    }
    
    .card-statistic-1 .card-header h4 {
      font-size: 0.9rem;
    }
    
    .navbar-nav .nav-link {
      padding: 0.5rem 0.75rem;
    }
    
    .sidebar-menu .nav-link {
      padding: 0.75rem 1rem;
    }
    
    /* Çok küçük ekranlar için */
    .main-content {
      padding: 0.5rem;
    }
    
    .card {
      margin-bottom: 0.5rem;
    }
    
    .table-responsive {
      font-size: 0.8rem;
    }
    
    .btn {
      font-size: 0.8rem;
      padding: 0.25rem 0.5rem;
    }
    
    .form-control {
      font-size: 0.8rem;
    }
    
    /* Mobilde modal düzenlemesi */
    .modal-dialog {
      margin: 0.5rem;
    }
    
    .modal-body {
      padding: 1rem;
    }
    
    /* Mobilde dropdown düzenlemesi */
    .dropdown-menu {
      font-size: 0.8rem;
      min-width: 200px;
    }
    
         /* Mobilde sidebar toggle butonu */
     .sidebar-toggle {
       font-size: 1rem;
       padding: 0.5rem 0.75rem;
       background: #007bff;
       border: 2px solid #007bff;
       color: #fff;
       border-radius: 5px;
       box-shadow: 0 2px 4px rgba(0, 123, 255, 0.3);
       min-width: 44px;
       min-height: 44px;
       display: flex;
       align-items: center;
       justify-content: center;
     }
     
     .sidebar-toggle:hover {
       background: #0056b3;
       border-color: #0056b3;
       box-shadow: 0 4px 8px rgba(0, 123, 255, 0.4);
     }
  }

  /* Sidebar Toggle Button */
  .sidebar-toggle {
    display: none;
    background: #007bff;
    border: 2px solid #007bff;
    color: #fff;
    font-size: 1.2rem;
    padding: 0.5rem 0.75rem;
    cursor: pointer;
    transition: all 0.3s ease;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 123, 255, 0.3);
  }

  .sidebar-toggle:hover {
    background: #0056b3;
    border-color: #0056b3;
    color: #fff;
    transform: scale(1.05);
    box-shadow: 0 4px 8px rgba(0, 123, 255, 0.4);
  }

  .sidebar-toggle:active {
    transform: scale(0.95);
    box-shadow: 0 1px 2px rgba(0, 123, 255, 0.3);
  }

  @media (max-width: 768px) {
    .sidebar-toggle {
      display: block;
    }
  }

  /* Overlay for mobile sidebar */
  .sidebar-overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    z-index: 999;
    backdrop-filter: blur(2px);
    transition: opacity 0.3s ease;
  }

  .sidebar-overlay.show {
    display: block;
    opacity: 1;
  }

  /* Logo responsive ayarları */
  .sidebar-brand img {
    max-height: 40px;
    width: auto;
  }

  .sidebar-brand-sm img {
    max-height: 30px;
    width: auto;
  }

  @media (max-width: 768px) {
    .sidebar-brand img {
      max-height: 35px;
    }
    
    .sidebar-brand-sm img {
      max-height: 25px;
    }
  }

  /* Ek mobil iyileştirmeler */
  .scrollable-table {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }

  .sidebar-open {
    overflow: hidden;
  }

  .modal-open-mobile {
    overflow: hidden;
    position: fixed;
    width: 100%;
  }

  /* Mobilde sidebar animasyonları */
  @media (max-width: 768px) {
    .main-sidebar {
      transform: translateX(-100%);
      transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .main-sidebar.show {
      transform: translateX(0);
    }
    
    /* Sidebar içeriği için scroll */
    .main-sidebar .sidebar-menu {
      max-height: calc(100vh - 120px);
      overflow-y: auto;
      -webkit-overflow-scrolling: touch;
    }
    
    /* Sidebar toggle butonu animasyonu */
    .sidebar-toggle {
      transition: transform 0.3s ease;
    }
    
    .sidebar-toggle:active {
      transform: scale(0.95);
    }
  }

  /* Mobilde touch hedef boyutları */
  @media (max-width: 768px) {
    .btn, .nav-link, .dropdown-item {
      min-height: 44px;
      display: flex;
      align-items: center;
    }
    
    .form-control, .form-select {
      min-height: 44px;
    }
    
    /* Mobilde tablo satırları */
    .table tbody tr {
      min-height: 44px;
    }
    
    /* Mobilde card padding */
    .card-body {
      padding: 1rem;
    }
    
    /* File input ve custom file düzenlemesi */
    .custom-file {
      position: relative;
      overflow: hidden;
    }
    
    .custom-file-input {
      position: absolute;
      left: -9999px;
      opacity: 0;
    }
    
    .custom-file-label {
      display: block;
      width: 100%;
      padding: 0.75rem 1rem;
      font-size: 1rem;
      font-weight: 400;
      line-height: 1.5;
      color: #495057;
      background-color: #fff;
      border: 1px solid #ced4da;
      border-radius: 0.25rem;
      cursor: pointer;
      transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }
    
    .custom-file-label:hover {
      border-color: #80bdff;
    }
    
    .custom-file-label:focus {
      border-color: #80bdff;
      outline: 0;
      box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }
    
    /* Form grupları için daha iyi spacing */
    .form-group {
      margin-bottom: 1.5rem;
    }
    
    /* Resim önizleme alanları */
    .img-fluid {
      max-width: 100%;
      height: auto;
      border-radius: 0.25rem;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    
    @media (max-width: 576px) {
      .card-body {
        padding: 0.75rem;
      }
    }
  }
  </style>
</head>

<body class="d-flex flex-column min-vh-100">
  <div id="app" class="flex-fill d-flex flex-column">
    <div class="main-wrapper flex-fill d-flex flex-column">
      @include('admin.layouts.sidebar')
      <!-- Main Content -->
      <div class="main-content flex-fill">
        @yield('content')
      </div>
      <footer class="main-footer mt-auto">
        <div class="footer-left">
          Copyright &copy; 2024 <div class="bullet"></div> Design By <a href="#">ALESMAK</a>
        </div>
        <div class="footer-right">
          1.0.0
        </div>
      </footer>
    </div>
  </div>

  <!-- Overlay for mobile sidebar -->
  <div class="sidebar-overlay" id="sidebarOverlay"></div>

  <!-- General JS Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>

  <!-- JS Libraries -->
  <script src="{{ asset('assets/js/plugins/summernote-bs4.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs4.min.js" integrity="sha512-+b8QwF4w3Qw6k8Qw6k8Qw6k8Qw6k8Qw6k8Qw6k8Qw6k8Qw6k8Qw6k8Qw6k8Qw6k8Qw6k8Qw6k8Qw6k8Qw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="{{ asset('assets/js/plugins/select2.full.min.js') }}"></script>

  <!-- Template JS File -->
  {{-- Diğer özel JS dosyalarınız varsa buraya ekleyin --}}
  {{-- <script src="{{ asset('assets/js/your-template.js') }}"></script> --}}

  <!-- Page Specific JS File -->
  {{-- Sayfaya özel JS dosyalarını buraya ekleyin --}}

  <script>
  // Mobile sidebar toggle functionality
  $(document).ready(function() {
    // Sidebar toggle
    $('.sidebar-toggle').on('click', function(e) {
      e.preventDefault();
      e.stopPropagation();
      $('.main-sidebar').toggleClass('show');
      $('#sidebarOverlay').toggleClass('show');
      $('body').toggleClass('sidebar-open');
    });

    // Close sidebar when clicking overlay
    $('#sidebarOverlay').on('click', function() {
      $('.main-sidebar').removeClass('show');
      $('#sidebarOverlay').removeClass('show');
      $('body').removeClass('sidebar-open');
    });

    // Close sidebar when clicking outside on mobile
    $(document).on('click', function(e) {
      if ($(window).width() <= 768) {
        if (!$(e.target).closest('.main-sidebar, .sidebar-toggle').length) {
          $('.main-sidebar').removeClass('show');
          $('#sidebarOverlay').removeClass('show');
          $('body').removeClass('sidebar-open');
        }
      }
    });

    // Handle window resize
    $(window).on('resize', function() {
      if ($(window).width() > 768) {
        $('.main-sidebar').removeClass('show');
        $('#sidebarOverlay').removeClass('show');
        $('body').removeClass('sidebar-open');
      }
    });

    // ESC tuşu ile sidebar'ı kapat
    $(document).on('keydown', function(e) {
      if (e.key === 'Escape' && $(window).width() <= 768) {
        $('.main-sidebar').removeClass('show');
        $('#sidebarOverlay').removeClass('show');
        $('body').removeClass('sidebar-open');
      }
    });

    // Mobilde tablo scroll iyileştirmesi
    $('.table-responsive').each(function() {
      if ($(this).find('table').width() > $(this).width()) {
        $(this).addClass('scrollable-table');
      }
    });

    // Mobilde form elemanları için touch iyileştirmesi
    $('input, textarea, select').on('focus', function() {
      if ($(window).width() <= 768) {
        setTimeout(function() {
          $('html, body').animate({
            scrollTop: $(this).offset().top - 100
          }, 300);
        }.bind(this), 100);
      }
    });

    // Mobilde dropdown menüler için touch iyileştirmesi
    $('.dropdown-toggle').on('click', function(e) {
      if ($(window).width() <= 768) {
        e.preventDefault();
        $(this).next('.dropdown-menu').toggleClass('show');
      }
    });

    // Mobilde modal açıldığında body scroll'u engelle
    $('.modal').on('show.bs.modal', function() {
      if ($(window).width() <= 768) {
        $('body').addClass('modal-open-mobile');
      }
    });

    $('.modal').on('hidden.bs.modal', function() {
      $('body').removeClass('modal-open-mobile');
    });
    
    // File input iyileştirmeleri
    $('.custom-file-input').on('change', function() {
      var fileName = $(this).val().split('\\').pop();
      $(this).next('.custom-file-label').html(fileName);
      
      // Dosya seçildiğinde sayfanın üste atmasını engelle
      if ($(window).width() <= 768) {
        setTimeout(function() {
          $('html, body').animate({
            scrollTop: $(this).closest('.form-group').offset().top - 50
          }, 300);
        }.bind(this), 100);
      }
    });
    
    // Custom file label tıklama iyileştirmesi
    $('.custom-file-label').on('click', function(e) {
      e.preventDefault();
      $(this).prev('.custom-file-input').click();
    });
    
    // Form submit sırasında scroll pozisyonunu koru
    $('form').on('submit', function() {
      if ($(window).width() <= 768) {
        sessionStorage.setItem('scrollPosition', $(window).scrollTop());
      }
    });
    
    // Sayfa yüklendiğinde scroll pozisyonunu geri yükle
    if (sessionStorage.getItem('scrollPosition')) {
      setTimeout(function() {
        $(window).scrollTop(sessionStorage.getItem('scrollPosition'));
        sessionStorage.removeItem('scrollPosition');
      }, 100);
    }
  });
  </script>
</body>
</html>

