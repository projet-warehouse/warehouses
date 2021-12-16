<link rel='stylesheet' href='{{asset('admin_assets/css/demo_1/style.css')}}' id='themeColor'>

<nav class="settings-sidebar">
  <div class="sidebar-body">
    <a href="#" class="settings-sidebar-toggler">
      <i data-feather="settings"></i>
    </a>
    <h6 class="text-muted">Sidebar:</h6>
    <div class="form-group border-bottom">
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarLight" value="sidebar-light" checked>
          Light
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarDark" value="sidebar-dark">
          Dark
        </label>
      </div>
    </div>
    <div class="theme-wrapper">
      <h6 class="text-muted mb-2">Light Theme:</h6>
      <a class="theme-item active" onclick="themes('light')">
        <img src="{{asset('admin_assets/images/screenshots/light.jpg')}}" alt="light theme">
      </a>
      <h6 class="text-muted mb-2">Dark Theme:</h6>
      <a class="theme-item" onclick="themes('dark')">
        <img src="{{asset('admin_assets/images/screenshots/dark.jpg')}}" alt="light theme">
      </a>
    </div>
  </div>
</nav>

<script>
  var theme = document.getElementById('themeColor');
    var darkLink = "{{asset('admin_assets/css/demo_2/style.css')}}";
    var lightLink = "{{asset('admin_assets/css/demo_1/style.css')}}";
    function themes(color) {
      if (color == 'dark') {
        theme.href = darkLink;
        console.log(color)
      }

     else if (color == 'light') {
        theme.href = lightLink;
        console.log(color)
      }
    }
</script>