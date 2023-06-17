import './bootstrap';

import { createApp, h, DefineComponent } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';

// PrimeVue Setup
import PrimeVue from "primevue/config";

// PrimeVue Components
import AutoComplete from 'primevue/autocomplete';
import Accordion from 'primevue/accordion';
import AccordionTab from 'primevue/accordiontab';
import Avatar from 'primevue/avatar';
import AvatarGroup from 'primevue/avatargroup';
import Badge from 'primevue/badge';
import BadgeDirective from 'primevue/badgedirective';
import BlockUI from 'primevue/blockui';
import Button from 'primevue/button';
import Breadcrumb from 'primevue/breadcrumb';
import Calendar from 'primevue/calendar';
import Card from 'primevue/card';
import Chart from 'primevue/chart';
import CascadeSelect from 'primevue/cascadeselect';
import Carousel from 'primevue/carousel';
import Checkbox from 'primevue/checkbox';
import Chip from 'primevue/chip';
import Chips from 'primevue/chips';
import ColorPicker from 'primevue/colorpicker';
import Column from 'primevue/column';
import ColumnGroup from 'primevue/columngroup';
import ConfirmDialog from 'primevue/confirmdialog';
import ConfirmPopup from 'primevue/confirmpopup';
import ConfirmationService from 'primevue/confirmationservice';
import ContextMenu from 'primevue/contextmenu';
import DataTable from 'primevue/datatable';
import DataView from 'primevue/dataview';
import DataViewLayoutOptions from 'primevue/dataviewlayoutoptions';
import DeferredContent from 'primevue/deferredcontent';
import Dialog from 'primevue/dialog';
import DialogService from 'primevue/dialogservice';
import Divider from 'primevue/divider';
import Dock from 'primevue/dock';
import Dropdown from 'primevue/dropdown';
import DynamicDialog from 'primevue/dynamicdialog';
import Fieldset from 'primevue/fieldset';
import FileUpload from 'primevue/fileupload';
import Galleria from 'primevue/galleria';
import Image from 'primevue/image';
import InlineMessage from 'primevue/inlinemessage';
import Inplace from 'primevue/inplace';
import InputSwitch from 'primevue/inputswitch';
import InputText from 'primevue/inputtext';
import InputMask from 'primevue/inputmask';
import InputNumber from 'primevue/inputnumber';
import Knob from 'primevue/knob';
import Listbox from 'primevue/listbox';
import MegaMenu from 'primevue/megamenu';
import Menu from 'primevue/menu';
import Menubar from 'primevue/menubar';
import Message from 'primevue/message';
import MultiSelect from 'primevue/multiselect';
import OrderList from 'primevue/orderlist';
import OrganizationChart from 'primevue/organizationchart';
import OverlayPanel from 'primevue/overlaypanel';
import Paginator from 'primevue/paginator';
import Panel from 'primevue/panel';
import PanelMenu from 'primevue/panelmenu';
import Password from 'primevue/password';
import PickList from 'primevue/picklist';
import ProgressBar from 'primevue/progressbar';
import ProgressSpinner from 'primevue/progressspinner';
import Rating from 'primevue/rating';
import RadioButton from 'primevue/radiobutton';
import Ripple from 'primevue/ripple';
import Row from 'primevue/row';
import SelectButton from 'primevue/selectbutton';
import ScrollPanel from 'primevue/scrollpanel';
import ScrollTop from 'primevue/scrolltop';
import Skeleton from 'primevue/skeleton';
import Slider from 'primevue/slider';
import Sidebar from 'primevue/sidebar';
import SpeedDial from 'primevue/speeddial';
import SplitButton from 'primevue/splitbutton';
import Splitter from 'primevue/splitter';
import SplitterPanel from 'primevue/splitterpanel';
import Steps from 'primevue/steps';
import StyleClass from 'primevue/styleclass';
import TabMenu from 'primevue/tabmenu';
import TieredMenu from 'primevue/tieredmenu';
import Textarea from 'primevue/textarea';
import Toast from 'primevue/toast';
import ToastService from 'primevue/toastservice';
import Toolbar from 'primevue/toolbar';
import TabView from 'primevue/tabview';
import TabPanel from 'primevue/tabpanel';
import Tag from 'primevue/tag';
import Terminal from 'primevue/terminal';
import Timeline from 'primevue/timeline';
import ToggleButton from 'primevue/togglebutton';
import Tooltip from 'primevue/tooltip';
import Tree from 'primevue/tree';
import TreeSelect from 'primevue/treeselect';
import TreeTable from 'primevue/treetable';
import TriStateCheckbox from 'primevue/tristatecheckbox';
import VirtualScroller from 'primevue/virtualscroller';

import CodeHighlight from '@/Components/CodeHighlight.vue';
import BlockViewer from '@/Components/BlockViewer.vue';

import AppLayout from "@/Layouts/AppLayout.vue";

import '../css/app.scss'; // PrimeVue theme can be customized in app.scss

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

