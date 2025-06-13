
import 'choices.js/public/assets/styles/choices.min.css';
import '@simonwep/pickr/dist/themes/nano.min.css';
import 'node-waves/dist/waves.min.css';
import 'simplebar/dist/simplebar.min.css';

import '../../scss/admin.scss';
import '../../css/admin-build.css';

import '../../css/icon-fonts/RemixIcons/fonts/remixicon.css';
import '../../css/icon-fonts/feather/feather.css';
import '../../css/icon-fonts/bootstrap-icons/icons/font/bootstrap-icons.css';
import '../../css/icon-fonts/tabler-icons/iconfont/tabler-icons.css';
import '../../css/icon-fonts/line-awesome/1.3.0/css/line-awesome.css';
import '../../css/icon-fonts/boxicons/css/boxicons.css';

import './main.js';

import './sticky.js';
import './custom.js';
import './custom-switcher.js';

if (document.body.classList.contains('admin.dashboard')) {
    import('./crm-dashboard.js');
}

