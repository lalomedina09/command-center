<?php
//For @Lalo
use App\Http\Controllers\NotesController;

//For template
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EcommerceController;
use App\Http\Controllers\SocialAppController;
use App\Http\Controllers\ToDoController;
use App\Http\Controllers\ImportExportController;
use App\Http\Controllers\ComponentController;
use App\Http\Controllers\IconController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\GoogleLoginController;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\FirestoreController;
use App\Http\Controllers\WidgetController;
use App\Http\Controllers\WizardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Routes
Route::get('/', [LoginController::class, 'loginForm']);
Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix' => 'dashboards'], function () {
        Route::get('/social-media', [DashboardController::class, 'index'])->name('dashboards.index');
        Route::get('/business', [DashboardController::class, 'business'])->name('dashboards.business');
        Route::get('/performance', [DashboardController::class, 'performance'])->name('dashboards.performance');
        Route::get('/ecommerce', [DashboardController::class, 'ecommerce'])->name('dashboards.ecommerce');
        Route::get('/crm', [DashboardController::class, 'crm'])->name('dashboards.crm');
        Route::get('/sales', [DashboardController::class, 'sales'])->name('dashboards.sales');
    });
    Route::group(['prefix' => 'projects'], function () {
        Route::get('/index', [ProjectController::class, 'index'])->name('projects.index');
        Route::get('/project_table', [ProjectController::class, 'projectTable'])->name('projects.project_table');
        Route::get('/details', [ProjectController::class, 'details'])->name('projects.details');
        Route::get('/create', [ProjectController::class, 'create'])->name('projects.create');
    });
    Route::group(['prefix' => 'pages'], function () {
        Route::get('/profile-setting', [SocialAppController::class, 'profileSetting'])->name('pages.profileSetting');
        Route::get('/gallery', [PageController::class, 'gallery'])->name('pages.gallery');
        Route::get('/pricing', [PageController::class, 'pricing'])->name('pages.pricing');
        Route::get('/faq', [PageController::class, 'faq'])->name('pages.faq');
        Route::get('/search', [PageController::class, 'search'])->name('pages.search');
        Route::get('/changelog', [PageController::class, 'changelog'])->name('pages.changelog');
        Route::get('/kanban-board', [PageController::class, 'kanbanBoard'])->name('pages.kanbanBoard');
        Route::get('/file-manager', [PageController::class, 'fileManager'])->name('pages.fileManager');
        Route::get('/file-manager-list', [PageController::class, 'fileManagerList'])->name('pages.fileManagerList');
        Route::group(['prefix' => 'table'], function () {
            Route::get('/basic-table', [PageController::class, 'basicTable'])->name('pages.table.basicTable');
            Route::get('/data-table', [PageController::class, 'dataTable'])->name('pages.table.dataTable');
        });
        Route::get('/banner', [PageController::class, 'banner'])->name('pages.banner');
        Route::get('/testimonial', [PageController::class, 'testimonial'])->name('pages.testimonial');
        Route::get('/blank-page', [PageController::class, 'blankPage'])->name('pages.blankPage');
        Route::group(['prefix' => 'knowledgebase'], function () {
            Route::get('/base', [PageController::class, 'knowledgebase'])->name('pages.knowledgebase.base');
            Route::get('/all-article', [PageController::class, 'allArticle'])->name('pages.knowledgebase.allArticle');
            Route::get('/singale-article', [PageController::class, 'singaleArticle'])->name('pages.knowledgebase.singaleArticle');
        });
        Route::get('/support', [PageController::class, 'support'])->name('pages.support');
        Route::get('/coming-soon', [PageController::class, 'comingSoon'])->name('pages.comingSoon');
    });
    Route::group(['prefix' => 'applications'], function () {
        Route::get('calendar', [CalendarController::class, 'index'])->name('applications.calendar');
        Route::group(['prefix' => 'users'], function () {
            Route::get('/team', [UserController::class, 'index'])->name('applications.users.team');
            Route::get('/users-grid', [UserController::class, 'usersGrid'])->name('applications.users.usersGrid');
            Route::get('/users', [UserController::class, 'users'])->name('applications.users.users');
            Route::get('/users-list', [UserController::class, 'usersList'])->name('applications.users.usersList');
            Route::get('/users-group', [UserController::class, 'usersGroup'])->name('applications.users.usersGroup');
            Route::get('/add-users', [UserController::class, 'addUser'])->name('applications.users.addUser');
            Route::get('/users-datatable', [UserController::class, 'usersDatatable'])->name('applications.users.usersDatatable');
        });
        Route::get('chat', [ChatController::class, 'index'])->name('applications.chat');
        #Route::get('note', [NotesController::class, 'index'])->name('applications.note');
        Route::group(['prefix' => 'note'], function () {
            Route::get('/', [NotesController::class, 'index'])->name('applications.note');
            Route::post('/store', [NotesController::class, 'store'])->name('applications.note.store');
            Route::post('/delete', [NotesController::class, 'delete'])->name('applications.note.delete');
            Route::post('/destroy/{id}', [NotesController::class, 'destroy'])->name('applications.note.destroy');
            Route::post('/restore/{id}', [NotesController::class, 'restore'])->name('applications.note.restore');
            Route::post('/label/update/{id}', [NotesController::class, 'label_update'])->name('applications.note.label.update');
            Route::post('/favorite/update/{id}', [NotesController::class, 'favorite_update'])->name('applications.note.favorite.update');
            Route::post('/edit', [NotesController::class, 'edit'])->name('applications.note.edit');
            Route::post('/update', [NotesController::class, 'update'])->name('applications.note.update');
            Route::get('/list-favorites', [NotesController::class, 'listFavorites'])->name('applications.note.listfavorites');
            Route::get('/list-label/{label}', [NotesController::class, 'listLabel'])->name('applications.note.listfavorites');
            Route::get('/list-deletes', [NotesController::class, 'listDeletes'])->name('applications.note.listdeletes');
            Route::get('/list-all', [NotesController::class, 'listAll'])->name('applications.note.listall');
        });

        Route::get('email/inbox', [EmailController::class, 'index'])->name('applications.email');
        Route::get('email/read-email', [EmailController::class, 'readEmail'])->name('applications.readEmail');
        Route::get('contact/list', [ContactController::class, 'index'])->name('applications.contactList');
        Route::get('contact/grid', [ContactController::class, 'profile'])->name('applications.contactProfile');
        Route::get('contact/contact-create', [ContactController::class, 'contactCreate'])->name('applications.contactCreate');
        Route::group(['prefix' => 'ecommerce'], function () {
            Route::get('products', [EcommerceController::class, 'index'])->name('applications.ecommerce.products');
            Route::get('productList', [EcommerceController::class, 'productList'])->name('applications.ecommerce.productList');
            Route::get('product-details', [EcommerceController::class, 'productDetails'])->name('applications.ecommerce.productDetails');
            Route::get('add-product', [EcommerceController::class, 'addProduct'])->name('applications.ecommerce.addProduct');
            Route::get('edit-product', [EcommerceController::class, 'editProduct'])->name('applications.ecommerce.editProduct');
            Route::get('cart', [EcommerceController::class, 'cart'])->name('applications.ecommerce.cart');
            Route::get('checkout', [EcommerceController::class, 'checkout'])->name('applications.ecommerce.checkout');
            Route::get('shipping-address', [EcommerceController::class, 'shippingAddress'])->name('applications.ecommerce.shippingAddress');
            Route::get('checkout-payment', [EcommerceController::class, 'checkoutPayment'])->name('applications.ecommerce.checkoutPayment');
            Route::get('checkout-review', [EcommerceController::class, 'checkoutReview'])->name('applications.ecommerce.checkoutReview');
            Route::get('payment-status', [EcommerceController::class, 'paymentStatus'])->name('applications.ecommerce.paymentStatus');
            Route::get('orders', [EcommerceController::class, 'orders'])->name('applications.ecommerce.orders');
            Route::get('sellers', [EcommerceController::class, 'sellers'])->name('applications.ecommerce.sellers');
            Route::get('invoice', [EcommerceController::class, 'invoice'])->name('applications.ecommerce.invoice');
        });
        Route::get('social-app/profile', [SocialAppController::class, 'index'])->name('applications.profile');
        Route::get('todo', [ToDoController::class, 'index'])->name('applications.todo');
        Route::group(['prefix' => 'import-export'], function () {
            Route::get('import', [ImportExportController::class, 'index'])->name('applications.import');
            Route::get('export', [ImportExportController::class, 'export'])->name('applications.export');
        });
    });
    Route::group(['prefix' => 'firestore'], function () {
        Route::get('view-all', [FirestoreController::class, 'index'])->name('firestore.all');
        Route::get('add-new', [FirestoreController::class, 'addNew'])->name('firestore.addNew');
        Route::post('/create', [FirestoreController::class, 'store'])->name('firestore.store');
        Route::get('/edit/{id}', [FirestoreController::class, 'edit'])->name('firestore.edit');
        Route::post('/update/{id}', [FirestoreController::class, 'update'])->name('firestore.update');
        Route::get('/delete/{id}', [FirestoreController::class, 'destroy'])->name('firestore.delete');
    });
    Route::group(['prefix' => 'components'], function () {
        Route::get('alert', [ComponentController::class, 'index'])->name('components.alert');
        Route::get('avatar', [ComponentController::class, 'avatar'])->name('components.avatar');
        Route::get('badge', [ComponentController::class, 'badge'])->name('components.badge');
        Route::get('breadcrumbs', [ComponentController::class, 'breadcrumbs'])->name('components.breadcrumbs');
        Route::get('buttons', [ComponentController::class, 'buttons'])->name('components.buttons');
        Route::get('cards', [ComponentController::class, 'cards'])->name('components.cards');
        Route::get('carousel', [ComponentController::class, 'carousel'])->name('components.carousel');
        Route::get('checkbox', [ComponentController::class, 'checkbox'])->name('components.checkbox');
        Route::get('collapse', [ComponentController::class, 'collapse'])->name('components.collapse');
        Route::get('comments', [ComponentController::class, 'comments'])->name('components.comments');
        Route::get('dashboard-base', [ComponentController::class, 'dashboardBase'])->name('components.dashboardBase');
        Route::get('date-picker', [ComponentController::class, 'datePicker'])->name('components.datePicker');
        Route::get('drawer', [ComponentController::class, 'drawer'])->name('components.drawer');
        Route::get('drag-drop', [ComponentController::class, 'dragDrop'])->name('components.dragDrop');
        Route::get('dropdown', [ComponentController::class, 'dropdown'])->name('components.dropdown');
        Route::get('empty', [ComponentController::class, 'empty'])->name('components.empty');
        Route::get('grid', [ComponentController::class, 'grid'])->name('components.grid');
        Route::get('input', [ComponentController::class, 'input'])->name('components.input');
        Route::get('list', [ComponentController::class, 'list'])->name('components.list');
        Route::get('menu', [ComponentController::class, 'menu'])->name('components.menu');
        Route::get('message', [ComponentController::class, 'message'])->name('components.message');
        Route::get('modal', [ComponentController::class, 'modal'])->name('components.modal');
        Route::get('notifications', [ComponentController::class, 'notifications'])->name('components.notifications');
        Route::get('page-header', [ComponentController::class, 'pageHeader'])->name('components.pageHeader');
        Route::get('pagination', [ComponentController::class, 'pagination'])->name('components.pagination');
        Route::get('progressbar', [ComponentController::class, 'progressbar'])->name('components.progressbar');
        Route::get('radio', [ComponentController::class, 'radio'])->name('components.radio');
        Route::get('rate', [ComponentController::class, 'rate'])->name('components.rate');
        Route::get('result', [ComponentController::class, 'result'])->name('components.result');
        Route::get('select', [ComponentController::class, 'select'])->name('components.select');
        Route::get('skeleton', [ComponentController::class, 'skeleton'])->name('components.skeleton');
        Route::get('slider', [ComponentController::class, 'slider'])->name('components.slider');
        Route::get('spin', [ComponentController::class, 'spin'])->name('components.spin');
        Route::get('statistics', [ComponentController::class, 'statistics'])->name('components.statistics');
        Route::get('steps', [ComponentController::class, 'steps'])->name('components.steps');
        Route::get('switch', [ComponentController::class, 'switch'])->name('components.switch');
        Route::get('tab', [ComponentController::class, 'tab'])->name('components.tab');
        Route::get('tag', [ComponentController::class, 'tag'])->name('components.tag');
        Route::get('timeline', [ComponentController::class, 'timeline'])->name('components.timeline');
        Route::get('time-picker', [ComponentController::class, 'timePicker'])->name('components.timePicker');
        Route::get('uploads', [ComponentController::class, 'uploads'])->name('components.uploads');
    });
    Route::group(['prefix' => 'widget'], function () {
        Route::get('charts', [WidgetController::class, 'index'])->name('widget.charts');
        Route::get('mixed', [WidgetController::class, 'mixed'])->name('widget.mixed');
        Route::get('card', [WidgetController::class, 'card'])->name('widget.card');
    });
    Route::group(['prefix' => 'wizard'], function () {
        Route::get('wizard-one', [WizardController::class, 'index'])->name('wizard.wizardOne');
        Route::get('checkout2-wizard-one', [WizardController::class, 'checkout2WizardOne'])->name('wizard.checkout2WizardOne');
        Route::get('checkout-payment-wizard6', [WizardController::class, 'checkoutPaymentWizard6'])->name('wizard.checkoutPaymentWizard6');
        Route::get('checkout-review-wizard6', [WizardController::class, 'checkoutReviewWizard6'])->name('wizard.checkoutReviewWizard6');
        Route::get('payment-status-wizard6', [WizardController::class, 'paymentStatusWizard6'])->name('wizard.paymentStatusWizard6');
        Route::get('wizard-two', [WizardController::class, 'wizardTwo'])->name('wizard.wizardTwo');
        Route::get('checkout2-wizard7', [WizardController::class, 'checkout2Wizard7'])->name('wizard.checkout2Wizard7');
        Route::get('checkout-payment-wizard7', [WizardController::class, 'checkoutPaymentWizard7'])->name('wizard.checkoutPaymentWizard7');
        Route::get('checkout-review-wizard7', [WizardController::class, 'checkoutReviewWizard7'])->name('wizard.checkoutReviewWizard7');
        Route::get('payment-status-wizard7', [WizardController::class, 'paymentStatusWizard7'])->name('wizard.paymentStatusWizard7');
        Route::get('wizard-three', [WizardController::class, 'wizardThree'])->name('wizard.wizardThree');
        Route::get('checkout2-wizard8', [WizardController::class, 'checkout2Wizard8'])->name('wizard.checkout2Wizard8');
        Route::get('checkout-payment-wizard8', [WizardController::class, 'checkoutPaymentWizard8'])->name('wizard.checkoutPaymentWizard8');
        Route::get('checkout-review-wizard8', [WizardController::class, 'checkoutReviewWizard8'])->name('wizard.checkoutReviewWizard8');
        Route::get('payment-status-wizard8', [WizardController::class, 'paymentStatusWizard8'])->name('wizard.paymentStatusWizard8');
        Route::get('wizard-four', [WizardController::class, 'wizardFour'])->name('wizard.wizardFour');
        Route::get('checkout2-wizard9', [WizardController::class, 'checkout2Wizard9'])->name('wizard.checkout2Wizard9');
        Route::get('checkout-payment-wizard9', [WizardController::class, 'checkoutPaymentWizard9'])->name('wizard.checkoutPaymentWizard9');
        Route::get('checkout-review-wizard9', [WizardController::class, 'checkoutReviewWizard9'])->name('wizard.checkoutReviewWizard9');
        Route::get('payment-status-wizard9', [WizardController::class, 'paymentStatusWizard9'])->name('wizard.paymentStatusWizard9');
        Route::get('wizard-five', [WizardController::class, 'wizardFive'])->name('wizard.wizardFive');
        Route::get('checkout2-wizard10', [WizardController::class, 'checkout2Wizard10'])->name('wizard.checkout2Wizard10');
        Route::get('checkout-payment-wizard10', [WizardController::class, 'checkoutPaymentWizard10'])->name('wizard.checkoutPaymentWizard10');
        Route::get('checkout-review-wizard10', [WizardController::class, 'checkoutReviewWizard10'])->name('wizard.checkoutReviewWizard10');
        Route::get('payment-status-wizard10', [WizardController::class, 'paymentStatusWizard10'])->name('wizard.paymentStatusWizard10');
    });
    Route::group(['prefix' => 'icons'], function () {
        Route::get('father-icons', [IconController::class, 'index'])->name('icons.fatherIcons');
        Route::get('font-awesome', [IconController::class, 'fontAwesome'])->name('icons.fontAwesome');
        Route::get('line-awesome', [IconController::class, 'lineAwesome'])->name('icons.lineAwesome');
    });
    Route::group(['prefix' => 'charts'], function () {
        Route::get('chart', [ChartController::class, 'index'])->name('charts.index');
        Route::get('google-chart', [ChartController::class, 'googleChart'])->name('charts.googleChart');
        Route::get('peity-chart', [ChartController::class, 'peityChart'])->name('charts.peityChart');
    });
    Route::group(['prefix' => 'forms'], function () {
        Route::get('basic', [FormController::class, 'index'])->name('forms.index');
        Route::get('layouts', [FormController::class, 'layouts'])->name('forms.layouts');
        Route::get('elements', [FormController::class, 'elements'])->name('forms.elements');
        Route::get('components', [FormController::class, 'components'])->name('forms.components');
        Route::get('validations', [FormController::class, 'validations'])->name('forms.validations');
    });
    Route::group(['prefix' => 'maps'], function () {
        Route::get('google-map', [MapController::class, 'index'])->name('maps.index');
        Route::get('leaflet-map', [MapController::class, 'leafletMap'])->name('maps.leafletMap');
        Route::get('vector-map', [MapController::class, 'vectorMap'])->name('maps.vectorMap');
    });
});
Route::get('404', [ErrorController::class, 'index'])->name('error');
Route::get('maintenance', [ErrorController::class, 'maintenance'])->name('maintenance');
// Facebook login routes
Route::get('/auth/redirect/{provider}', [SocialController::class, 'redirect']);
Route::get('/callback/{provider}', [SocialController::class, 'callback']);
// Google login routes
Route::get('auth/google', [GoogleLoginController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleLoginController::class, 'handleGoogleCallback']);
// Layout set routes
Route::get('setlayout/{layout}', function ($layout) {
    if (in_array($layout, \Config::get('app.layouts'))) {
        session(['layout' => $layout]);
    }
    return redirect()->back();
});
Auth::routes();