// Booting Inertia app via "createInertiaApp()" that will initialize
// the client-side framework with the base/root Inertia "App" component.
createInertiaApp({

    // By default, Inertia assumes that your application's root template has a root element with an id of "app".
    // If your application's root element has a different id, you can provide it using the id property.
    // id: 'my-app',

    title: (title) => `${title} - ${appName}`,

    // The resolve callback tells Inertia how to load a page component.
    // It receives a page name (string), and returns a page component module.
    // How you implement this callback depends on which bundler (Vite or Webpack) you're using.
    // Note: By default we recommend eager loading your components (by passing { eager: true }
    // as 2nd argument to following .glob() function), which will result in a single JavaScript bundle.
    // However, if you'd like to lazy-load your components, code splitting strategy can be used
    resolve: (name) => {
        const page = resolvePageComponent(
            `./Pages/${name}.vue`,
            import.meta.glob<DefineComponent>('./Pages/**/*.vue')
        )
        page.then((module) => {
            // following two lines show how to conditionally apply layout
            // const layout = name.startsWith('auth/') ? LayoutAuth : LayoutMain
            // page.default.layout = page.default.layout || layout
            module.default.layout = module.default.layout || AppLayout;
        })
        return page;
    },

    // The setup callback receives everything necessary to initialize the
    // client-side framework, including the root Inertia App component
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue, Ziggy)

            // Global configuration options of the PrimeVue components are set here
            .use(PrimeVue, {
                // Ripple is an optional animation for the supported components such as buttons
                ripple: true
            })
            .use(ToastService)
            .use(DialogService)
            .use(ConfirmationService)

            .directive('tooltip', Tooltip)
            .directive('badge', BadgeDirective)
            .directive('ripple', Ripple)
            .directive('styleclass', StyleClass)

            .component('CodeHighlight', CodeHighlight)
            .component('BlockViewer', BlockViewer)
            .component('Accordion', Accordion)
            .component('AccordionTab', AccordionTab)
            .component('AutoComplete', AutoComplete)
            .component('Avatar', Avatar)
            .component('AvatarGroup', AvatarGroup)
            .component('Badge', Badge)
            .component('BlockUI', BlockUI)
            .component('Breadcrumb', Breadcrumb)
            .component('Button', Button)
            .component('Calendar', Calendar)
            .component('Card', Card)
            .component('Chart', Chart)
            .component('Carousel', Carousel)
            .component('CascadeSelect', CascadeSelect)
            .component('Checkbox', Checkbox)
            .component('Chip', Chip)
            .component('Chips', Chips)
            .component('ColorPicker', ColorPicker)
            .component('Column', Column)
            .component('ColumnGroup', ColumnGroup)
            .component('ConfirmDialog', ConfirmDialog)
            .component('ConfirmPopup', ConfirmPopup)
            .component('ContextMenu', ContextMenu)
            .component('DataTable', DataTable)
            .component('DataView', DataView)
            .component('DataViewLayoutOptions', DataViewLayoutOptions)
            .component('DeferredContent', DeferredContent)
            .component('Dialog', Dialog)
            .component('Divider', Divider)
            .component('Dock', Dock)
            .component('Dropdown', Dropdown)
            .component('DynamicDialog', DynamicDialog)
            .component('Fieldset', Fieldset)
            .component('FileUpload', FileUpload)
            .component('Galleria', Galleria)
            .component('Image', Image)
            .component('InlineMessage', InlineMessage)
            .component('Inplace', Inplace)
            .component('InputMask', InputMask)
            .component('InputNumber', InputNumber)
            .component('InputSwitch', InputSwitch)
            .component('InputText', InputText)
            .component('Knob', Knob)
            .component('Listbox', Listbox)
            .component('MegaMenu', MegaMenu)
            .component('Menu', Menu)
            .component('Menubar', Menubar)
            .component('Message', Message)
            .component('MultiSelect', MultiSelect)
            .component('OrderList', OrderList)
            .component('OrganizationChart', OrganizationChart)
            .component('OverlayPanel', OverlayPanel)
            .component('Paginator', Paginator)
            .component('Panel', Panel)
            .component('PanelMenu', PanelMenu)
            .component('Password', Password)
            .component('PickList', PickList)
            .component('ProgressBar', ProgressBar)
            .component('ProgressSpinner', ProgressSpinner)
            .component('RadioButton', RadioButton)
            .component('Rating', Rating)
            .component('Row', Row)
            .component('SelectButton', SelectButton)
            .component('ScrollPanel', ScrollPanel)
            .component('ScrollTop', ScrollTop)
            .component('Slider', Slider)
            .component('Sidebar', Sidebar)
            .component('Skeleton', Skeleton)
            .component('SpeedDial', SpeedDial)
            .component('SplitButton', SplitButton)
            .component('Splitter', Splitter)
            .component('SplitterPanel', SplitterPanel)
            .component('Steps', Steps)
            .component('TabMenu', TabMenu)
            .component('TabView', TabView)
            .component('TabPanel', TabPanel)
            .component('Tag', Tag)
            .component('Textarea', Textarea)
            .component('Terminal', Terminal)
            .component('TieredMenu', TieredMenu)
            .component('Timeline', Timeline)
            .component('Toast', Toast)
            .component('Toolbar', Toolbar)
            .component('ToggleButton', ToggleButton)
            .component('Tree', Tree)
            .component('TreeSelect', TreeSelect)
            .component('TreeTable', TreeTable)
            .component('TriStateCheckbox', TriStateCheckbox)
            .component('VirtualScroller', VirtualScroller)

            .mount(el);
    },

    // If you're using a custom progress indicator, you can disable the default progress
    // indicator by setting the "progress" property to "false" instead of passing an object
    // progress: false,
    progress: {
        color: '#4B5563',
    },

});
