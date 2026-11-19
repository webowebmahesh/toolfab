<?php
/**
 * TOOLFAB TOWERS — corporate website (single-file PHP), premium white edition.
 * Pages: ?p=home|about|towers|verticals|quality|clients|projects|global|achievements|careers|contact
 * Assets: assets/video, assets/img, assets/logo
 */

$site = [
    'tagline' => 'Engineering Today. Sustaining Tomorrow.',
    'phone'   => '+91 98429 07771',
    'email'   => 'info@toolfabengg.in',
    'hr'      => 'hr2@toolfabengg.in',
    'wa'      => '919842907771',
];

$pages = [
    'home'         => 'Home',
    'about'        => 'About',
    'towers'       => 'Wind Tower Solutions',
    'verticals'    => 'Engineering & Fabrication',
    'quality'      => 'Certifications',
    'clients'      => 'Clients',
    'projects'     => 'Projects',
    'global'       => 'Global Reach',
    'achievements' => 'Achievements',
    'careers'      => 'Careers',
    'contact'      => 'Contact us',
];
/* Group company pages (Groups menu). 'g' points at the $group row below. */
$companies = [
    'toolfab-engineering' => [
        'g' => 0, 'short' => 'Toolfab Engineering', 'district' => 'Tiruchirappalli', 'state' => 'Tamil Nadu',
        'title' => 'Toolfab Engineering <span class="serif">Industries.</span>',
        'lead'  => 'The group’s head office and first plant — where TOOLFAB began in 1995, and where tubular and hybrid wind towers, tower internals and heavy structures are built today.',
        'statement' => ['Where it began', 'Since <b>1995</b>, Tiruchirappalli is where TOOLFAB began — the head office and first plant, where flat plate becomes <em>multi-MW wind towers.</em>'],
        'hero' => 'assets/img/hq/plant-trichy-aerial.webp',
        'imgs' => ['assets/img/hq/plant-trichy-wide-sm.webp', 'assets/img/hq/control-panel-sm.webp', 'assets/img/hq/tower-shell-sm.webp', 'assets/img/hq/flange-welding-sm.webp'],
        'focus' => [
            ['tower', 'Tubular wind towers', 'Rolled-and-welded conical steel towers up to 5.3 MW, with machined flanges and full surface protection.', 'assets/img/hq/raw-section.webp'],
            ['gear', 'Hybrid towers & internals', 'Hybrid tower sections plus complete internals — platforms, ladders, cable supports and pre-assembled kits.', 'assets/img/hq/tower-internals.webp'],
            ['plant', 'Heavy structures & boilers', 'Boiler pressure parts and heavy structural steel from the same qualified shop floors.', 'assets/img/hq/shop-floor.webp'],
        ],
        'caps' => ['Head office & engineering', 'CNC plate cutting', 'Heavy plate rolling', 'SAW longitudinal & circ. seams', 'Blasting & painting', 'NDT & dimensional inspection'],
        'side' => 'assets/img/hq/head-office.webp',
    ],
    'toolfab-renewable' => [
        'g' => 1, 'short' => 'Toolfab Renewable', 'district' => 'Ballari', 'state' => 'Karnataka',
        'title' => 'Toolfab Renewable Energy <span class="serif">&amp; Infra.</span>',
        'lead'  => 'The group’s second plant in Ballari — building multi-MW wind tower sections alongside bridges and infrastructure steel for a growing nation.',
        'statement' => ['Towers & infrastructure', 'In Ballari, TOOLFAB builds <b>multi-MW tower sections</b>, bridges and the <em>infrastructure steel</em> that carries a growing nation.'],
        'hero' => 'assets/img/hq/plant-ballari-aerial.webp',
        'imgs' => ['assets/img/hq/inspection-team-sm.webp', 'assets/img/hq/plate-rolling-sm.webp', 'assets/img/hq/engineer-pointing-sm.webp', 'assets/img/hq/operators-sm.webp'],
        'focus' => [
            ['tower', 'Multi-MW tower sections', 'Tubular tower sections fabricated, finished and dispatched for multi-MW wind turbine platforms.', 'assets/img/hq/section-yard.webp'],
            ['trace', 'Railway & road bridges', 'Open-web girders and road over-bridges engineered for strength and a long service life.', 'assets/img/hq/bridge-railway.webp'],
            ['plant', 'Infrastructure steel', 'High-speed rail trusses, airport structures and heavy steel for national infrastructure.', 'assets/img/hq/bullet-train-truss.webp'],
        ],
        'caps' => ['Tower section fabrication', 'Bridge girder fabrication', 'Trial assembly at works', 'Qualified welding procedures', 'Surface protection', 'Road-ready dispatch'],
        'side' => 'assets/img/hq/plant-facade.webp',
    ],
    'toolfab-renewx' => [
        'g' => 2, 'short' => 'Toolfab RenewX', 'district' => 'Kachchh', 'state' => 'Gujarat',
        'title' => 'Toolfab <span class="serif">RenewX.</span>',
        'lead'  => 'The group’s third plant in Kachchh — close to India’s west-coast wind belt and built for the next generation of modular wind towers.',
        'statement' => ['Next-generation towers', 'On India’s west-coast wind belt, Kachchh is home to TOOLFAB RenewX — built for <b>7 MW modular towers</b> and <em>the next generation of wind.</em>'],
        'hero' => 'assets/img/hq/kachchh-campus.webp',
        'imgs' => ['assets/img/hq/section-yard-sm.webp', 'assets/img/hq/painted-section-sm.webp', 'assets/img/hq/yard-trucks-sm.webp', 'assets/img/hq/dispatch-trucks-sm.webp'],
        'focus' => [
            ['bolt', '7 MW modular towers', 'India’s only 7 MW modular steel towers — segmented shells that reach next-generation hub heights.', 'assets/img/hq/modular-tower-erection.webp'],
            ['globe', 'Close to the wind belt', 'Located near Gujarat’s west-coast wind farms and ports, cutting the distance from plant to site.', 'assets/img/hq/kachchh-shed.webp'],
            ['tower', 'Road-ready segments', 'Modular sections sized for standard road transport and fast erection on site.', 'assets/img/hq/dispatch-road.webp'],
        ],
        'caps' => ['Modular shell fabrication', 'Segment bolting & fit-up', 'Higher hub-height designs', 'Qualified welding procedures', 'Surface protection', 'Export-ready packing'],
        'side' => 'assets/img/hq/kachchh-welcome.webp',
    ],
];
$p = $_GET['p'] ?? 'home';
if (!isset($pages[$p]) && !isset($companies[$p])) $p = 'home';
$isCo = isset($companies[$p]);

/* ---------------------------------------------------------------- content */
$group = [
    ['Toolfab Engineering Industries (P) Ltd', 'Tiruchirappalli, Tamil Nadu – 620015', 'Head Office · Plant I', 'Tubular & hybrid wind towers, tower internals and heavy structures.', 'www.toolfabengg.in', 'assets/img/hq/plant-trichy-aerial-sm.webp', 'Toolfab Engineering Industries, Tiruchirappalli, Tamil Nadu 620015', 'info@toolfabengg.in'],
    ['Toolfab Renewable Energy & Infra Pvt. Ltd.', 'Ballari, Karnataka – 577540', 'Plant II', 'Multi-MW tower sections, bridges and infrastructure steel.', 'www.toolfab.in', 'assets/img/hq/plant-ballari-aerial-sm.webp', 'Toolfab Renewable Energy, Ballari, Karnataka 577540', 'info@toolfab.in'],
    ['Toolfab RenewX Pvt. Ltd.', 'Kachchh, Gujarat – 370140', 'Plant III', 'Next-generation modular towers close to India’s west-coast wind belt.', 'www.toolfabrx.in', 'assets/img/hq/kachchh-campus-sm.webp', 'Toolfab RenewX, Kachchh, Gujarat 370140', 'info@toolfabrx.in'],
];

$towers = [
    'lattice' => ['Lattice Wind Towers', 2.1, 'Engineered steel lattice structures designed to support wind turbine installations through optimised structural design, fabrication precision, and efficient transportation.', ['2.1 MW class', 'Galvanised bolted sections', 'Low foundation loads', 'Easy transport & erection']],
    'tubular' => ['Tubular Wind Towers', 5.3, 'Large-scale rolled and welded steel towers manufactured with precision-engineered shell sections, flanges, internal components, and protective coating systems.', ['Up to 5.3 MW', 'Plate rolling & flange welding', 'EN 1090-2 execution', 'Internals pre-assembled']],
    'modular' => ['Modular Wind Towers', 7.0, 'Advanced segmented tower solutions designed to address transportation constraints, installation requirements, and the growing demands of next-generation wind turbine platforms. Our modular tower capabilities extend up to 7 MW, subject to specific turbine design and project requirements.', ['7 MW class · only manufacturer in India', 'Road-transportable segments', 'Higher hub heights', 'Engineered & prototyped in-house']],
];

$usps = [
    ['30+', 'Years of heavy engineering fabrication', 'Three decades of engineering since 1995 — wind towers since 2002.', 'years'],
    ['2000+', 'Windmill towers supplied', 'Tower platforms from 1.0 MW to 7.0 MW for wind farms in India and abroad.', 'tower'],
    ['7 MW', 'Only Manufacturer in India', 'Of modular steel wind towers up to 7 MW.', 'bolt'],
    ['3', 'Strategic locations', 'Tamil Nadu, Karnataka and Gujarat — close to India’s wind belts.', 'plant'],
    ['5', 'International certifications', 'ISO 9001, ISO 14001, ISO 45001, EN 1090-2 and EN ISO 3834-2.', 'shield'],
    ['100%', 'Plate-to-flange traceability', 'Qualified welding procedures and full traceability on every section.', 'trace'],
    ['In-house', 'Engineering & prototyping', 'New tower concepts designed, prototyped and validated on our own floors.', 'gear'],
    ['Global', 'Supply & logistics', 'Road-ready segments and export packing for projects on four continents.', 'globe'],
];

$certs = [
    ['ISO 9001:2015', 'Quality Management System', 'A certified quality management system governs every stage — from enquiry and design review to fabrication, inspection and dispatch — so every tower section is built right the first time.', ['Documented processes & controls', 'Customer-focused quality planning', 'Continual improvement & audits'], 'assets/img/certs/iso-9001.webp'],
    ['ISO 14001:2015', 'Environmental Management System', 'Our plants operate under a certified environmental management system that controls emissions, waste and resource use across cutting, welding, blasting and painting.', ['Waste & emission control', 'Responsible coating systems', 'Resource-efficient operations'], 'assets/img/certs/iso-14001.webp'],
    ['ISO 45001:2018', 'Occupational Health and Safety Management System', 'Heavy fabrication demands uncompromising safety. ISO 45001 frames how we protect every fabricator, welder and engineer on our shop floors and sites.', ['Hazard identification & risk control', 'Trained & certified workforce', 'Zero-harm culture'], 'assets/img/certs/iso-45001.webp'],
    ['EN 1090-2', 'Execution of Steel Structures', 'Certified execution of structural steel to the European standard — the benchmark for wind tower shells, bridges and load-bearing structures supplied worldwide.', ['Execution class compliance', 'Factory production control', 'CE-ready structural steel'], 'assets/img/certs/en-1090-2.webp'],
    ['EN ISO 3834-2', 'Quality Requirements for Fusion Welding', 'Comprehensive quality requirements for fusion welding — qualified procedures, qualified welders and controlled consumables on every seam.', ['Qualified WPS / PQR', 'Certified welders & operators', 'NDT & weld traceability'], 'assets/img/certs/en-iso-3834-2.webp'],
];

$verticals = [
    ['Boiler Components & Pressure Parts', 'Fabricated boiler components, pressure parts and heavy shells built to code with qualified welding and inspection.', 'assets/img/hq/flange-welding-sm.webp'],
    ['Heavy Structural Steel Fabrication', 'Columns, girders, trusses and plant structures fabricated, trial-assembled and finished at works.', 'assets/img/hq/shop-floor-sm.webp'],
    ['Railway & Road Bridge Structures', 'Engineered steel bridge structures for railway and road connectivity, built for strength, durability and demanding infrastructure applications.', 'assets/img/hq/bridge-railway.webp'],
    ['High-Speed Rail Infrastructure', 'Precision-engineered steel structures supporting India’s first bullet train project, enabling next-generation high-speed rail infrastructure.', 'assets/img/hq/bullet-train-truss.webp'],
    ['Airport & Industrial Structures', 'Large-scale structural steel solutions for airport terminals and aviation infrastructure, combining precision fabrication with complex project execution.', 'assets/img/hq/airport-terminal.webp'],
    ['Floating Pontoon & Barge Structures', 'Engineered floating platforms designed for stability, durability and high performance — supporting marine and industrial operations.', 'assets/img/hq/pontoon-barge.webp'],
    ['Custom-Engineered Steel Fabrication', 'Project-specific steel fabrication to your drawings — from engineering and fabrication to inspection and finishing.', 'assets/img/hq/plasma-cutting-sm.webp'],
];

$milestones = [
    ['1995', 'Founded in Tiruchirappalli', 'Toolfab Engineering Industries begins as a conventional heavy-fabrication shop.'],
    ['2002', 'Focus on wind', 'Manufacturing pivots to multi-MW wind turbine towers for India’s growing wind sector.'],
    ['2000+', 'Towers delivered', 'Tower platforms from 1.0 MW to 3.3 MW supplied for wind farms across India and abroad.'],
    ['Ballari', 'Second plant', 'Toolfab Renewable Energy & Infra adds capacity for towers, bridges and infrastructure steel.'],
    ['Kachchh', 'Toolfab RenewX', 'A third plant near the west-coast wind belt for next-generation towers.'],
    ['7 MW', 'Modular towers', 'India’s only manufacturer of 7 MW modular steel towers.'],
];

$directors = [
    ['C. Madan Mohan', 'Managing Director', 'madan@toolfabengg.in', ''],
    ['C. Harshavardhan', 'Joint Managing Director', 'harsha@toolfabengg.in', ''],
    ['J. Sagayam', 'Executive Director', 'sagayam@toolfabengg.in', '+91 98429 07771'],
];

$process = [
    ['Plate cutting', 'CNC plasma & oxy-fuel profiling of heavy plate.', 'assets/img/hq/cnc-cutting-sm.webp'],
    ['Rolling', 'Conical shells rolled on heavy-duty plate rollers.', 'assets/img/hq/plate-rolling-sm.webp'],
    ['Welding', 'Submerged-arc longitudinal & circumferential seams.', 'assets/img/hq/welder-blue-sm.webp'],
    ['Fit-up & flanges', 'Flange fit-up, sectional assembly and dimensional control.', 'assets/img/hq/tower-shell-sm.webp'],
    ['Surface protection', 'Blasting and multi-coat painting systems.', 'assets/img/hq/painted-section-sm.webp'],
    ['Inspection', 'NDT, dimensional checks and full documentation.', 'assets/img/hq/inspection-team-sm.webp'],
    ['Dispatch', 'Road-ready sections delivered to site.', 'assets/img/hq/dispatch-trucks-sm.webp'],
];

/* Projects & achievements (3 cards per row, each with its own "Read more" page).
   To add one: copy an entry, give it a new slug, and point the image at a photo in assets/img/projects/.
   slug => [title, category, image, short description, [paragraphs], [[label, value], ...]] */
$projects = [
    'modular-7mw' => ['7 MW Modular Wind Towers', 'Wind energy', 'assets/img/hq/modular-tower-erection.webp',
        'India’s only 7 MW modular steel towers — engineered and fabricated in-house for next-generation hub heights.',
        ['TOOLFAB is the only manufacturer in India building 7 MW modular steel wind towers. The tower is divided into segmented shells that are fabricated, inspected and coated in our plants, then assembled on site.',
         'Because every segment is sized for standard road transport, the design reaches higher hub heights without the logistics limits of conventional large-diameter sections.'],
        [['Platform', '7.0 MW'], ['Tower type', 'Modular steel'], ['Highlight', 'Only Manufacturer in India'], ['Scope', 'Engineering, fabrication, coating']]],
    'tubular-towers' => ['Multi-MW Tubular Towers', 'Wind energy', 'assets/img/hq/section-yard.webp',
        '2000+ towers across nine platforms from 1.0 MW to 5.3 MW, delivered with complete internals.',
        ['Rolled-and-welded conical steel towers have been at the heart of TOOLFAB since 2002. Plates are CNC cut, rolled, joined with submerged-arc seams and fitted with machined flanges.',
         'Each section is blasted, painted and fitted with internals — platforms, ladders and cable supports — before road-ready dispatch to wind farms in India and abroad.'],
        [['Platforms', '1.0 – 5.3 MW'], ['Delivered', '2000+ towers'], ['Standard', 'EN 1090-2'], ['Scope', 'Fabrication, internals, dispatch']]],
    'high-speed-rail' => ['High-Speed Rail Trusses', 'Railways', 'assets/img/hq/bullet-train-truss.webp',
        'Precision steel trusses for India’s first high-speed rail corridor, built with full traceability.',
        ['For India’s first high-speed rail corridor, TOOLFAB fabricated precision steel trusses where tolerances are measured in millimetres over long spans.',
         'Qualified welding procedures, NDT and a complete quality dossier for every member gave the project full traceability from plate to final assembly.'],
        [['Sector', 'High-speed rail'], ['Product', 'Steel trusses'], ['Quality', 'Full traceability'], ['Scope', 'Fabrication, NDT, documentation']]],
    'bridges' => ['Railway & Road Bridges', 'Infrastructure', 'assets/img/hq/bridge-railway.webp',
        'Open-web girders and road over-bridges engineered for strength and a long service life.',
        ['Open-web girders and road over-bridge steel are fabricated on the same heavy-plate lines that build our wind towers.',
         'Girders are trial-assembled at works, checked dimensionally and protected with multi-coat paint systems before dispatch to site.'],
        [['Sector', 'Rail & road'], ['Product', 'Bridge girders'], ['Process', 'Trial assembly at works'], ['Scope', 'Fabrication, coating, dispatch']]],
    'airport' => ['Airport Structures', 'Aviation', 'assets/img/hq/airport-terminal.webp',
        'Long-span roof steel, space frames and site-ready modules for aviation infrastructure.',
        ['Airport terminals demand long spans, clean geometry and tight erection schedules. TOOLFAB supplies roof steel, space frames and modules that arrive ready to lift.',
         'Every module is fabricated and inspected in our plants, reducing work at height and time on site.'],
        [['Sector', 'Aviation'], ['Product', 'Roof steel & space frames'], ['Delivery', 'Site-ready modules'], ['Scope', 'Fabrication, inspection, coating']]],
    'pontoon' => ['Floating Pontoon Barges', 'Marine', 'assets/img/hq/pontoon-barge.webp',
        'Modular floating platforms with marine-grade coatings and custom load ratings.',
        ['Modular pontoon barges are built as watertight steel units that join into floating platforms of the size the project needs.',
         'Marine-grade coating systems protect every unit, and load ratings are engineered to each customer’s requirement.'],
        [['Sector', 'Marine'], ['Product', 'Pontoon barges'], ['Design', 'Modular, custom load ratings'], ['Scope', 'Fabrication, marine coating']]],
];

$achievements = [
    'only-7mw' => ['India’s only 7 MW modular towers', 'Technology', 'assets/img/hq/dispatch-trucks.webp',
        'TOOLFAB is the only manufacturer in India of 7 MW modular steel wind towers.',
        ['As turbines grow larger, towers must reach higher. TOOLFAB engineered and prototyped a modular steel tower for the 7 MW class — the only one made in India.',
         'The segmented design keeps every piece within standard road limits, bringing next-generation hub heights to Indian wind farms.'],
        [['Class', '7.0 MW'], ['Status', 'Only Manufacturer in India'], ['Developed', 'In-house']]],
    'towers-2000' => ['2000+ wind towers delivered', 'Delivery', 'assets/img/hq/yard-aerial.webp',
        'More than two thousand towers across nine platforms, from 1.0 MW to 7.0 MW.',
        ['Since turning to wind in 2002, TOOLFAB has delivered more than two thousand towers to wind farms in India and abroad.',
         'Nine tower platforms — from 1.0 MW to 7.0 MW — have been built on our shop floors, each with complete internals.'],
        [['Towers', '2000+'], ['Platforms', '9'], ['Range', '1.0 – 7.0 MW']]],
    'high-speed-rail' => ['Steel for India’s first bullet train', 'Infrastructure', 'assets/img/hq/bullet-train-truss.webp',
        'Precision trusses for India’s first high-speed rail corridor.',
        ['TOOLFAB’s fabrication standards earned it a role in India’s first high-speed rail corridor, supplying precision steel trusses.',
         'It is a mark of the same quality system that governs every wind tower we build.'],
        [['Sector', 'High-speed rail'], ['Product', 'Steel trusses']]],
    'certifications' => ['Five international certifications', 'Quality', 'assets/img/hq/inspection-team.webp',
        'ISO 9001, ISO 14001, ISO 45001, EN 1090-2 and EN ISO 3834-2 — independently audited.',
        ['Quality, environment, safety, structural steel execution and fusion welding — each is certified to an international standard and audited independently.',
         'Together they let TOOLFAB supply customers in Europe and worldwide with full confidence.'],
        [['Certifications', '5'], ['Includes', 'EN 1090-2, EN ISO 3834-2']]],
    'four-continents' => ['Supplying four continents', 'Global', 'assets/img/hq/dispatch-road.webp',
        'Towers and engineered steel exported to North America, Europe, the Middle East and Asia.',
        ['Built in India, TOOLFAB steel stands on four continents — from the USA and Canada to Portugal, Germany, Lithuania, Turkey, Oman, Sri Lanka and Vietnam.',
         'Road-ready segments and export packing get every section to site in the condition it left our plant.'],
        [['Continents', '4'], ['Countries', '9']]],
    'thirty-years' => ['30+ years of excellence', 'Legacy', 'assets/img/hq/plant-flags.webp',
        'From a heavy-fabrication shop in 1995 to India’s wind-tower specialist.',
        ['TOOLFAB began in Tiruchirappalli in 1995 as a conventional heavy-fabrication shop. In 2002 it turned to wind, and it has grown into a group of three companies and three plants.',
         'Three decades on, the promise is unchanged: steel that is built right.'],
        [['Founded', '1995'], ['Wind since', '2002'], ['Plants', '3']]],
];

/* Careers: job posts (sample openings — edit freely). The application form is UI only for now. */
$jobs = [
    ['Welder – SAW / MIG', 'Production', 'Tiruchirappalli', 'Full-time', '2–5 years', 'Submerged-arc and MIG welding of heavy plate and tower sections to qualified WPS.'],
    ['Fitter – Heavy Fabrication', 'Production', 'Ballari', 'Full-time', '2–6 years', 'Fit-up of shells, flanges and structures from drawings with tight dimensional control.'],
    ['QA / QC Engineer', 'Quality', 'Tiruchirappalli', 'Full-time', '3–6 years', 'Inspection planning, welding quality, dimensional checks and quality dossiers.'],
    ['NDT Technician – UT / MT Level II', 'Quality', 'Kachchh', 'Full-time', '2–5 years', 'Ultrasonic and magnetic particle testing of welds on tower sections.'],
    ['Design Engineer – Wind Towers', 'Engineering', 'Tiruchirappalli', 'Full-time', '3–8 years', 'Tower detailing, drawings and prototype support for new tower concepts.'],
    ['Graduate Engineer Trainee', 'Engineering', 'All plants', 'Trainee', 'Freshers', 'Mechanical / production graduates — structured training on live projects.'],
];

$platforms = ['1.0', '1.25', '1.5', '2.0', '2.1', '2.8', '3.3', '5.3', '7.0'];

/* Clients, grouped as on the approved client sheet. Logos live in assets/img/clients/oem|ipp/. */
$clientGroups = [
    'OEM Clients' => [['Envision', 'oem/envision'], ['Enercon', 'oem/enercon'], ['Adani', 'oem/adani'], ['Suzlon', 'oem/suzlon'], ['SANY', 'oem/sany'],
                      ['Venwind Refex', 'oem/venwind-refex'], ['Senvion', 'oem/senvion'], ['Vayona Energy', 'oem/vayona'], ['Inox Wind', 'oem/inox-wind'], ['Power Wind', 'oem/power-wind']],
    'IPP Clients' => [['Sembcorp', 'ipp/sembcorp'], ['Hero Futures', 'ipp/hero-futures'], ['Evren', 'ipp/evren'], ['JSW', 'ipp/jsw'],
                      ['ReNfra Energy', 'ipp/renfra-energy'], ['ReNew Power', 'ipp/renew-power'], ['RP-Sanjiv Goenka Group', 'ipp/rpsg-group']],
];
$clients = [];
foreach ($clientGroups as $gName => $list) foreach ($list as [$cn, $cf]) $clients[] = ['name' => $cn, 'logo' => 'assets/img/clients/' . $cf . '.webp', 'mw' => strtok($gName, ' ')];

/* Social accounts (meeting point 1) — replace '#' with the official profile URLs. */
$social = ['LinkedIn' => '#', 'X' => '#', 'Instagram' => '#', 'Facebook' => '#', 'YouTube' => '#', 'Naukri' => '#'];

$item = null;   /* ?p=projects&item=slug  /  ?p=achievements&item=slug */
if (($p === 'projects' || $p === 'achievements') && isset($_GET['item'])) {
    $item = ($p === 'projects' ? $projects : $achievements)[(string)$_GET['item']] ?? null;
}

$destinations = [
    ['USA', -98, 39], ['Canada', -106, 56], ['Portugal', -8.2, 39.6], ['Germany', 10.4, 51.2], ['Lithuania', 23.9, 55.2],
    ['Turkey', 35.2, 39.0], ['Oman', 57.5, 21.5], ['Sri Lanka', 80.7, 7.9], ['Vietnam', 106.3, 15.9],
];

/* ---------------------------------------------------------------- contact form */
$formStatus = null;
$old = ['name' => '', 'email' => '', 'company' => '', 'phone' => '', 'message' => ''];
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $p === 'contact') {
    foreach ($old as $k => $_) $old[$k] = trim((string)($_POST[$k] ?? ''));
    if ($old['name'] === '' || $old['message'] === '' || !filter_var($old['email'], FILTER_VALIDATE_EMAIL)) {
        $formStatus = ['error', 'Please enter your name, a valid email address and your requirement.'];
    } else {
        $line = sprintf("[%s] %s <%s> %s (%s): %s\n", date('c'), $old['name'], $old['email'], $old['phone'], $old['company'], str_replace(["\r", "\n"], ' ', $old['message']));
        @file_put_contents(__DIR__ . '/enquiries.log', $line, FILE_APPEND | LOCK_EX);
        $formStatus = ['success', 'Thank you, ' . $old['name'] . '. Our engineering team will respond shortly.'];
        $old = array_map(fn() => '', $old);
    }
}

/* ---------------------------------------------------------------- helpers */
function e($v): string { return htmlspecialchars((string)$v, ENT_QUOTES, 'UTF-8'); }
function url(string $p): string { return $p === 'home' ? './' : '?p=' . $p; }
function card3(string $page, string $slug, array $it, int $i): string {
    return '<a class="c3-card" href="' . url($page) . '&amp;item=' . e($slug) . '" data-label="' . e($it[0]) . '" data-rv style="--d:' . (.1 * ($i % 3)) . 's">'
        . '<div class="c3-img"><img src="' . e($it[2]) . '" alt="' . e($it[0]) . '" loading="lazy"><small>' . e($it[1]) . '</small></div>'
        . '<div class="c3-b"><h3>' . e($it[0]) . '</h3><p>' . e($it[3]) . '</p><span class="c3-more">Read more <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M4 12h15M13 6l6 6-6 6"/></svg></span></div></a>';
}
function clientGroupsHtml(array $groups): string {
    $h = '<div class="hclients">';
    foreach ($groups as $gName => $list) {
        $h .= '<div class="hcg"><div class="cg-tag sm" data-rv><span>' . e(strtoupper($gName)) . '</span></div><div class="hlogos ' . (count($list) > 8 ? 'n5' : 'n4') . '">';
        foreach ($list as $i => [$cn, $cf]) $h .= '<div class="hl" data-rv style="--d:' . (.05 * ($i % 5)) . 's" title="' . e($cn) . '"><img src="assets/img/clients/' . e($cf) . '.webp" alt="' . e($cn) . '" loading="lazy"></div>';
        $h .= '</div></div>';
    }
    return $h . '</div>';
}
function maps(string $q): string { return 'https://www.google.com/maps/search/?api=1&query=' . rawurlencode($q); }
$arrow = '<svg class="ar" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M4 12h15M13 6l6 6-6 6"/></svg>';

function icon(string $n): string {
    $i = [
        'years'  => '<circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/>',
        'tower'  => '<path d="M11 21l.6-12h.8L13 21M9 21h6"/><circle cx="12" cy="7" r="1.3"/><path d="M12 7l-.4-5M12 7l4.4 2.3M12 7l-4.4 2.4"/>',
        'bolt'   => '<path d="M13 2L4 14h7l-1 8 9-12h-7z"/>',
        'plant'  => '<path d="M3 21V10l5 3V10l5 3V6l8 4v11z"/><path d="M7 17h2M12 17h2M17 17h2"/>',
        'shield' => '<path d="M12 3l8 3v6c0 5-3.5 8-8 9-4.5-1-8-4-8-9V6z"/><path d="M8.5 12l2.5 2.5 4.5-5"/>',
        'trace'  => '<rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/><path d="M10 6.5h4.5a3 3 0 013 3V14"/>',
        'gear'   => '<circle cx="12" cy="12" r="3"/><path d="M12 2v3M12 19v3M4.9 4.9L7 7M17 17l2.1 2.1M2 12h3M19 12h3M4.9 19.1L7 17M17 7l2.1-2.1"/>',
        'globe'  => '<circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3c3 3.2 3 14.8 0 18M12 3c-3 3.2-3 14.8 0 18"/>',
        'pin'    => '<path d="M12 21s-7-6.2-7-11a7 7 0 0114 0c0 4.8-7 11-7 11z"/><circle cx="12" cy="10" r="2.5"/>',
        'phone'  => '<path d="M5 4h4l2 5-2.5 1.5a11 11 0 005 5L15 13l5 2v4a2 2 0 01-2 2A16 16 0 013 6a2 2 0 012-2"/>',
        'mail'   => '<rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/>',
        'users'  => '<circle cx="9" cy="8" r="3.2"/><path d="M3 20c0-3.3 2.7-6 6-6s6 2.7 6 6"/><path d="M16 4.6a3 3 0 010 6M18 14.6c1.8.8 3 2.6 3 4.4"/>',
        'award'  => '<circle cx="12" cy="9" r="6"/><path d="M8.6 13.9L7 22l5-3 5 3-1.6-8.1"/>',
        'brief'  => '<rect x="3" y="7" width="18" height="13" rx="2"/><path d="M9 7V5a2 2 0 012-2h2a2 2 0 012 2v2M3 13h18"/>',
        'image'  => '<rect x="3" y="4" width="18" height="16" rx="2"/><circle cx="8.5" cy="9.5" r="1.8"/><path d="M21 16l-5-5L5 20"/>',
        'upload' => '<path d="M12 16V4M7 9l5-5 5 5"/><path d="M4 16v3a2 2 0 002 2h12a2 2 0 002-2v-3"/>',
        'web'    => '<circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3a14 14 0 010 18M12 3a14 14 0 000 18"/>',
    ];
    return '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round">' . ($i[$n] ?? '') . '</svg>';
}

function socialIcon(string $n): string {
    $i = [
        'LinkedIn'  => '<path d="M4 9h3v11H4zM5.5 4a1.8 1.8 0 110 3.6 1.8 1.8 0 010-3.6zM10 9h3v1.6c.5-1 1.7-1.9 3.4-1.9 3.2 0 3.6 2.1 3.6 4.8V20h-3v-5.6c0-1.3 0-3-1.8-3s-2.2 1.4-2.2 2.9V20h-3z" fill="currentColor"/>',
        'X'         => '<path d="M4 4l16 16M20 4L4 20" stroke="currentColor" stroke-width="1.8"/>',
        'Instagram' => '<rect x="4" y="4" width="16" height="16" rx="5" stroke="currentColor" stroke-width="1.6" fill="none"/><circle cx="12" cy="12" r="3.6" stroke="currentColor" stroke-width="1.6" fill="none"/><circle cx="17" cy="7" r="1.1" fill="currentColor"/>',
        'Facebook'  => '<path d="M13.5 21v-7.5H16l.4-3h-2.9V8.7c0-.9.3-1.5 1.5-1.5h1.5V4.5c-.3 0-1.2-.1-2.2-.1-2.2 0-3.8 1.4-3.8 3.9v2.2H8v3h2.5V21z" fill="currentColor"/>',
        'YouTube'   => '<rect x="3" y="6" width="18" height="12" rx="3.5" fill="currentColor"/><path d="M10.5 9.5l4 2.5-4 2.5z" fill="#2f2f65"/>',
        'Naukri'    => '<path fill="currentColor" fill-rule="evenodd" d="M2 12a10 10 0 1 0 20 0a10 10 0 1 0-20 0ZM8.88 5.52a1.56 1.56 0 1 0 3.12 0a1.56 1.56 0 1 0-3.12 0ZM9.27 9.19L14.97 6.06L15.13 8.56L11.53 11.22L14.73 16.53L14.73 19.03L9.27 13.72Z"/>',
    ];
    return '<svg viewBox="0 0 24 24">' . ($i[$n] ?? '') . '</svg>';
}

/* Engineering line-drawings of the three tower technologies (scaled to capacity). */
function towerSvg(string $type): string {
    $cx = 140; $G = 520;
    [$top, $bl, $tl, $blade] = match ($type) {
        'lattice' => [250, 62, 9, 80],
        'tubular' => [150, 24, 11, 98],
        default   => [70, 30, 12, 112],
    };
    $L = fn(...$pts) => '<path pathLength="1" d="M' . implode(' L', array_map(fn($p) => round($p[0], 1) . ' ' . round($p[1], 1), $pts)) . '"/>';
    $xAt = fn($y, $side) => $cx + $side * ($bl + ($tl - $bl) * (($G - $y) / ($G - $top)));
    $s = '<g class="ln">' . $L([10, $G], [270, $G]);
    if ($type === 'lattice') {
        $s .= $L([$cx - $bl, $G], [$cx - $tl, $top]) . $L([$cx + $bl, $G], [$cx + $tl, $top]);
        $n = 9;
        for ($i = 0; $i < $n; $i++) {
            $y1 = $G - ($G - $top) * ($i / $n); $y2 = $G - ($G - $top) * (($i + 1) / $n);
            $s .= $L([$xAt($y1, -1), $y1], [$xAt($y2, 1), $y2]) . $L([$xAt($y1, 1), $y1], [$xAt($y2, -1), $y2]) . $L([$xAt($y2, -1), $y2], [$xAt($y2, 1), $y2]);
        }
    } else {
        $s .= $L([$cx - $bl, $G], [$cx - $tl, $top], [$cx + $tl, $top], [$cx + $bl, $G]);
        $cuts = $type === 'tubular' ? [.27, .52, .76] : [.16, .32, .48, .63, .78, .9];
        foreach ($cuts as $f) { $y = $G - ($G - $top) * $f; $s .= $L([$xAt($y, -1), $y], [$xAt($y, 1), $y]); }
        if ($type === 'modular') foreach ([-.38, .38] as $k) $s .= $L([$cx + $k * $bl, $G], [$cx + $k * $tl, $top]);
        $s .= $L([$cx - 5, $G], [$cx - 5, $G - 16], [$cx + 5, $G - 16], [$cx + 5, $G]);
    }
    $s .= $L([256, $G], [256, $top - 8]) . $L([250, $top - 8], [262, $top - 8]) . $L([250, $G], [262, $G]) . '</g>';
    $hy = $top - 12;
    $s .= '<rect class="nac" x="' . ($cx - 8) . '" y="' . ($top - 19) . '" width="30" height="12" rx="3"/>';
    $s .= '<g class="rotor" style="transform-origin:' . ($cx - 9) . 'px ' . $hy . 'px">';
    foreach ([0, 120, 240] as $a) {
        $s .= '<path class="bl" transform="rotate(' . $a . ' ' . ($cx - 9) . ' ' . $hy . ')" d="M' . ($cx - 11.5) . ' ' . $hy . ' L' . ($cx - 10.4) . ' ' . ($hy - $blade) . ' Q' . ($cx - 8.6) . ' ' . ($hy - $blade - 2) . ' ' . ($cx - 7.6) . ' ' . ($hy - $blade * .97) . ' L' . ($cx - 6.2) . ' ' . $hy . ' Z"/>';
    }
    $s .= '<circle class="hub" cx="' . ($cx - 9) . '" cy="' . $hy . '" r="4.4"/></g>';
    return '<svg class="tower-svg t-' . $type . '" viewBox="0 -70 280 600" role="img" aria-label="' . e(ucfirst($type)) . ' tower drawing">' . $s . '</svg>';
}

/* Pinned statement: words light up while the section holds; photos drift past at their own depth. */
function statement(string $eyebrow, string $html, array $imgs): string {
    $speeds = ['.55', '.85', '.7', '.45'];
    $o = '<section class="mani" aria-label="' . e($eyebrow) . '"><div class="mani-in">';
    foreach (array_slice($imgs, 0, 4) as $i => $src) $o .= '<div class="mani-img i' . ($i + 1) . '" data-ms="' . $speeds[$i] . '"><img src="' . e($src) . '" alt="" loading="lazy"></div>';
    return $o . '<div class="mani-c"><span class="eyebrow">' . e($eyebrow) . '</span><p class="mani-t">' . $html . '</p><span class="mani-sig"><i></i>TOOLFAB TOWERS<i></i></span></div></div></section>';
}

/* Animated 30+ mark (same animation as the GIF, served as a light looping video). */
function anim30(): string {
    return '<video class="anim30" src="assets/video/30-years.mp4" poster="assets/img/30-years-poster.jpg" autoplay muted loop playsinline preload="auto" aria-label="30+ Years of Excellence in Wind Towers animation"></video>';
}

function seal(string $cls = ''): string {
    return '<div class="seal ' . $cls . '"><svg class="seal-ring" viewBox="0 0 200 200" aria-hidden="true"><defs><path id="sr" d="M100 100m-86 0a86 86 0 1 1 172 0a86 86 0 1 1-172 0"/></defs><text textLength="536" lengthAdjust="spacing"><textPath href="#sr" textLength="536" lengthAdjust="spacing">SINCE 1995 • 30+ YEARS OF EXCELLENCE • IN WIND TOWERS • </textPath></text></svg><img src="assets/logo/30-years.svg" alt="30+ Years of Excellence in Wind Towers"></div>';
}
?>
<!doctype html>
<html lang="en" class="no-js">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<title><?= $p === 'home' ? 'TOOLFAB TOWERS — 30+ Years of Excellence in Wind Towers' : e($isCo ? $companies[$p]['short'] . ' · ' . $companies[$p]['district'] : ($item ? $item[0] : $pages[$p])) . ' | TOOLFAB TOWERS' ?></title>
<meta name="description" content="TOOLFAB TOWERS — 30+ years of excellence in wind towers. Global supplier of lattice, tubular and India’s only 7 MW modular wind turbine towers from three plants in India.">
<meta name="theme-color" content="#ffffff">
<link rel="icon" href="assets/logo/emblem.svg">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&family=Arimo:wght@400;500;600;700&display=swap" rel="stylesheet">
<script>document.documentElement.classList.replace('no-js','js');</script>
<style>
:root{
  --navy:#2f2f65;--navy-d:#1d1d45;--ink:#14142e;
  --yellow:#fff200;
  --paper:#f6f6f9;--paper-2:#efeff5;--white:#fff;
  --muted:#6f7088;--line:#e6e6ee;--line-2:#d9d9e4;
  --ease:cubic-bezier(.77,0,.18,1);--out:cubic-bezier(.16,1,.3,1);
  --pad:clamp(18px,5vw,88px);--maxw:1360px;--hdr:86px;
  --serif:'Manrope',system-ui,sans-serif;
}
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
html{-webkit-text-size-adjust:100%}
.lenis.lenis-smooth{scroll-behavior:auto!important}
body{font-family:'Manrope',system-ui,sans-serif;font-weight:400;color:var(--ink);background:var(--white);line-height:1.65;-webkit-font-smoothing:antialiased;overflow-x:hidden}
img,video,svg{display:block;max-width:100%}
a{color:inherit;text-decoration:none}
button{font:inherit;color:inherit;background:none;border:0;cursor:pointer}
::selection{background:var(--yellow);color:var(--navy)}
.wrap{width:100%;max-width:var(--maxw);margin:0 auto;padding:0 var(--pad)}

/* type */
.eyebrow{display:inline-flex;align-items:center;gap:12px;font-size:.72rem;font-weight:600;letter-spacing:.22em;text-transform:uppercase;color:var(--navy)}
.eyebrow::before{content:'';width:8px;height:8px;border-radius:50%;background:var(--yellow);box-shadow:0 0 0 1px rgba(47,47,101,.35)}
h1,h2,h3,h4{font-weight:600;line-height:1.08;letter-spacing:-.035em;color:var(--navy)}
.h-xl{font-size:clamp(2.8rem,6.4vw,6.2rem);letter-spacing:-.05em;line-height:1}
.h-l{font-size:clamp(2.1rem,4.2vw,3.9rem)}
.h-m{font-size:clamp(1.5rem,2.4vw,2.2rem)}
.serif{font-family:var(--serif);font-style:italic;font-weight:400;letter-spacing:-.01em;color:var(--navy)}
.lead{font-size:clamp(1.02rem,1.2vw,1.15rem);color:var(--muted);max-width:58ch;line-height:1.75}
.hl-y{background:linear-gradient(transparent 64%,var(--yellow) 64% 90%,transparent 90%);padding:0 .06em}

/* buttons */
.btn{position:relative;display:inline-flex;align-items:center;gap:12px;height:54px;padding:0 28px;border-radius:2px;font-weight:600;font-size:.88rem;letter-spacing:.01em;white-space:nowrap;overflow:hidden;isolation:isolate;transition:color .5s var(--out),border-color .5s}
.btn::before{content:'';position:absolute;inset:0;z-index:-1;border-radius:inherit;transform:scaleX(0);transform-origin:right;transition:transform .6s var(--ease)}
.btn:hover::before{transform:scaleX(1);transform-origin:left}
.btn .ar{width:17px;transition:transform .5s var(--out)}
.btn:hover .ar{transform:translateX(4px)}
.btn-n{background:var(--navy);color:#fff;box-shadow:0 18px 40px -22px rgba(47,47,101,.8)}
.hr-cta{display:flex;flex-wrap:wrap;align-items:center;gap:14px 26px;margin-top:30px}
.hr-mail{display:inline-flex;align-items:center;gap:12px;color:var(--navy);text-decoration:none}
.hr-mail i{width:44px;height:44px;flex:none;border-radius:50%;display:grid;place-items:center;background:#f3f3f8;border:1px solid var(--line);transition:background .4s,color .4s}
.hr-mail i svg{width:18px;height:18px}
.hr-mail span{display:flex;flex-direction:column;font-weight:600;font-size:.95rem;line-height:1.25}
.hr-mail small{font-size:.66rem;font-weight:600;letter-spacing:.14em;text-transform:uppercase;color:var(--muted);margin-bottom:3px}
.hr-mail:hover i{background:var(--yellow);color:var(--navy)}
.btn-n::before{background:var(--yellow)}.btn-n:hover{color:var(--navy)}
.btn-l{border:1px solid var(--line-2);color:var(--navy);background:#fff}
.btn-l::before{background:var(--navy)}.btn-l:hover{color:#fff;border-color:var(--navy)}
.link{display:inline-flex;align-items:center;gap:10px;font-weight:600;font-size:.9rem;color:var(--navy);border-bottom:1px solid var(--line-2);padding-bottom:6px;white-space:nowrap;transition:border-color .4s,gap .4s var(--out)}
.link .ar{width:16px}
.link:hover{border-color:var(--navy);gap:16px}
.chip{display:inline-flex;align-items:center;gap:8px;padding:8px 14px;border:1px solid var(--line);border-radius:2px;font-size:.76rem;font-weight:500;color:var(--navy);background:#fff}
.chip i{width:6px;height:6px;border-radius:50%;background:var(--navy)}

/* reveal (JS only) */
.js [data-rv]{opacity:0;transform:translateY(34px);transition:opacity 1.1s var(--out),transform 1.3s var(--out);transition-delay:var(--d,0s)}
.js [data-rv="s"]{transform:scale(.94)}
.js [data-rv].in{opacity:1;transform:none}
.js .split .w{display:inline-block;overflow:hidden;vertical-align:top;padding-bottom:.1em;margin-bottom:-.1em}
.js .split .w>span{display:inline-block;transform:translateY(108%);transition:transform 1.2s var(--out);transition-delay:calc(var(--d,0s) + var(--i) * 40ms)}
.js .split.in .w>span{transform:none}

/* parallax image frames: image taller than its frame, moved by scroll */
.pframe{position:relative;overflow:hidden;border-radius:4px;background:var(--paper)}
.pframe img{position:absolute;left:0;top:-12%;width:100%;height:124%;object-fit:cover;will-change:transform}

/* ---------- loader ---------- */
#loader{position:fixed;inset:0;z-index:1000;background:#fff;display:none;place-items:center}
.js #loader.run{display:grid}
.ld-c{display:flex;flex-direction:column;align-items:center;gap:26px;width:min(520px,82vw)}
.ld-em{width:clamp(110px,16vw,150px);opacity:0;transform:translateY(20px) scale(.92)}
.ld-wm{width:100%;opacity:0;clip-path:inset(0 100% 0 0)}
.ld-bar{width:100%;height:1px;background:var(--line);overflow:hidden}
.ld-bar i{display:block;height:100%;width:0;background:var(--navy)}
.ld-num{position:absolute;right:var(--pad);bottom:clamp(24px,5vh,50px);font-weight:200;font-size:clamp(3rem,8vw,6rem);letter-spacing:-.05em;line-height:.8;color:var(--navy)}
.ld-tag{position:absolute;left:var(--pad);bottom:clamp(28px,5vh,56px);font-size:.7rem;letter-spacing:.24em;font-weight:600;color:var(--muted);text-transform:uppercase}
#loader.run .ld-em{animation:ldIn 1.1s var(--out) .1s forwards}
#loader.run .ld-wm{animation:ldWipe 1.3s var(--ease) .5s forwards}
#loader.run .ld-bar i{animation:ldBar 2.1s var(--ease) .2s forwards}
#loader.out{opacity:0;visibility:hidden;transition:opacity .8s var(--out) .1s,visibility .8s .1s}
#loader.out .ld-c{transform:translateY(-30px) scale(.97);transition:transform 1s var(--out)}
@keyframes ldIn{to{opacity:1;transform:none}}
@keyframes ldWipe{to{opacity:1;clip-path:inset(0 0 0 0)}}
@keyframes ldBar{to{width:100%}}

/* ---------- shutter (left-to-right page transitions) ---------- */
.shutter{position:fixed;inset:0;z-index:900;pointer-events:none;visibility:hidden}
.shutter i{position:absolute;inset:0;transform:translateX(-101%)}
.shutter i:nth-child(1){background:var(--yellow)}
.shutter i:nth-child(2){background:#fff}
.shutter .sh-c{position:absolute;inset:0;display:grid;place-items:center;opacity:0}
.sh-c div{display:flex;flex-direction:column;align-items:center;gap:16px}
.sh-c img{width:90px}
.sh-c span{font-weight:600;font-size:clamp(1.4rem,3.4vw,2.4rem);letter-spacing:-.03em;color:var(--navy)}
.shutter.cover,.shutter.in,.shutter.out{visibility:visible}
.shutter.cover,.shutter.in{pointer-events:auto}
.shutter.cover i{transform:none}.shutter.cover .sh-c{opacity:1}
.shutter.in i{transform:none;transition:transform .8s var(--ease)}
.shutter.in i:nth-child(2){transition-delay:.08s}
.shutter.in .sh-c{opacity:1;transition:opacity .35s .55s}
.shutter.out i{transform:translateX(101%);transition:transform .9s var(--ease)}
.shutter.out i:nth-child(1){transition-delay:.1s}
.shutter.out .sh-c{opacity:0;transition:opacity .25s}

/* ---------- header ---------- */
.hdr{position:fixed;top:0;left:0;right:0;z-index:100;height:var(--hdr);display:flex;align-items:center;justify-content:space-between;gap:24px;padding:0 var(--pad);color:var(--navy);transition:height .5s var(--out),background .5s,box-shadow .5s,transform .6s var(--out)}
.hdr.ov.hv:not(.solid){background:#fff;box-shadow:0 1px 0 var(--line),0 18px 40px -28px rgba(47,47,101,.35)}
.hdr.solid{--hdr:72px;background:rgba(255,255,255,.86);backdrop-filter:blur(18px) saturate(1.5);-webkit-backdrop-filter:blur(18px) saturate(1.5);box-shadow:0 1px 0 var(--line)}
.hdr.hide{transform:translateY(-100%)}
.brand{display:flex;align-items:center;gap:14px;flex:none}
.brand .em{width:56px;transition:transform .6s var(--out)}
.brand:hover .em{transform:rotate(-6deg)}
.brand .wm{height:15px;width:auto}
.nav{display:flex;gap:4px}
.nav a{position:relative;white-space:nowrap;padding:10px 14px;font-size:.86rem;font-weight:500;color:var(--muted);transition:color .3s}
.nav a::after{content:'';position:absolute;left:14px;right:14px;bottom:5px;height:1.5px;background:var(--navy);transform:scaleX(0);transform-origin:right;transition:transform .5s var(--out)}
.nav a:hover,.nav a.on{color:var(--navy)}
.nav a:hover::after,.nav a.on::after{transform:none;transform-origin:left}
.hdr-r{display:flex;align-items:center;gap:14px;flex:none}
.badge30{display:block;border-radius:4px;padding:4px 8px;border:1px solid var(--line);background:#fff;transition:transform .5s var(--out),box-shadow .5s}
.badge30 img{height:48px;width:auto}
.badge30:hover{transform:translateY(-2px);box-shadow:0 14px 30px -18px rgba(47,47,101,.5)}
.hdr .btn{height:46px;padding:0 22px}
.burger{display:none;width:46px;height:46px;border-radius:50%;border:1px solid var(--line-2);position:relative;background:#fff}
.burger span{position:absolute;left:14px;right:14px;height:1.5px;background:var(--navy);transition:transform .45s var(--out)}
.burger span:nth-child(1){top:18px}.burger span:nth-child(2){top:27px}
body.menu-open .burger span:nth-child(1){transform:translateY(4.5px) rotate(45deg)}
body.menu-open .burger span:nth-child(2){transform:translateY(-4.5px) rotate(-45deg)}
body.menu-open .burger{background:var(--navy);border-color:var(--navy)}
body.menu-open .burger span{background:#fff}
body.menu-open{overflow:hidden}
body.menu-open .hdr{background:#fff;box-shadow:0 1px 0 var(--line);transform:none}
/* mobile menu */
.mnav{position:fixed;inset:0;z-index:95;background:#fff;display:flex;flex-direction:column;padding:calc(var(--hdr) + 10px) var(--pad) calc(20px + env(safe-area-inset-bottom));overflow-y:auto;overscroll-behavior:contain;visibility:hidden;clip-path:inset(0 0 100% 0);transition:clip-path .6s var(--ease),visibility 0s .6s}
body.menu-open .mnav{visibility:visible;clip-path:inset(0);transition:clip-path .6s var(--ease),visibility 0s}
.mn-list{flex:1}
.mn-list>*,.mn-foot{opacity:0;transform:translateY(12px);transition:opacity .45s,transform .6s var(--out)}
body.menu-open .mn-list>*,body.menu-open .mn-foot{opacity:1;transform:none;transition-delay:calc(.18s + var(--i) * 45ms)}
.mn-l,.mn-t{display:flex;align-items:center;justify-content:space-between;width:100%;padding:17px 2px;border:0;border-bottom:1px solid var(--line);background:none;font:600 1.1rem/1.2 'Manrope',sans-serif;letter-spacing:-.01em;color:var(--navy);text-align:left;cursor:pointer}
.mn-t svg{width:20px;height:20px;flex:none;color:#111;stroke-width:2.2;transition:transform .45s var(--out)}
.mn-l.on{background:var(--paper);border-radius:4px;border-bottom-color:transparent;padding-left:14px;padding-right:14px;font-weight:700}
.mn-g.cur .mn-t{font-weight:700}
.mn-g.open .mn-t svg{transform:rotate(180deg)}
.mn-s{display:grid;grid-template-rows:0fr;transition:grid-template-rows .45s var(--out)}
.mn-g.open .mn-s{grid-template-rows:1fr}
.mn-s>div{overflow:hidden}
.mn-s>div>div{padding:8px 0 14px;border-bottom:1px solid var(--line)}
.mn-s a{display:flex;flex-direction:column;gap:3px;padding:11px 14px;border-radius:4px;color:var(--navy)}
.mn-s a b{font-weight:600;font-size:.98rem}
.mn-s a small{font-size:.74rem;color:var(--muted)}
.mn-s a.on,.mn-s a:active{background:var(--paper)}
.mn-s a.on b{font-weight:700}
.mn-foot{display:grid;gap:10px;padding-top:24px}
.mn-q{width:100%;justify-content:center;height:52px}
.mn-c{display:grid;grid-template-columns:1fr 1fr;gap:10px}
.mn-c a{display:flex;align-items:center;justify-content:center;gap:8px;height:48px;border-radius:2px;border:1px solid var(--line-2);color:var(--navy);font-weight:600;font-size:.9rem}
.mn-c a svg{width:17px;height:17px}

/* ---------- home: logo intro ---------- */
.intro{position:relative;height:92svh;min-height:600px;display:flex;flex-direction:column;align-items:center;justify-content:center;overflow:hidden;background:radial-gradient(70% 60% at 50% 45%,#fff 0%,#fff 55%,var(--paper) 100%)}
.intro-logo{position:relative;display:flex;flex-direction:column;align-items:center;gap:clamp(22px,3.6vh,38px);padding:0 var(--pad);will-change:transform}
.intro-em{width:clamp(150px,19vw,270px)}
.intro-wm{width:min(86vw,1040px)}
.intro-tag{display:flex;align-items:center;gap:18px;font-size:clamp(.7rem,.9vw,.82rem);font-weight:600;letter-spacing:.34em;text-transform:uppercase;color:var(--muted)}
.intro-tag::before,.intro-tag::after{content:'';flex:none;width:46px;height:1px;background:var(--line-2)}
.intro-tag span{text-align:center;margin-right:-.34em}
.intro-tag span i{font-style:normal;display:inline-block;white-space:nowrap}
@media (max-width:640px){.intro-tag{gap:12px;letter-spacing:.26em;line-height:1.7;max-width:100%}.intro-tag span{margin-right:-.26em}.intro-tag::before,.intro-tag::after{width:24px}}
.intro-seal{position:absolute;right:var(--pad);bottom:clamp(36px,7vh,70px);width:clamp(130px,12vw,190px);will-change:transform}
.intro-seal .seal-ring{rotate:var(--sr,0deg)}
.intro-cue{position:absolute;left:var(--pad);bottom:clamp(44px,8vh,80px);display:flex;align-items:center;gap:14px;font-size:.7rem;letter-spacing:.24em;font-weight:600;text-transform:uppercase;color:var(--muted)}
.intro-cue i{position:relative;width:1px;height:46px;background:var(--line-2);overflow:hidden}
.intro-cue i::after{content:'';position:absolute;left:0;top:0;width:100%;height:40%;background:var(--navy);animation:cue 2.2s var(--ease) infinite}
@keyframes cue{0%{transform:translateY(-100%)}100%{transform:translateY(260%)}}

/* ---------- home: hero film (clean, with sound toggle) ---------- */
.cinema{position:relative;height:100svh;min-height:560px;background:var(--navy-d);overflow:hidden}
.cin-frame{position:absolute;inset:0;overflow:hidden;background:var(--navy-d);will-change:transform}
.cin-frame::after{content:'';position:absolute;inset:0 0 auto;height:160px;z-index:2;background:linear-gradient(180deg,rgba(20,20,46,.5),rgba(20,20,46,0));pointer-events:none}
.snd{position:absolute;z-index:5;right:max(var(--pad),92px);bottom:clamp(24px,5vh,44px);display:flex;align-items:center;gap:12px;height:50px;padding:0 20px 0 16px;border-radius:2px;background:rgba(255,255,255,.92);backdrop-filter:blur(10px);-webkit-backdrop-filter:blur(10px);color:var(--navy);font-size:.8rem;font-weight:600;letter-spacing:.04em;box-shadow:0 16px 40px -18px rgba(0,0,0,.5);transition:background .4s,transform .4s var(--out)}
.snd:hover{transform:translateY(-2px);background:#fff}
.snd svg{width:20px;height:20px}
.snd .eq{display:flex;align-items:flex-end;gap:2px;height:14px}
.snd .eq i{width:2px;height:30%;background:var(--navy);border-radius:1px}
.snd.on .eq i{animation:eq 1s ease-in-out infinite}
.snd.on .eq i:nth-child(2){animation-delay:.2s}.snd.on .eq i:nth-child(3){animation-delay:.4s}.snd.on .eq i:nth-child(4){animation-delay:.1s}
@keyframes eq{0%,100%{height:25%}50%{height:100%}}
.snd .ic-on{display:none}.snd.on .ic-on{display:block}.snd.on .ic-off{display:none}
.hero-cue{position:absolute;z-index:5;left:var(--pad);bottom:clamp(30px,5vh,52px);display:flex;align-items:center;gap:14px;font-size:.7rem;letter-spacing:.24em;font-weight:600;text-transform:uppercase;color:#fff}
.hero-cue i{position:relative;width:1px;height:46px;background:rgba(255,255,255,.35);overflow:hidden}
.hero-cue i::after{content:'';position:absolute;left:0;top:0;width:100%;height:40%;background:#fff;animation:cue 2.2s var(--ease) infinite}
body:not(.menu-open) .hdr.ov:not(.solid):not(.hv){color:#fff}
body:not(.menu-open) .hdr.ov:not(.solid):not(.hv) .nav a{color:rgba(255,255,255,.85)}
body:not(.menu-open) .hdr.ov:not(.solid):not(.hv) .nav a:hover,body:not(.menu-open) .hdr.ov:not(.solid):not(.hv) .nav a.on{color:#fff}
body:not(.menu-open) .hdr.ov:not(.solid):not(.hv) .nav a::after{background:var(--yellow)}
body:not(.menu-open) .hdr.ov:not(.solid):not(.hv) .brand .wm{filter:brightness(0) invert(1)}
.cin-frame>img,.cin-frame>video{position:absolute;inset:0;width:100%;height:100%;object-fit:cover}

.h30{position:absolute;inset:0;z-index:4;background:#fff;display:grid;place-items:center;opacity:0;visibility:hidden;transition:opacity .9s var(--out),visibility .9s}
.h30.show{opacity:1;visibility:visible}
.cinema.in30 .hero-cue{color:var(--navy)}.cinema.in30 .hero-cue i{background:var(--line-2)}.cinema.in30 .hero-cue i::after{background:var(--navy)}
.cinema.in30 .snd{background:var(--navy);color:#fff}.cinema.in30 .snd .eq i{background:var(--yellow)}
.h30 video{width:min(70vh,80vw);height:auto;aspect-ratio:1;object-fit:contain}

/* ---------- stats band ---------- */
.stats{display:grid;grid-template-columns:repeat(4,1fr);border-top:1px solid var(--line);border-bottom:1px solid var(--line)}
.stat{padding:clamp(28px,5vh,52px) clamp(18px,2.4vw,40px);border-right:1px solid var(--line)}
.stat:last-child{border-right:0}
.stat b{display:flex;align-items:flex-start;gap:4px;font-weight:400;font-size:clamp(2.6rem,5vw,4.6rem);letter-spacing:-.06em;line-height:.9;color:var(--navy)}
.stat b sup{font-size:.34em;font-weight:500;letter-spacing:0;margin-top:.3em}
.stat b sup.y{background:var(--yellow);padding:.1em .35em;border-radius:5px}
.stat>span{display:block;margin-top:14px;font-size:.88rem;font-weight:500;color:#55566e}

/* ---------- horizontal journey ---------- */
.hwrap{position:relative;background:#fff}
.htrack{display:flex;flex-wrap:nowrap;will-change:transform}
.panel{position:relative;flex:none;width:100vw;height:100vh;min-height:540px;overflow:hidden;display:flex;align-items:center;padding:calc(var(--hdr) + 20px) var(--pad) 96px;border-right:1px solid var(--line);background:#fff}
.panel.pp{background:var(--paper)}
/* ---------- seamless canvas: the eight chapters read as one long showcase ---------- */
.hglow,.hcanvas{display:none}
.hwrap.is-h{background:linear-gradient(180deg,#fff 0%,#fff 58%,#f6f6fa 100%)}
.hwrap.is-h .htrack{position:relative}
.hwrap.is-h .panel,.hwrap.is-h .panel.pp{background:transparent;border-right:0}
.hwrap.is-h .pnum{display:none}
.hwrap.is-h .hcanvas{display:block;position:absolute;inset:0;pointer-events:none;z-index:0}
.hwrap.is-h .hcanvas::before{content:'';position:absolute;left:0;right:0;bottom:clamp(54px,8vh,78px);height:1px;background:linear-gradient(90deg,transparent,rgba(47,47,101,.22) 4%,rgba(47,47,101,.22) 96%,transparent)}
.hwrap.is-h .hcanvas::after{content:'';position:absolute;left:0;right:0;bottom:clamp(54px,8vh,78px);height:9px;background:repeating-linear-gradient(90deg,rgba(47,47,101,.28) 0 1px,transparent 1px 120px),repeating-linear-gradient(90deg,rgba(47,47,101,.12) 0 1px,transparent 1px 24px);-webkit-mask:linear-gradient(90deg,transparent,#000 4%,#000 96%,transparent);mask:linear-gradient(90deg,transparent,#000 4%,#000 96%,transparent)}
.hwrap.is-h .panel{z-index:1}
.hwrap.is-h .hglow{display:block;position:absolute;inset:0;overflow:hidden;pointer-events:none;z-index:0}
.hglow i{position:absolute;border-radius:50%;filter:blur(70px);opacity:.55;will-change:transform}
.hglow i:nth-child(1){width:46vw;height:46vw;left:8vw;top:-18vw;background:radial-gradient(circle,rgba(255,242,0,.32),transparent 65%)}
.hglow i:nth-child(2){width:52vw;height:52vw;left:52vw;top:28vh;background:radial-gradient(circle,rgba(47,47,101,.16),transparent 65%)}
.hglow i:nth-child(3){width:38vw;height:38vw;left:110vw;top:-10vh;background:radial-gradient(circle,rgba(47,47,101,.12),transparent 65%)}
.panel .pin{position:relative;width:100%;max-width:var(--maxw);margin:0 auto}
.pnum{position:absolute;top:calc(var(--hdr) + 18px);right:var(--pad);font-size:.72rem;font-weight:600;letter-spacing:.2em;color:var(--muted)}
.ghost{position:absolute;font-weight:200;letter-spacing:-.07em;line-height:.8;color:transparent;-webkit-text-stroke:1px var(--line-2);pointer-events:none;white-space:nowrap;will-change:transform}
.ph{display:flex;justify-content:space-between;align-items:flex-end;gap:30px;margin-bottom:clamp(22px,4vh,44px)}
.ph h2{margin-top:16px;max-width:19ch}

/* P1 who */
.who{display:grid;grid-template-columns:1fr 1.05fr;gap:clamp(30px,6vw,110px);align-items:center}
.who h2{margin:18px 0 22px}
.who .chips{display:flex;gap:8px;flex-wrap:wrap;margin:26px 0 32px}
.who-art{position:relative;height:min(64vh,580px)}
.who-art .pframe{position:absolute}
.who-art .a{left:0;top:0;width:76%;height:74%}
.who-art .b{right:0;bottom:0;width:52%;height:48%;border:8px solid #fff;box-shadow:0 40px 80px -40px rgba(20,20,46,.35)}
.who-art .sw{position:absolute;left:-6%;bottom:4%;width:clamp(120px,11vw,170px)}

/* P2 towers */
.tw-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:clamp(14px,1.8vw,26px)}
.tw{position:relative;display:block;background:#fff;border:1px solid var(--line);border-radius:4px;padding:18px 24px 26px;overflow:hidden;transition:box-shadow .7s,border-color .5s}
.tw:hover{box-shadow:0 40px 70px -44px rgba(47,47,101,.45);border-color:var(--line-2)}
.tw .tower-svg{height:min(36vh,330px);width:100%;margin:0 auto -4px}
.tw .tower-svg{padding-top:40px;box-sizing:border-box}
.tw .mw{display:flex;align-items:baseline;gap:8px;font-weight:200;font-size:clamp(2.8rem,4.4vw,4.2rem);letter-spacing:-.06em;line-height:.9;color:var(--navy)}
.tw .mw small{font-size:.3em;font-weight:600;letter-spacing:.04em}
.tw h3{font-size:1.15rem;margin:10px 0 6px;letter-spacing:-.02em}
.tw p{font-size:.86rem;color:var(--muted);line-height:1.6}
.tw .tag{position:absolute;z-index:2;top:18px;left:20px;font-size:.66rem;font-weight:700;letter-spacing:.14em;padding:6px 11px;border-radius:2px;background:var(--yellow);color:var(--navy)}
.tower-svg{color:var(--navy)}
.tower-svg .ln path{fill:none;stroke:currentColor;stroke-width:1.6;stroke-linejoin:round;stroke-linecap:round}
.tower-svg .nac{fill:currentColor}
.tower-svg .bl{fill:#fff;stroke:currentColor;stroke-width:1.2}
.tower-svg .hub{fill:var(--yellow);stroke:var(--navy);stroke-width:1.2}
.tower-svg .rotor{animation:spin 7s linear infinite}
.t-tubular .rotor{animation-duration:6s}.t-modular .rotor{animation-duration:8.5s}
.js .tower-svg .ln path{stroke-dasharray:1;stroke-dashoffset:1;transition:stroke-dashoffset 2.4s var(--ease)}
.js .drawn .tower-svg .ln path{stroke-dashoffset:0}
@keyframes spin{to{transform:rotate(360deg)}}

/* P3 credentials */
.usp-wrap{display:grid;grid-template-columns:.75fr 1.6fr;gap:clamp(30px,5vw,80px);align-items:center}
.usp-grid{display:grid;grid-template-columns:repeat(4,1fr);border-top:1px solid var(--line-2);border-left:1px solid var(--line-2)}
.usp{padding:clamp(18px,2.6vh,28px) 22px;min-height:clamp(160px,25vh,220px);display:flex;flex-direction:column;gap:6px;border-right:1px solid var(--line-2);border-bottom:1px solid var(--line-2);transition:background .5s}
.usp:hover{background:var(--paper)}
.usp svg{width:26px;height:26px;color:var(--navy);margin-bottom:auto}
.usp b{font-weight:500;font-size:clamp(1.8rem,2.6vw,2.6rem);letter-spacing:-.05em;line-height:1;color:var(--navy);margin-top:16px}
.usp h4{font-size:.86rem;font-weight:600;letter-spacing:-.01em}
.usp p{font-size:.78rem;color:var(--muted);line-height:1.5}

/* P4 global */
.gl{display:grid;grid-template-columns:.72fr 1.6fr;gap:clamp(24px,4vw,60px);align-items:center}
.map{position:relative;width:100%;aspect-ratio:2/1.05}
.map svg{width:100%;height:100%;overflow:visible}
.map .dot{fill:#c6c6d8}
.map .arc{fill:none;stroke:var(--navy);stroke-width:1.1;stroke-linecap:round;stroke-dasharray:var(--len);stroke-dashoffset:var(--len)}
.map.go .arc{animation:arc 1.9s var(--ease) forwards;animation-delay:var(--d)}
@keyframes arc{to{stroke-dashoffset:0}}
.map .dest circle{fill:var(--navy);transform-box:fill-box;transform-origin:center;transform:scale(0)}
.map.go .dest circle{animation:pop .6s var(--out) forwards;animation-delay:calc(var(--d) + 1.5s)}
.map .dest .pulse{fill:none;stroke:var(--navy);stroke-width:.8}
.map.go .dest .pulse{animation:pulse 2.6s ease-out infinite;animation-delay:calc(var(--d) + 1.8s)}
.map .dest text{font:600 10px 'Manrope',sans-serif;fill:var(--navy);letter-spacing:.08em;opacity:0}
.map.go .dest text{animation:fadein .6s forwards;animation-delay:calc(var(--d) + 1.7s)}
.map .home circle{fill:var(--yellow);stroke:var(--navy);stroke-width:1.5}
.map .home .pulse{fill:none;stroke:var(--navy);stroke-width:.8;animation:pulse 2.2s ease-out infinite}
@keyframes pop{to{transform:scale(1)}}
@keyframes pulse{0%{transform:scale(1);opacity:1}100%{transform:scale(5);opacity:0}}
@keyframes fadein{to{opacity:1}}
.regions{display:grid;grid-template-columns:1fr 1fr;gap:1px;margin-top:28px;background:var(--line);border:1px solid var(--line);border-radius:4px;overflow:hidden}
.regions div{padding:16px 18px;background:#fff}
.regions b{display:block;font-weight:600;color:var(--navy);letter-spacing:-.01em}
.regions span{font-size:.78rem;color:var(--muted)}

/* P5 certifications */
.iso-row{display:grid;grid-template-columns:repeat(5,1fr);gap:clamp(12px,1.4vw,20px)}
.cert{position:relative;display:block;border-radius:4px;padding:28px 20px 24px;background:#fff;border:1px solid var(--line);text-align:center;transition:box-shadow .7s}
.cert:hover{box-shadow:0 40px 60px -40px rgba(47,47,101,.45)}
.ros{width:clamp(80px,7vw,100px);aspect-ratio:1;margin:0 auto 18px;border-radius:50%;display:grid;place-items:center;border:1px solid var(--line-2);position:relative;color:var(--navy);background:radial-gradient(circle,#fff 55%,var(--paper) 56%)}
.ros::before{content:'';position:absolute;inset:7px;border-radius:50%;border:1px dashed var(--line-2)}
.ros::after{content:'';position:absolute;right:6px;top:6px;width:14px;height:14px;border-radius:50%;background:var(--yellow);box-shadow:0 0 0 3px #fff}
.ros svg{width:40%}
.cert b{display:block;font-weight:600;font-size:clamp(.98rem,1.2vw,1.12rem);color:var(--navy);letter-spacing:-.02em}
.cert span{display:block;font-size:.84rem;line-height:1.5;color:var(--muted);margin-top:4px}
.cbadge{height:clamp(78px,9.5vh,100px);display:flex;align-items:center;justify-content:center;margin:0 auto 18px}
.cbadge img{display:block;max-width:64%;max-height:100%;width:auto;height:auto;object-fit:contain;transition:transform .8s var(--out)}
.cert:hover .cbadge img{transform:scale(1.06)}

/* P6 capacity + clients */
.cap{display:grid;grid-template-columns:1fr 1fr;gap:clamp(30px,5vw,80px);align-items:center}
.cap-meter{display:flex;align-items:flex-end;gap:clamp(10px,2vw,30px)}
.cap-num{font-weight:200;font-size:clamp(5rem,11vw,10rem);line-height:.8;letter-spacing:-.07em;color:var(--navy);min-width:3.1ch}
.cap-num small{font-size:.2em;font-weight:600;letter-spacing:.04em;margin-left:8px}
.cap-turb{width:clamp(110px,11vw,170px);transform-origin:bottom center;transition:transform 1s var(--out)}
.cap-scale{display:grid;grid-template-columns:repeat(9,minmax(0,1fr));gap:6px;margin-top:28px}
@media (max-width:640px){.cap-scale{grid-template-columns:repeat(5,minmax(0,1fr))}}
.cap-scale span{padding:8px 4px;text-align:center;white-space:nowrap;letter-spacing:-.01em;border-radius:2px;font-size:.76rem;font-weight:600;border:1px solid var(--line-2);color:var(--muted);background:#fff;transition:.45s var(--out);cursor:default}
.cap-scale span.on{background:var(--navy);border-color:var(--navy);color:#fff}
.clients{display:grid;grid-template-columns:repeat(3,1fr);gap:1px;background:var(--line);border:1px solid var(--line);border-radius:4px;overflow:hidden}
.client{aspect-ratio:3/2;background:#fff;display:flex;flex-direction:column;align-items:center;justify-content:center;gap:6px;color:#a6a7bb;font-size:.7rem;letter-spacing:.16em;text-transform:uppercase;font-weight:600;transition:background .4s}
.client:hover{background:var(--paper)}
.client img{max-width:66%;max-height:44%;filter:grayscale(1);opacity:.8;transition:filter .4s,opacity .4s}
.client:hover img{filter:none;opacity:1}
.client em{font-style:normal;color:var(--navy);letter-spacing:.04em;font-size:.76rem}

/* P7 verticals */
.vt-row{display:grid;grid-template-columns:repeat(6,1fr);gap:clamp(10px,1.2vw,16px)}
.vt{position:relative;display:block;height:clamp(320px,52vh,480px);border-radius:4px;overflow:hidden;background:var(--paper)}
.vt img{position:absolute;inset:0;width:100%;height:100%;object-fit:cover;transition:transform 1.4s var(--out)}
.vt::after{content:'';position:absolute;inset:0;background:linear-gradient(180deg,rgba(20,20,46,0) 40%,rgba(20,20,46,.82))}
.vt .vc{position:absolute;left:18px;right:18px;bottom:18px;z-index:2;color:#fff}
.vt .vc small{font-size:.68rem;letter-spacing:.18em;font-weight:600;opacity:.75}
.vt h3{font-size:clamp(1rem,1.2vw,1.15rem);color:#fff;margin-top:6px;letter-spacing:-.02em}
.vt p{font-size:.78rem;color:#dcdcef;max-height:0;overflow:hidden;opacity:0;transition:max-height .7s var(--out),opacity .5s,margin .5s}
.vt:hover img{transform:scale(1.08)}
.vt:hover p{max-height:120px;opacity:1;margin-top:8px}

/* P8 CTA */
.cta{display:grid;grid-template-columns:1.4fr .6fr;gap:5vw;align-items:center}
.cta .acts{display:flex;gap:12px;flex-wrap:wrap;margin-top:34px}

/* ---------- group companies ---------- */
.group{padding:clamp(80px,14vh,150px) 0;background:var(--paper);position:relative;overflow:hidden}
.group-h{display:flex;justify-content:space-between;align-items:flex-end;gap:30px;margin-bottom:clamp(30px,5vh,56px)}
.group-h>div:first-child{max-width:780px}
.group-h h2{margin-top:16px}
.gcards{display:grid;grid-template-columns:repeat(3,1fr);gap:clamp(14px,1.8vw,24px)}
.gc{display:flex;flex-direction:column;border-radius:4px;overflow:hidden;background:#fff;border:1px solid var(--line);transition:transform .7s var(--out),box-shadow .7s}
.gc:hover{transform:translateY(-8px);box-shadow:0 44px 80px -50px rgba(47,47,101,.5)}
.gc .pframe{height:220px;border-radius:0}
.gc .tagp{position:absolute;left:16px;top:16px;z-index:2;background:#fff;color:var(--navy);font-size:.66rem;font-weight:700;letter-spacing:.14em;padding:7px 12px;border-radius:2px;text-transform:uppercase}
.gc .gb{padding:24px 24px 26px;display:flex;flex-direction:column;gap:10px;flex:1}
.gc h3{font-size:1.18rem;letter-spacing:-.025em}
.gc p{font-size:.88rem;color:var(--muted)}
.gc .gm{display:flex;flex-direction:column;gap:8px;margin-top:auto;padding-top:16px;border-top:1px solid var(--line);font-size:.84rem}
.gc .gm a{display:flex;gap:10px;align-items:center;color:var(--ink);transition:color .3s}
.gc .gm a:hover{color:var(--navy);text-decoration:underline;text-underline-offset:3px}
.gc .gm svg{width:16px;height:16px;color:var(--navy);flex:none}

/* ---------- footer (brand navy) ---------- */
.foot{background:var(--navy);color:#c8c9e2;position:relative;overflow:hidden}
.marq{display:flex;overflow:hidden;border-bottom:1px solid rgba(255,255,255,.1);padding:26px 0;user-select:none}
.marq div{display:flex;flex:none;align-items:center;gap:44px;padding-right:44px;animation:marq 40s linear infinite;font-weight:200;font-size:clamp(2rem,4.6vw,4rem);letter-spacing:-.04em;color:#fff;white-space:nowrap}
.marq div i{width:12px;height:12px;border-radius:50%;background:var(--yellow);flex:none}
.marq div span.s{font-family:var(--serif);font-style:italic;color:#c8c9e2}
@keyframes marq{to{transform:translateX(-100%)}}
.foot-g{display:grid;grid-template-columns:1.4fr 1fr 1fr 1.3fr;gap:clamp(24px,4vw,60px);padding:clamp(56px,9vh,96px) 0 44px}
.foot h5{font-size:.72rem;letter-spacing:.2em;text-transform:uppercase;color:#fff;margin-bottom:18px;font-weight:600}
.foot ul{list-style:none;display:grid;gap:10px;font-size:.9rem}
.foot ul a{transition:color .3s}
.foot ul a:hover{color:var(--yellow)}
.fb .logo-w{display:flex;align-items:center;gap:16px;margin-bottom:20px}
.fb .logo-w img.em{width:70px}
.fb .logo-w img.wm{height:17px;width:auto;filter:brightness(0) invert(1)}
.fb p{font-size:.9rem;max-width:40ch;color:#a9aad0}
.soc{display:flex;gap:8px;margin-top:22px;flex-wrap:wrap}
.soc a{width:42px;height:42px;border-radius:50%;border:1px solid rgba(255,255,255,.2);display:grid;place-items:center;color:#fff;transition:background .4s,color .4s,transform .4s var(--out)}
.soc a:hover{background:var(--yellow);color:var(--navy);transform:translateY(-3px)}
.soc svg{width:17px;height:17px}
.foot .seal{width:130px}
.foot .seal .seal-ring text{fill:#fff}
.foot-b{display:flex;justify-content:space-between;gap:20px;flex-wrap:wrap;padding:22px 0 30px;border-top:1px solid rgba(255,255,255,.1);font-size:.78rem;color:#9596c0}
.wa{position:fixed;right:20px;bottom:20px;z-index:80;width:54px;height:54px;border-radius:50%;background:#25d366;display:grid;place-items:center;box-shadow:0 14px 30px -12px rgba(37,211,102,.7);transition:transform .4s var(--out)}
.wa:hover{transform:scale(1.07)}
.wa svg{width:26px;height:26px}

/* ---------- seal ---------- */
.seal{position:relative;aspect-ratio:1;display:grid;place-items:center}
.seal::before{content:'';position:absolute;inset:12%;border-radius:50%;background:#fff;border:1px solid var(--line);box-shadow:0 30px 60px -34px rgba(47,47,101,.45)}
.seal img{position:relative;width:56%}
.seal-ring{position:absolute;inset:0;width:100%;height:100%;animation:spin 30s linear infinite}
.seal-ring text{font:600 10.5px 'Manrope',sans-serif;letter-spacing:.08em;fill:var(--navy)}

/* ---------- sub-page hero (white) ---------- */
.phero{position:relative;background:#fff;padding:calc(var(--hdr) + clamp(40px,8vh,90px)) 0 0;overflow:hidden}
.phero .ph-top{display:grid;grid-template-columns:1fr auto;gap:40px;align-items:end}
.crumb{display:flex;gap:10px;font-size:.74rem;letter-spacing:.14em;text-transform:uppercase;font-weight:600;color:var(--muted);margin-bottom:26px}
.crumb a:hover{color:var(--navy)}
.phero h1{max-width:17ch;margin-top:18px}
.phero .lead{margin-top:22px}
.phero .seal{width:clamp(150px,15vw,230px)}
.pchips{display:flex;gap:8px;flex-wrap:wrap;margin-top:30px}
.ph-band{position:relative;margin-top:clamp(40px,7vh,70px);height:clamp(320px,62vh,640px)}
.ph-band .pframe{position:absolute;inset:0;border-radius:0;clip-path:inset(0 var(--pad) 0 var(--pad) round 26px);will-change:clip-path}

.ph-30{width:clamp(240px,25vw,380px);aspect-ratio:1;flex:none}
.phero:has(.ph-30) .ph-ghost{display:none}
.anim30{width:100%;height:100%;object-fit:contain;mix-blend-mode:multiply}
@media (max-width:980px){.ph-30{width:min(300px,72vw);margin:0 auto}}

/* ---------- generic sections ---------- */
.sec{padding:clamp(80px,14vh,150px) 0;position:relative;overflow-x:clip}
.sec.alt{background:var(--paper)}
.sec-h{max-width:820px;margin-bottom:clamp(34px,6vh,64px)}
.sec-h h2{margin-top:16px}
.sec-h .lead{margin-top:20px}
.two{display:grid;grid-template-columns:1fr 1fr;gap:clamp(30px,7vw,110px);align-items:center}
.two .pframe{aspect-ratio:4/3.2}
.vm{display:grid;grid-template-columns:1fr 1fr;gap:clamp(14px,2vw,26px)}
.vmc{position:relative;padding:clamp(30px,4vw,56px);border-radius:4px;overflow:hidden;min-height:360px;display:flex;flex-direction:column;gap:18px;background:#fff;border:1px solid var(--line)}
.vmc .ic{width:58px;height:58px;border-radius:4px;display:grid;place-items:center;background:var(--yellow);color:var(--navy)}
.vmc.m .ic{background:var(--navy);color:var(--yellow)}
.vmc .ic svg{width:28px}
.vmc h3{font-size:clamp(1.6rem,2.4vw,2.2rem)}
.vmc p{font-size:clamp(1.02rem,1.2vw,1.12rem);color:var(--muted);max-width:46ch}
.vmc ul{list-style:none;display:grid;gap:12px;color:var(--ink)}
.vmc ul li{display:flex;gap:12px}
.vmc ul li::before{content:'';flex:none;width:7px;height:7px;margin-top:.62em;border-radius:50%;background:var(--navy)}
.vmc .gh{position:absolute;right:-6px;bottom:-34px;font-weight:200;font-size:8rem;letter-spacing:-.06em;line-height:1;color:var(--paper-2);pointer-events:none}
.msg{display:grid;grid-template-columns:.8fr 1.2fr;gap:clamp(30px,6vw,100px);align-items:center}
.msg .pframe{aspect-ratio:4/5}
blockquote{font-size:clamp(1.25rem,2vw,1.8rem);font-weight:400;line-height:1.5;color:var(--ink);letter-spacing:-.02em}
blockquote::before{content:'“';display:block;font-family:var(--serif);font-size:6rem;line-height:.5;color:var(--navy);margin-bottom:18px}
.sign{margin-top:30px;display:flex;align-items:center;gap:16px}
.sign i{width:46px;height:2px;background:var(--yellow)}
.sign b{display:block;font-weight:600;font-size:1.05rem;color:var(--navy)}
.sign span{font-size:.8rem;color:var(--muted)}
.dirs{display:grid;grid-template-columns:repeat(3,1fr);gap:clamp(14px,2vw,26px)}
.dir{padding:32px;border-radius:4px;background:#fff;border:1px solid var(--line);transition:transform .7s var(--out),box-shadow .7s}
.dir:hover{transform:translateY(-8px);box-shadow:0 40px 70px -46px rgba(47,47,101,.45)}
.dir .av{width:76px;height:76px;border-radius:50%;display:grid;place-items:center;background:var(--paper);color:var(--navy);font-weight:300;font-size:2rem;margin-bottom:24px;border:1px solid var(--line-2);position:relative}
.dir .av::after{content:'';position:absolute;right:2px;bottom:4px;width:14px;height:14px;border-radius:50%;background:var(--yellow);box-shadow:0 0 0 3px #fff}
.dir h3{font-size:1.3rem;letter-spacing:-.025em}
.dir small{display:block;font-size:.76rem;letter-spacing:.12em;text-transform:uppercase;color:var(--muted);font-weight:600;margin:6px 0 18px}
.dir a{display:flex;gap:10px;align-items:center;font-size:.88rem;color:var(--muted);padding:5px 0;transition:color .3s}
.dir a:hover{color:var(--navy)}
.dir a svg{width:16px;color:var(--navy)}
.tl{display:flex;gap:16px;overflow-x:auto;overflow-y:hidden;padding:6px 2px 26px;scroll-snap-type:x mandatory;scrollbar-width:thin}
.ms{flex:0 0 clamp(250px,25vw,320px);scroll-snap-align:start;padding:30px;border-radius:4px;background:#fff;border:1px solid var(--line)}
.ms b{display:block;font-weight:200;font-size:2.8rem;letter-spacing:-.06em;color:var(--navy);line-height:1;margin:10px 0 16px}
.ms h4{font-size:1.02rem;margin-bottom:8px;letter-spacing:-.02em}
.ms p{font-size:.88rem;color:var(--muted)}
.vals3{display:grid;grid-template-columns:repeat(3,1fr);border-top:1px solid var(--line-2)}
.vals3 div{padding:clamp(28px,4vw,50px) clamp(20px,3vw,40px) 0 0}
.vals3 b{display:block;font-weight:200;font-size:clamp(2rem,3.4vw,3.2rem);letter-spacing:-.05em;color:var(--navy);margin-bottom:12px}
.vals3 p{color:var(--muted)}
.tech{display:grid;grid-template-columns:.85fr 1.15fr;gap:clamp(30px,6vw,100px);align-items:center;padding:clamp(50px,8vh,80px) 0;border-bottom:1px solid var(--line)}
.tech:last-child{border-bottom:0}
.tech.rev{grid-template-columns:1.15fr .85fr}
.tech.rev .tech-art{order:2}
.tech-art{position:relative;border-radius:4px;background:var(--paper);padding:24px 24px 0;overflow:hidden}
.tech-art .tower-svg{height:min(62vh,560px);margin:0 auto}
.tech-art .mwbig{position:absolute;left:28px;top:24px;font-weight:200;font-size:clamp(3.6rem,6vw,5.6rem);letter-spacing:-.07em;line-height:.85;color:var(--navy)}
.tech-art .mwbig small{display:block;font-size:.17em;font-weight:600;letter-spacing:.16em;margin-top:12px}
.tech h2{margin:16px 0 18px}
.specs{display:grid;grid-template-columns:1fr 1fr;gap:1px;margin:28px 0 32px;background:var(--line);border:1px solid var(--line);border-radius:4px;overflow:hidden}
.specs div{display:flex;gap:12px;align-items:center;padding:15px 18px;background:#fff;font-weight:500;font-size:.9rem}
.specs div::before{content:'';flex:none;width:6px;height:6px;border-radius:50%;background:var(--navy);box-shadow:0 0 0 3px var(--yellow)}
.plat{display:flex;gap:10px;flex-wrap:wrap}
.plat span{padding:14px 20px;border-radius:4px;background:#fff;border:1px solid var(--line);font-weight:200;font-size:1.5rem;letter-spacing:-.04em;color:var(--navy)}
.plat span:last-child{background:var(--navy);color:#fff;border-color:var(--navy)}
.proc{display:flex;gap:16px;overflow-x:auto;overflow-y:hidden;padding:6px 2px 26px;scroll-snap-type:x mandatory;scrollbar-width:thin}
.pstep{flex:0 0 clamp(250px,24vw,320px);scroll-snap-align:start;border-radius:4px;overflow:hidden;background:#fff;border:1px solid var(--line)}
.pstep .pi{height:200px;overflow:hidden}
.pstep .pi img{width:100%;height:100%;object-fit:cover;transition:scale 1.4s var(--out)}
.pstep:hover .pi img{scale:1.07}
.pstep .pt{padding:22px 24px 26px}
.pstep small{font-size:.7rem;letter-spacing:.16em;color:var(--muted);font-weight:600}
.pstep h4{font-size:1.1rem;margin:6px 0;letter-spacing:-.02em}
.pstep p{font-size:.86rem;color:var(--muted)}
.vgrid{display:grid;grid-template-columns:repeat(3,1fr);gap:clamp(14px,2vw,26px)}
.vcard{border-radius:4px;overflow:hidden;background:#fff;border:1px solid var(--line);transition:transform .7s var(--out),box-shadow .7s}
.vcard:hover{transform:translateY(-8px);box-shadow:0 40px 70px -46px rgba(47,47,101,.45)}
.vcard .pframe{height:250px;border-radius:0}
.vcard .vb{padding:28px}
.vcard small{font-size:.7rem;letter-spacing:.16em;color:var(--muted);font-weight:600}
.vcard h3{font-size:1.28rem;margin:8px 0 10px;letter-spacing:-.025em}
.vcard p{font-size:.9rem;color:var(--muted)}
.ctabs{display:grid;grid-template-columns:.8fr 1.6fr;gap:clamp(20px,4vw,60px);align-items:start}
.ctl{display:grid;gap:8px}
.ctl button{display:flex;align-items:center;gap:16px;text-align:left;padding:18px 20px;border-radius:4px;border:1px solid var(--line);background:#fff;transition:border-color .45s,box-shadow .45s,transform .45s var(--out)}
.ctl button:hover{transform:translateX(4px)}
.ctl button b{display:block;font-weight:600;font-size:1rem;color:var(--navy);letter-spacing:-.01em}
.ctl button span{font-size:.8rem;color:var(--muted)}
.ctl button i{flex:none;width:42px;height:42px;border-radius:4px;display:grid;place-items:center;background:var(--paper);color:var(--navy)}
.ctl button i svg{width:20px}
.ctl button.on{border-color:var(--navy);box-shadow:0 0 0 1px var(--navy)}
.ctl button.on i{background:var(--yellow)}
.cpanel{position:relative;border-radius:4px;background:var(--paper);padding:clamp(30px,4vw,60px);min-height:440px;overflow:hidden}
.cpanel .cp{display:none;position:relative;z-index:2}
.cpanel .cp.on{display:grid;grid-template-columns:auto 1fr;gap:clamp(24px,4vw,56px);align-items:center;animation:cpIn .8s var(--out)}
@keyframes cpIn{from{opacity:0;transform:translateX(30px)}to{opacity:1;transform:none}}
.cpanel .bigros{width:clamp(150px,15vw,210px);aspect-ratio:1;border-radius:50%;display:grid;place-items:center;text-align:center;background:#fff;border:1px solid var(--line-2);position:relative;box-shadow:0 30px 60px -36px rgba(47,47,101,.45)}
.cpanel .bigros::before{content:'';position:absolute;inset:10px;border-radius:50%;border:1px dashed var(--line-2)}
.cpanel .bigros::after{content:'';position:absolute;right:10%;top:10%;width:22px;height:22px;border-radius:50%;background:var(--yellow);box-shadow:0 0 0 4px #fff}
.cpanel .bigros b{font-weight:600;font-size:clamp(1rem,1.5vw,1.3rem);line-height:1.15;padding:0 20px;color:var(--navy);letter-spacing:-.02em}
.cpanel .bigros small{display:block;font-size:.62rem;letter-spacing:.2em;font-weight:600;margin-top:8px;color:var(--muted)}
.cpanel h3{font-size:clamp(1.6rem,2.4vw,2.2rem);margin:14px 0}
.cpanel p{color:var(--muted)}
.cpanel ul{list-style:none;display:grid;gap:10px;margin-top:22px}
.cpanel ul li{display:flex;gap:12px;align-items:center;font-weight:500}
.cpanel ul li::before{content:'';width:20px;height:20px;border-radius:50%;flex:none;background:var(--navy) url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%23fff200' stroke-width='3'%3E%3Cpath d='M5 12l5 5L20 7'/%3E%3C/svg%3E") center/11px no-repeat}
.ct{display:grid;grid-template-columns:.9fr 1.1fr;gap:clamp(30px,5vw,90px);align-items:start}
.plants{display:grid;gap:1px;margin-top:30px;background:var(--line);border:1px solid var(--line);border-radius:4px;overflow:hidden}
.plant{display:grid;grid-template-columns:auto 1fr auto;gap:16px;align-items:center;padding:18px 20px;background:#fff;transition:background .4s}
.plant:hover{background:var(--paper)}
.plant i{width:44px;height:44px;border-radius:4px;display:grid;place-items:center;background:var(--paper);color:var(--navy)}
.plant i svg{width:20px}
.plant b{display:block;font-weight:600;font-size:.95rem;color:var(--navy)}
.plant span{font-size:.82rem;color:var(--muted)}
.plant em{font-style:normal;font-size:.72rem;font-weight:600;letter-spacing:.1em;color:var(--muted)}
form.enq{background:#fff;border-radius:4px;padding:clamp(28px,4vw,54px);border:1px solid var(--line);box-shadow:0 60px 100px -70px rgba(47,47,101,.5)}
.row2{display:grid;grid-template-columns:1fr 1fr;gap:22px}
.fld{position:relative;margin-bottom:24px}
.fld input,.fld textarea{width:100%;border:0;border-bottom:1px solid var(--line-2);padding:22px 0 10px;font:400 1rem 'Manrope',sans-serif;background:transparent;color:var(--ink);outline:none;transition:border-color .3s;resize:vertical}
.fld textarea{min-height:120px}
.fld label{position:absolute;left:0;top:22px;color:var(--muted);font-size:.95rem;pointer-events:none;transition:.3s var(--out)}
.fld input:focus,.fld textarea:focus{border-color:var(--navy)}
.fld input:focus+label,.fld input:not(:placeholder-shown)+label,.fld textarea:focus+label,.fld textarea:not(:placeholder-shown)+label{top:0;font-size:.7rem;letter-spacing:.12em;text-transform:uppercase;font-weight:600;color:var(--navy)}
.alert{padding:14px 18px;border-radius:4px;margin-bottom:22px;font-weight:500;font-size:.92rem}
.alert.success{background:#e8f6ee;color:#11683a}.alert.error{background:#fdecea;color:#a3271b}


/* ================= motion & hover layer ================= */
:root{--black:#0b0b10}
h1,h2,h3,h4{color:var(--black)}
.lead b,.mani-t b{font-weight:700;color:var(--black)}
.ld-num{color:var(--black)}
.stat b sup{font-weight:700}
.stat{transition:background .5s}
.stat:hover{background:var(--paper)}
.stat b{transition:color .5s}.stat:hover b{color:var(--black)}
.cin-frame{cursor:pointer}

/* manifesto: black words light up while pinned */
.mani{position:relative;background:#fff}
.mani-in{position:relative;height:100vh;min-height:620px;display:grid;place-items:center;overflow:hidden;padding:0 var(--pad)}
.mani-c{position:relative;z-index:2;max-width:min(940px,72vw);text-align:center;display:flex;flex-direction:column;align-items:center;gap:30px;will-change:transform}
.mani-t{font-weight:500;font-size:clamp(1.9rem,4.1vw,4rem);line-height:1.13;letter-spacing:-.045em;color:var(--black)}
.mani-t em{font-family:var(--serif);font-style:italic;font-weight:400;color:var(--navy);letter-spacing:-.01em}
.mani-sig{display:flex;align-items:center;gap:14px;font-size:.74rem;font-weight:700;letter-spacing:.22em;text-transform:uppercase;color:var(--black)}
.mani-sig i{width:40px;height:2px;background:var(--yellow)}
.mani-img{position:absolute;z-index:1;border-radius:4px;overflow:hidden;background:var(--paper);box-shadow:0 40px 80px -40px rgba(11,11,16,.45);will-change:transform}
.mani-img img{width:100%;height:100%;object-fit:cover}
.mani-img.i1{left:3%;top:10%;width:clamp(120px,12vw,210px);aspect-ratio:3/4}
.mani-img.i2{right:5%;top:6%;width:clamp(110px,11vw,190px);aspect-ratio:1}
.mani-img.i3{left:9%;bottom:4%;width:clamp(110px,10vw,170px);aspect-ratio:1}
.mani-img.i4{right:3%;bottom:8%;width:clamp(140px,14vw,240px);aspect-ratio:4/3}

/* crossing ribbons */
.xband{position:relative;height:clamp(220px,26vw,360px);overflow:hidden;background:#fff}
.xb{position:absolute;left:-5%;width:110%;top:50%;padding:clamp(12px,1.5vw,20px) 0;display:flex;white-space:nowrap;overflow:hidden}
.xb-t{display:flex;flex:none;align-items:center;gap:clamp(20px,3vw,44px);padding-right:clamp(20px,3vw,44px);font-size:clamp(1.2rem,2.6vw,2.5rem);font-weight:600;letter-spacing:-.03em;text-transform:uppercase;will-change:transform}
.xb-t em{font-family:var(--serif);font-style:italic;font-weight:400;text-transform:none;letter-spacing:0}
.xb-t i{width:.55em;height:.55em;flex:none;background:currentColor;clip-path:polygon(50% 0,61% 39%,100% 50%,61% 61%,50% 100%,39% 61%,0 50%,39% 39%)}
.xb-y{top:62%;background:var(--yellow);color:var(--black);transform:translateY(-50%) rotate(-2.5deg);z-index:2}
.xb-k{top:36%;background:var(--navy);color:#fff;transform:translateY(-50%) rotate(2deg)}
.xb-k i{background:var(--yellow)}

/* sub-page ghost numeral */
.ph-ghost{position:absolute;right:-2vw;top:calc(var(--hdr) + 8vh);font-weight:200;font-size:clamp(11rem,24vw,24rem);line-height:.8;letter-spacing:-.07em;color:transparent;-webkit-text-stroke:1px var(--line-2);pointer-events:none;z-index:0;will-change:transform}
.phero .wrap{position:relative;z-index:1}

/* rolling labels */
.roll{display:inline-block;overflow:hidden;vertical-align:top;line-height:1.3;height:1.3em}
.roll>span{display:block;transition:transform .55s var(--out)}
.roll>span::after{content:attr(data-t);display:block}
a:hover>.roll>span,button:hover>.roll>span{transform:translateY(-50%)}
.mag{transition-property:color,background-color,border-color,box-shadow,opacity!important}

/* 3D tilt + glare */
.tilt{position:relative;transform-style:preserve-3d}
.glare{position:absolute;inset:0;z-index:3;pointer-events:none;border-radius:inherit;background:radial-gradient(320px circle at var(--mx,50%) var(--my,50%),rgba(255,242,0,.2),transparent 60%);opacity:0;transition:opacity .5s;mix-blend-mode:multiply}
.vt .glare{mix-blend-mode:screen;background:radial-gradient(300px circle at var(--mx,50%) var(--my,50%),rgba(255,242,0,.28),transparent 60%)}
.tilt:hover .glare{opacity:1}
.tw:hover .rotor{animation-duration:1.6s}

/* credentials: navy fill rises */
.usp{position:relative;isolation:isolate;overflow:hidden}
.usp::before{content:'';position:absolute;inset:0;z-index:-1;background:var(--navy);transform:scaleY(0);transform-origin:bottom;transition:transform .65s var(--ease)}
.usp:hover{background:transparent}
.usp:hover::before{transform:scaleY(1)}
.usp h4,.usp p,.usp b{transition:color .45s}
.usp svg{transition:color .45s,transform .8s var(--out)}
.usp:hover h4{color:#fff}.usp:hover p{color:#c8c9e2}.usp:hover b,.usp:hover svg{color:var(--yellow)}
.usp:hover svg{transform:rotate(-12deg) scale(1.15)}

/* certificates, directors, images */
.ros{transition:background .6s,color .5s,transform 1.1s var(--out)}
.cert:hover .ros{background:var(--navy);color:var(--yellow);transform:rotate(360deg)}
.cert b{transition:color .4s}.cert:hover b{color:var(--black)}
.dir .av{transition:background .5s,color .5s}
.dir:hover .av{background:var(--navy);color:var(--yellow)}
.pframe img,.pstep .pi img{transition:scale 1.4s var(--out)}
.pframe:hover img,.gc:hover .pframe img,.vcard:hover .pframe img{scale:1.07}
.marq:hover div{animation-play-state:paused}
.plant i{transition:background .4s,color .4s}.plant:hover i{background:var(--navy);color:var(--yellow)}

/* custom cursor (fine pointers only) */
.cur-r,.cur-b{display:none}
@media (hover:hover) and (pointer:fine){
  .cur-r,.cur-b{display:block;position:fixed;left:0;top:0;z-index:1500;pointer-events:none;opacity:0;transition:opacity .3s}
  .cur-on .cur-r,.cur-on .cur-b{opacity:1}
  .cur-r{mix-blend-mode:difference}
  .cur-r::before{content:'';position:absolute;left:-17px;top:-17px;width:34px;height:34px;border-radius:50%;border:1.5px solid #fff;transition:transform .5s var(--out),background .3s,opacity .3s}
  .cur-r.lk::before{transform:scale(1.45);background:#fff}
  .cur-big .cur-r::before{transform:scale(0);opacity:0}
  .cur-b b{position:absolute;left:-46px;top:-46px;width:92px;height:92px;border-radius:50%;background:var(--yellow);color:var(--black);display:grid;place-items:center;font-size:.68rem;font-weight:700;letter-spacing:.16em;text-transform:uppercase;transform:scale(0);transition:transform .55s var(--out);box-shadow:0 18px 40px -16px rgba(0,0,0,.35)}
  .cur-big .cur-b b{transform:scale(1)}
}
@media (max-width:760px){
  .mani-in{min-height:560px}
  .mani-c{max-width:100%}
  .mani-img{opacity:.45}
  .mani-img.i1{left:-6%;top:5%}.mani-img.i2{right:-6%;top:3%}.mani-img.i3{left:-4%;bottom:3%}.mani-img.i4{right:-8%;bottom:5%}
}

/* light scroll-scrub text */
.group-say{margin-top:24px;font-size:clamp(1.15rem,1.7vw,1.6rem);line-height:1.45;letter-spacing:-.02em;color:var(--black);max-width:40ch}
.group-say b{font-weight:700}
.group-say em,blockquote em{font-family:var(--serif);font-style:italic;color:var(--navy)}
.lead-x{font-size:clamp(1.1rem,1.4vw,1.3rem);color:var(--black)}

/* nav: Groups dropdown */
.dd{position:relative;display:flex;align-items:center}
.dd-t{display:block;white-space:nowrap;padding:10px 14px;font-size:.86rem;font-weight:500;color:var(--muted);transition:color .3s}
.dd-t svg{display:inline-block;vertical-align:top;margin:.19em 0 0 6px;width:13px;transition:transform .45s var(--out)}
.dd:hover .dd-t,.dd:focus-within .dd-t,.dd.on .dd-t{color:var(--navy)}
.dd:hover .dd-t svg,.dd:focus-within .dd-t svg{transform:rotate(180deg)}
body:not(.menu-open) .hdr.ov:not(.solid):not(.hv) .dd-t{color:rgba(255,255,255,.85)}
body:not(.menu-open) .hdr.ov:not(.solid):not(.hv) .dd:hover .dd-t,body:not(.menu-open) .hdr.ov:not(.solid):not(.hv) .dd.on .dd-t{color:#fff}
.dd-m{position:absolute;top:100%;left:50%;padding-top:14px;width:440px;transform:translate(-50%,12px);opacity:0;visibility:hidden;transition:opacity .35s,transform .5s var(--out),visibility .35s;z-index:5}
.dd:hover .dd-m,.dd:focus-within .dd-m{opacity:1;visibility:visible;transform:translate(-50%,0)}
.dd-in{background:#fff;border:1px solid var(--line);border-radius:4px;padding:10px;box-shadow:0 40px 80px -36px rgba(11,11,16,.4)}
.dd-h{display:block;padding:10px 12px 8px;font-size:.66rem;font-weight:700;letter-spacing:.2em;text-transform:uppercase;color:var(--muted)}
.hdr .nav .dd-m a{color:var(--black)!important;transition:background .35s,border-color .35s,color .35s}
.hdr .nav .dd-m a.dd-co{display:grid;grid-template-columns:56px 1fr 18px;gap:14px;align-items:center;padding:10px 12px;border-radius:4px}
.hdr .nav .dd-m a::after{display:none}
.hdr .nav .dd-m a:hover,.hdr .nav .dd-m a.cur{background:var(--paper)}
.dd-m img{width:56px;height:56px;border-radius:4px;object-fit:cover}
.dd-m b{display:block;font-size:.88rem;font-weight:600;line-height:1.3;color:var(--black)}
.dd-m small{display:block;font-size:.74rem;color:var(--muted);margin-top:2px}
.dd-m a>svg{width:16px;color:var(--navy);opacity:0;transform:translateX(-6px);transition:.4s var(--out)}
.dd-m a:hover>svg,.dd-m a.cur>svg{opacity:1;transform:none}

/* company pages */
.chip.on{background:var(--navy);border-color:var(--navy);color:#fff}.chip.on i{background:var(--yellow)}
a.chip{transition:border-color .3s}a.chip:hover{border-color:var(--navy)}
.facts{display:grid;grid-template-columns:1.3fr 1fr 1fr 1fr;border-top:1px solid var(--line-2);border-bottom:1px solid var(--line-2)}
.facts div{padding:clamp(24px,4vh,40px) clamp(16px,2vw,30px);border-right:1px solid var(--line)}
.facts div:last-child{border-right:0}
.facts small{display:block;font-size:.7rem;font-weight:700;letter-spacing:.18em;text-transform:uppercase;color:var(--muted);margin-bottom:10px}
.facts b{font-weight:500;font-size:clamp(1.05rem,1.4vw,1.3rem);letter-spacing:-.02em;color:var(--black);line-height:1.35}
.facts a:hover{color:var(--navy);text-decoration:underline;text-underline-offset:4px}
.colocate{display:grid;grid-template-columns:.9fr 1.1fr;gap:clamp(30px,5vw,80px);align-items:center}
.cmap{border-radius:4px;overflow:hidden;border:1px solid var(--line);height:clamp(320px,52vh,500px);background:var(--paper);box-shadow:0 50px 90px -60px rgba(47,47,101,.5)}
.cmap iframe{width:100%;height:100%;border:0;filter:grayscale(.35) contrast(1.05)}
.gc-go{align-self:flex-start;margin-top:14px}
.gc.here{border-color:var(--navy);box-shadow:0 0 0 1px var(--navy)}
.gc.here .tagp{background:var(--yellow)}
@media (max-width:980px){.facts{grid-template-columns:1fr 1fr}.facts div:nth-child(2){border-right:0}.facts div:nth-child(-n+2){border-bottom:1px solid var(--line)}.colocate{grid-template-columns:1fr}}
/* ---------- menu ---------- */
.nav{align-items:center;gap:0}
.nav a,.dd-t{padding:10px 12px}
.nav a::after{left:12px;right:12px}
.nav a.dd-t{display:block}
.dd-m.md{width:270px}
.dd-m.mega{width:min(860px,calc(100vw - 40px))}
.mega .dd-in{display:grid;grid-template-columns:1.05fr 1fr;gap:4px;padding:12px}
.dd-col{min-width:0}
.dd-col+.dd-col{border-left:1px solid var(--line);padding-left:12px}
.hdr .nav .dd-m a.dd-l{display:flex;align-items:center;justify-content:space-between;gap:12px;padding:11px 12px;border-radius:4px}
.hdr .nav .dd-m a.dd-sh{display:grid;grid-template-columns:44px 1fr 18px;gap:14px;align-items:center;padding:10px 12px;border-radius:4px}
.dd-sh i{width:44px;height:44px;border-radius:4px;background:var(--navy);color:var(--yellow);display:grid;place-items:center;transition:transform .45s var(--out)}
.dd-sh i svg{width:22px;height:22px}
.dd-sh:hover i{transform:rotate(-6deg) scale(1.05)}
.dd-svc+.dd-svc{margin-top:6px;padding-top:6px;border-top:1px solid var(--line)}
.dd-sub{display:flex;flex-wrap:wrap;gap:6px;padding:2px 12px 10px 70px}
.hdr .nav .dd-m .dd-sub a{display:inline-flex;padding:5px 11px;border-radius:2px;border:1px solid var(--line);background:#fff;font-size:.74rem;font-weight:500;color:var(--muted)!important}
.hdr .nav .dd-m .dd-sub a:hover{border-color:var(--navy);background:#fff;color:var(--navy)!important}
@media (max-width:1360px) and (min-width:1181px){.nav a,.dd-t{padding:10px 9px;font-size:.83rem}.nav a::after{left:9px;right:9px}.hdr{gap:16px}}

/* ---------- approved-content additions: badges, client groups, sustainability ---------- */
.ros.badge{background:#fff}.ros.badge img{position:relative;z-index:1;width:72%;height:72%;object-fit:contain}
.cert:hover .ros.badge{background:#fff}
.ctl button i.badge{background:#fff;border:1px solid var(--line)}.ctl button i.badge img{width:34px;height:34px;object-fit:contain}
.cpanel .bigros.badge img{display:block;width:56%;margin:0 auto;object-fit:contain}
p.commit{margin-top:clamp(30px,5vh,50px);max-width:70ch;color:var(--ink)}
.cgroup{margin-top:clamp(36px,6vh,64px)}
.cgroup:first-of-type{margin-top:0}
.cg-tag{display:flex;align-items:center;gap:18px;margin-bottom:22px}
.cg-tag::before,.cg-tag::after{content:'';flex:1;height:1px;background:var(--line-2)}
.cg-tag span{padding:11px 30px;background:var(--navy);color:#fff;font-weight:800;font-size:.86rem;letter-spacing:.18em;clip-path:polygon(12px 0,calc(100% - 12px) 0,100% 100%,0 100%)}
.logos.clr{display:flex;flex-wrap:wrap;justify-content:center}
.logos.clr .logo{width:calc((100% - 3 * clamp(12px,1.6vw,22px)) / 4)}
.logos.clr.five .logo{width:calc((100% - 4 * clamp(12px,1.6vw,22px)) / 5)}
.logos.clr .logo img[src*="rpsg"],.logos.clr .logo img[src*="evren"],.logos.clr .logo img[src*="renfra"],.logos.clr .logo img[src*="power-wind"],.logos.clr .logo img[src*="venwind"]{max-height:62% !important;max-width:52% !important}
.hlogos .hl img[src*="rpsg"],.hlogos .hl img[src*="evren"],.hlogos .hl img[src*="renfra"],.hlogos .hl img[src*="power-wind"],.hlogos .hl img[src*="venwind"]{max-height:86%;max-width:80%}
.logos.clr .logo{aspect-ratio:auto;height:clamp(104px,13vh,128px);padding:16px 18px;gap:0}
.logos.clr .logo img{filter:none;opacity:1;max-width:64%;max-height:50%}
.logos.clr .logo img[src*="rpsg"]{max-height:80% !important}
.logos.clr .logo span{font-size:.62rem}
.sus{display:grid;grid-template-columns:1fr 1fr;gap:0 clamp(24px,4vw,60px)}
.sus-i{display:flex;gap:18px;align-items:flex-start;padding:20px 0;border-bottom:1px solid var(--line)}
.sus-i i{flex:none;width:52px;height:52px;border-radius:50%;display:grid;place-items:center;background:#1f7a3a;color:#fff}
.sus-i i svg{width:24px;height:24px}
.sus-i h4{font-size:1.02rem;font-weight:700;letter-spacing:-.02em;color:#1f6b33}
.sus-i p{font-size:.9rem;color:var(--muted);margin-top:4px}
.sdg{display:grid;grid-template-columns:240px 1fr;gap:20px;align-items:center;margin-top:clamp(34px,5vh,54px);padding:22px;border:1px solid var(--line);border-radius:4px;background:#fff}
.sdg-h b{display:block;font-size:.9rem;font-weight:800;letter-spacing:.06em;text-transform:uppercase;color:var(--navy);line-height:1.4}
.sdg-h span{font-size:.85rem;color:var(--muted)}
.sdg-g{display:grid;grid-template-columns:repeat(8,1fr);gap:8px}
.sdg-g span{display:flex;flex-direction:column;gap:6px;min-height:96px;padding:10px;border-radius:4px;background:var(--c);color:#fff;font-size:.62rem;font-weight:700;letter-spacing:.04em;text-transform:uppercase;line-height:1.25}
.sdg-g b{font-size:1.5rem;font-weight:800;line-height:1}
.sus-f{display:flex;justify-content:center;align-items:center;gap:18px;margin-top:28px;font-weight:700;color:var(--navy)}
.sus-f i{width:6px;height:6px;border-radius:50%;background:#1f7a3a}
.vgrid .vcard:last-child:nth-child(3n+1){grid-column:1/-1;display:grid;grid-template-columns:1fr 2fr}
.vgrid .vcard:last-child:nth-child(3n+1) .pframe{height:100%;min-height:220px}
.vgrid .vcard:last-child:nth-child(3n+1) .vb{align-self:center;padding:clamp(28px,3vw,44px)}
@media (max-width:1100px){.sdg{grid-template-columns:1fr}.sdg-g{grid-template-columns:repeat(4,1fr)}.logos.clr.five .logo{width:calc((100% - 3 * clamp(12px,1.6vw,22px)) / 4)}}
@media (max-width:980px){.sus{grid-template-columns:1fr}.logos.clr .logo,.logos.clr.five .logo{width:calc((100% - 2 * clamp(12px,1.6vw,22px)) / 3)}.vgrid .vcard:last-child:nth-child(3n+1){display:block}}
@media (max-width:640px){.sdg-g{grid-template-columns:repeat(2,1fr)}.logos.clr .logo,.logos.clr.five .logo{width:calc((100% - clamp(12px,1.6vw,22px)) / 2)}}

.hclients{display:flex;flex-direction:column;gap:clamp(12px,2.6vh,28px);width:100%}
.cg-tag.sm{margin-bottom:clamp(8px,1.4vh,14px)}
.cg-tag.sm span{padding:8px 24px;font-size:.72rem;letter-spacing:.2em}
.hlogos{display:flex;flex-wrap:wrap;justify-content:center;gap:10px}
.hlogos .hl{width:calc((100% - 30px) / 4);height:clamp(52px,8.6vh,82px);display:flex;align-items:center;justify-content:center;padding:9px 12px;overflow:hidden;background:#fff;border:1px solid var(--line);border-radius:4px;transition:box-shadow .45s,border-color .45s,translate .45s var(--out)}
.hlogos.n5 .hl{width:calc((100% - 40px) / 5)}
.hlogos .hl:hover{translate:0 -3px;border-color:var(--line-2);box-shadow:0 20px 40px -26px rgba(47,47,101,.5)}
.hlogos .hl img{display:block;max-width:76%;max-height:66%;width:auto;height:auto;object-fit:contain}

@media (max-width:640px){.hlogos .hl,.hlogos.n5 .hl{width:calc((100% - 20px) / 3)}}

/* ---------- clients / projects / achievements / careers ---------- */
.logos{display:grid;grid-template-columns:repeat(4,1fr);gap:clamp(12px,1.6vw,22px)}
.logo{aspect-ratio:3/2;border:1px solid var(--line);border-radius:4px;background:#fff;display:flex;flex-direction:column;align-items:center;justify-content:center;gap:12px;padding:22px;transition:box-shadow .5s,border-color .5s,translate .5s var(--out)}
.logo:hover{border-color:var(--line-2);box-shadow:0 30px 60px -36px rgba(47,47,101,.45);translate:0 -4px}
.logo img{max-width:72%;max-height:58%;object-fit:contain;filter:grayscale(1);opacity:.75;transition:filter .5s,opacity .5s}
.logo:hover img{filter:none;opacity:1}
.logo>svg{width:30px;height:30px;color:var(--line-2)}
.logo span{font-size:.68rem;font-weight:600;letter-spacing:.14em;text-transform:uppercase;color:#a6a7bb;text-align:center}
.js .logo[data-rv]:not(.in),.js .c3-card[data-rv]:not(.in),.js .job[data-rv]:not(.in){transform:translateY(80px)}
.type-h{min-height:2.1em}
.js .c3-card[data-rv],.js .job[data-rv],.js .logo[data-rv]{transition:opacity 1.1s var(--out),transform 1.3s var(--out),box-shadow .5s,border-color .5s,translate .5s var(--out);transition-delay:var(--d,0s),var(--d,0s),0s,0s,0s}
.type-h.typing::after{content:'';display:inline-block;width:.07em;height:.8em;margin-left:.08em;background:var(--navy);vertical-align:-.05em;animation:tblink 1s steps(1) infinite}
.type-h.typed::after{display:none}
@keyframes tblink{50%{opacity:0}}
.c3{display:grid;grid-template-columns:repeat(3,1fr);gap:clamp(18px,2.2vw,30px)}
.c3-card{display:flex;flex-direction:column;border-radius:4px;overflow:hidden;background:#fff;border:1px solid var(--line);transition:box-shadow .5s,border-color .5s,opacity 1.1s var(--out),transform 1.3s var(--out)}
.c3-card:hover{box-shadow:0 40px 70px -40px rgba(47,47,101,.45);border-color:var(--line-2)}
.c3-img{position:relative;aspect-ratio:4/3;overflow:hidden;background:var(--paper)}
.c3-img img{width:100%;height:100%;object-fit:cover;transition:transform 1.2s var(--out)}
.c3-card:hover .c3-img img{transform:scale(1.06)}
.c3-img small{position:absolute;left:16px;top:16px;padding:6px 11px;border-radius:2px;background:var(--yellow);color:var(--navy);font-size:.64rem;font-weight:700;letter-spacing:.14em;text-transform:uppercase}
.c3-b{display:flex;flex-direction:column;gap:10px;padding:clamp(20px,2vw,28px);flex:1}
.c3-b h3{font-size:clamp(1.12rem,1.4vw,1.3rem);font-weight:600;letter-spacing:-.025em;color:var(--black);line-height:1.3}
.c3-b p{font-size:.9rem;color:var(--muted);line-height:1.6}
.c3-more{margin-top:auto;padding-top:12px;display:inline-flex;align-items:center;gap:10px;font-size:.84rem;font-weight:700;color:var(--navy)}
.c3-more svg{width:16px;transition:transform .45s var(--out)}
.c3-card:hover .c3-more svg{transform:translateX(5px)}
.dt{padding:calc(var(--hdr) + clamp(40px,8vh,90px)) 0 clamp(60px,10vh,110px);background:#fff}
.dt h1{margin:16px 0 18px;max-width:22ch}
.dt-img{margin:clamp(30px,5vh,50px) 0;aspect-ratio:16/7;border-radius:4px;overflow:hidden;background:var(--paper)}
.dt-img img{width:100%;height:100%;object-fit:cover}
.dt-g{display:grid;grid-template-columns:1.5fr .8fr;gap:clamp(30px,5vw,80px);align-items:start}
.dt-body p{font-size:clamp(1.02rem,1.2vw,1.12rem);line-height:1.8;color:#3c3d55;margin-bottom:20px}
.dt-facts{border:1px solid var(--line);border-radius:4px;padding:28px;background:var(--paper)}
.dt-facts h5{font-size:.7rem;font-weight:700;letter-spacing:.2em;text-transform:uppercase;color:var(--muted);margin-bottom:8px}
.dt-facts dl{margin-bottom:24px}
.dt-facts dl div{display:flex;justify-content:space-between;gap:16px;padding:13px 0;border-bottom:1px solid var(--line-2)}
.dt-facts dt{color:var(--muted);font-size:.86rem}
.dt-facts dd{font-weight:600;color:var(--black);text-align:right;font-size:.9rem}
.jobs{display:flex;flex-direction:column;gap:14px}
.job{display:flex;align-items:center;justify-content:space-between;gap:30px;padding:clamp(22px,2.4vw,32px);border:1px solid var(--line);border-radius:4px;background:#fff;transition:box-shadow .5s,border-color .5s,opacity 1.1s var(--out),transform 1.3s var(--out)}
.job:hover{border-color:var(--line-2);box-shadow:0 30px 60px -40px rgba(47,47,101,.45)}
.job h3{font-size:clamp(1.1rem,1.4vw,1.3rem);font-weight:600;letter-spacing:-.025em;color:var(--black)}
.job-t{display:flex;flex-wrap:wrap;gap:8px 18px;margin:10px 0 12px}
.job-t span{display:inline-flex;align-items:center;gap:7px;font-size:.8rem;font-weight:500;color:var(--navy)}
.job-t svg{width:15px;height:15px}
.job p{font-size:.9rem;color:var(--muted);max-width:70ch}
.job .btn{flex:none}
.fld.sel select{width:100%;appearance:none;-webkit-appearance:none;border:0;border-bottom:1px solid var(--line-2);padding:22px 28px 10px 0;font:400 1rem 'Manrope',sans-serif;background:transparent url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%232f2f65' stroke-width='2'%3E%3Cpath d='M6 9l6 6 6-6'/%3E%3C/svg%3E") no-repeat right 2px bottom 12px/16px;color:var(--ink);outline:none;cursor:pointer}
.fld.sel select:focus{border-color:var(--navy)}
.fld.sel label{top:0;font-size:.7rem;letter-spacing:.12em;text-transform:uppercase;font-weight:600;color:var(--navy)}
.drop{position:relative;display:flex;align-items:center;gap:18px;padding:22px;margin:4px 0 26px;border:1.5px dashed var(--line-2);border-radius:4px;background:var(--paper);cursor:pointer;transition:border-color .3s,background .3s}
.drop:hover,.drop.over{border-color:var(--navy);background:#fff}
.drop.has{border-style:solid;border-color:var(--navy)}
.drop input{position:absolute;width:1px;height:1px;opacity:0;pointer-events:none}
.drop i{flex:none;width:52px;height:52px;border-radius:4px;background:var(--navy);color:var(--yellow);display:grid;place-items:center}
.drop i svg{width:24px;height:24px}
.drop b{display:block;font-weight:600;color:var(--black)}
.drop small{display:block;font-size:.8rem;color:var(--muted);margin-top:3px}
.drop em{display:block;font-style:normal;font-size:.84rem;font-weight:600;color:var(--navy);margin-top:6px}
.drop em:empty{display:none}
@media (max-width:980px){.logos{grid-template-columns:repeat(3,1fr)}.c3{grid-template-columns:1fr 1fr}.dt-g{grid-template-columns:1fr}.job{flex-direction:column;align-items:flex-start}}
@media (max-width:640px){.logos{grid-template-columns:1fr 1fr}.c3{grid-template-columns:1fr}.dt-img{aspect-ratio:4/3}}
.prj-f{display:flex;flex-wrap:wrap;gap:8px;margin-bottom:clamp(26px,4vh,40px)}
.prj-f button{padding:10px 18px;border-radius:2px;border:1px solid var(--line-2);font-size:.82rem;font-weight:600;color:var(--muted);background:#fff;transition:.35s}
.prj-f button:hover{border-color:var(--navy);color:var(--navy)}
.prj-f button.on{background:var(--navy);border-color:var(--navy);color:#fff}
.prj-g{display:grid;grid-template-columns:repeat(3,1fr);gap:clamp(14px,2vw,26px)}
.prj{position:relative;border-radius:4px;overflow:hidden;min-height:clamp(340px,46vh,440px);display:flex;align-items:flex-end;background:var(--navy);isolation:isolate}
.prj.big{grid-column:span 2}
.prj img{position:absolute;inset:0;width:100%;height:100%;object-fit:cover;z-index:-2;transition:transform 1.2s var(--out)}
.prj::before{content:'';position:absolute;inset:0;z-index:-1;background:linear-gradient(180deg,rgba(14,14,40,0) 28%,rgba(22,22,58,.9))}
.prj:hover img{transform:scale(1.06)}
.prj .pb{padding:clamp(20px,2.4vw,32px)}
.prj small{display:inline-block;padding:5px 10px;border-radius:2px;background:var(--yellow);color:var(--navy);font-size:.64rem;font-weight:700;letter-spacing:.14em;text-transform:uppercase}
.prj h3{font-size:clamp(1.3rem,1.8vw,1.7rem);font-weight:600;letter-spacing:-.03em;margin:14px 0 8px;color:#fff}
.prj p{font-size:.88rem;color:rgba(255,255,255,.8);max-width:48ch}
.prj em{display:block;font-style:normal;font-size:.72rem;font-weight:600;letter-spacing:.14em;text-transform:uppercase;color:rgba(255,255,255,.62);margin-top:14px}
.prj.off{display:none}
.dest{display:flex;flex-wrap:wrap;gap:8px;margin:28px 0 34px}
.roles{display:grid;grid-template-columns:repeat(4,1fr);gap:1px;background:var(--line);border:1px solid var(--line);border-radius:4px;overflow:hidden}
.role{background:#fff;padding:clamp(22px,2.4vw,32px);display:flex;flex-direction:column;gap:8px;transition:background .4s}
.role:hover{background:var(--paper)}
.role svg{width:28px;height:28px;color:var(--navy);margin-bottom:10px}
.role h4{font-size:1rem;font-weight:600;letter-spacing:-.02em}
.role p{font-size:.84rem;color:var(--muted)}
.join{display:grid;grid-template-columns:1.25fr .75fr;gap:clamp(30px,5vw,80px);align-items:center;padding:clamp(34px,6vw,80px);border-radius:4px;background:var(--navy)}
.join .eyebrow{color:var(--yellow)}
.join h2{color:#fff;margin-top:16px}
.join p{color:rgba(255,255,255,.75);margin-top:18px;max-width:52ch}
.join .acts{display:flex;flex-direction:column;gap:12px;align-items:stretch}
.join .btn{justify-content:space-between}
.btn-y{background:var(--yellow);color:var(--navy)}.btn-y::before{background:#fff}
.btn-o{border:1px solid rgba(255,255,255,.3);color:#fff}.btn-o::before{background:#fff}.btn-o:hover{color:var(--navy)}
.ind .usp{min-height:clamp(150px,22vh,200px)}
@media (max-width:980px){.prj-g{grid-template-columns:1fr}.prj.big{grid-column:auto}.roles{grid-template-columns:1fr 1fr}.join{grid-template-columns:1fr}}
@media (max-width:640px){.roles{grid-template-columns:1fr}}

/* strip arrows */
.pinned-strip{scroll-snap-type:none!important}
.hzone{position:relative}
.hs-nav{display:flex;justify-content:flex-end;gap:10px;margin-top:4px}
.hs-nav[hidden]{display:none}
.hs-btn{width:52px;height:52px;border-radius:50%;display:grid;place-items:center;border:1px solid var(--line-2);background:#fff;color:var(--navy);transition:background .4s,color .4s,border-color .4s,opacity .3s,box-shadow .4s}
.hs-btn svg{width:20px;transition:transform .45s var(--out)}
.hs-btn.prev svg{transform:rotate(180deg)}
.hs-btn:hover:not(:disabled){background:var(--navy);border-color:var(--navy);color:var(--yellow);box-shadow:0 16px 30px -18px rgba(47,47,101,.7)}
.hs-btn.next:hover:not(:disabled) svg{transform:translateX(3px)}
.hs-btn.prev:hover:not(:disabled) svg{transform:rotate(180deg) translateX(3px)}
.hs-btn:disabled{opacity:.35;cursor:default}
@media (max-width:640px){.hs-btn{width:46px;height:46px}}

/* ---------- responsive ---------- */
@media (max-width:1180px){
  .nav{display:none}.burger{display:block}
  .hdr .btn{display:none}
  .usp-grid{grid-template-columns:repeat(2,1fr)}
  .vt-row{grid-template-columns:repeat(3,1fr)}
  .iso-row{grid-template-columns:repeat(3,1fr)}
}
/* short desktop/laptop screens: keep the sideways slider, compact the panels */
@media (min-width:1024px) and (max-height:820px) and (min-height:540px){
  .panel{padding:calc(var(--hdr) + 6px) var(--pad) 22px}
  .panel .h-l{font-size:clamp(1.6rem,3vw,2.6rem)}
  .panel .h-xl{font-size:clamp(2.4rem,5vw,4.4rem)}
  .panel .lead{font-size:.95rem;line-height:1.6}
  .ph{margin-bottom:14px}.ph h2{margin-top:10px}
  .tw{padding:10px 18px 16px}
  .tw .tower-svg{height:24vh}
  .tw .mw{font-size:clamp(2rem,3.4vw,3rem)}
  .tw h3{margin:4px 0 2px;font-size:1rem}
  .tw p{font-size:.78rem;line-height:1.45;display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden}
  .gl .map{width:min(100%,calc(58vh * 1.9));margin-left:auto}
  .gl h2{margin:10px 0 12px!important}
  .regions{margin-top:14px}.regions div{padding:9px 14px}
  .usp{padding:12px 16px;min-height:0}.usp b{margin-top:8px;font-size:clamp(1.4rem,2vw,2rem)}
  .vt{height:clamp(200px,37vh,480px)}
  .who-art{height:min(58vh,520px)}
  .who h2{margin:10px 0 14px}.who .chips{margin:16px 0 20px}
  .cap-num{font-size:clamp(4rem,9vw,8rem)}.cap-turb{width:clamp(90px,9vw,140px)}
  .clients .client{aspect-ratio:3/1.6}
  .cert{padding:18px 14px 16px}.ros{width:clamp(64px,6vw,84px);margin-bottom:12px}
  .pnum{top:calc(var(--hdr) + 6px)}
}
@media (max-width:1023px),(max-height:539px){
  .htrack{flex-direction:column}
  .panel{width:100%;height:auto;min-height:0;padding:clamp(70px,12vh,110px) var(--pad);border-right:0;border-bottom:1px solid var(--line)}
}
@media (max-width:980px){
  :root{--hdr:70px}
  .brand .em{width:46px}.brand .wm{height:12px}
  .badge30 img{height:40px}
  .who,.usp-wrap,.gl,.cap,.cta,.two,.msg,.ct,.ctabs,.tech,.tech.rev,.phero .ph-top{grid-template-columns:1fr}
  .tech.rev .tech-art{order:0}
  .who-art{height:420px}
  .tw-grid,.gcards,.dirs,.vgrid,.vals3,.vm{grid-template-columns:1fr}
  .tw .tower-svg{height:300px}
  .stats{grid-template-columns:repeat(2,1fr)}
  .stat:nth-child(2){border-right:0}.stat:nth-child(-n+2){border-bottom:1px solid var(--line)}
  .foot-g{grid-template-columns:1fr 1fr}
  .intro-seal{position:relative;right:auto;bottom:auto;width:118px;margin-top:clamp(20px,4vh,40px)}
  .intro-cue{display:none}
  .phero .seal{width:140px}
  .cpanel .cp.on{grid-template-columns:1fr}
  .ph{flex-direction:column;align-items:flex-start}
  .group-h{flex-direction:column;align-items:flex-start}
}
@media (max-width:640px){
  .vt-row{grid-template-columns:1fr 1fr}
  .vt{height:260px}.vt p{display:none}
  .iso-row,.usp-grid{grid-template-columns:1fr 1fr}
  .usp{min-height:0}
  .row2,.specs,.regions{grid-template-columns:1fr}
  .foot-g{grid-template-columns:1fr}
  .brand{gap:9px}.brand .em{width:40px}.brand .wm{height:11px}
  .hdr-r{gap:10px}
  .badge30{padding:3px 6px}.badge30 img{height:34px}
  .snd{height:44px;padding:0 14px 0 12px}.snd .lbl{display:none}
  .hero-cue{display:none}
  .plant{grid-template-columns:auto 1fr}.plant em{display:none}
  .clients{grid-template-columns:repeat(2,1fr)}
}
@media (max-width:360px){.brand{gap:7px}.brand .em{width:34px}.brand .wm{height:9px}.badge30 img{height:30px}.burger{width:42px;height:42px}.burger span{left:12px;right:12px}}
@media (prefers-reduced-motion:reduce){
  *,*::before,*::after{animation-duration:.01ms!important;animation-iteration-count:1!important;transition-duration:.01ms!important}
}

/* ================= premium white system: one condensed face, logo navy, clean white ================= */
:root{--head:'Manrope',system-ui,sans-serif;--paper:#f5f5f6;--paper-2:#ededef;--slate:#34344f}
html{font-size:17px}
@media (min-width:1024px) and (max-height:820px){html{font-size:16px}}
@media (min-width:1680px) and (min-height:900px){html{font-size:18px}}
body{font-family:var(--head);font-weight:400;letter-spacing:0;color:var(--slate);background:#fff}
h1,h2,h3,h4,.mani-t,.marq div{font-family:var(--head);text-transform:uppercase;font-style:normal}
h1,h2,h3,h4,.mani-t{color:var(--navy)}
h1,h2{font-weight:800;line-height:1.06;letter-spacing:-.02em}
.h-l{font-size:clamp(1.9rem,3.5vw,3.3rem)}
.h-xl{font-size:clamp(2.5rem,5.2vw,4.9rem);line-height:1.02;letter-spacing:-.025em}
h3,h4{font-weight:800;line-height:1.15;letter-spacing:-.005em}
.serif,h1 .serif,h2 .serif,h3 .serif,h4 .serif,.mani-t em,.marq div span.s,.group-say em,blockquote em{font-family:inherit;font-style:normal;font-weight:inherit;letter-spacing:inherit;color:inherit}
.c3-b h3,.job h3{color:var(--navy)}
.lead{font-weight:300;font-size:clamp(1.05rem,1.3vw,1.25rem);color:var(--slate);line-height:1.6}
.lead b{font-weight:600;color:var(--navy)}
.eyebrow{gap:0;font-family:var(--head);font-weight:700;font-size:.74rem;letter-spacing:.2em}
.eyebrow::before{content:none;display:none}
.stat b,.tw .mw,.vals3 b,.tech-art .mwbig,.ld-num,.usp b{font-family:var(--head);font-weight:700;letter-spacing:-.04em}
.stat>span{font-size:.95rem;font-weight:500;color:var(--slate);line-height:1.5;max-width:24ch}
.stat b{align-items:flex-start;font-size:clamp(3rem,5.2vw,4.8rem);font-weight:800;letter-spacing:-.045em;line-height:.9;color:var(--navy)}
.stat b>span{font:inherit;letter-spacing:inherit}
.stat b sup{font-size:.4em;font-weight:800;margin-top:.12em;color:var(--navy)}
.stat b sup.y{background:none;padding:0;border-radius:0;margin-left:.18em;letter-spacing:0;box-shadow:inset 0 -.28em 0 var(--yellow)}
.stat:hover b{color:var(--navy)}
/* no underlines or marker highlights anywhere */
.hl-y{background:none;padding:0}
.mani-t b,.stat b sup.y{box-shadow:none}
.link{border-bottom:0;padding-bottom:0}
.nav a,.dd-t{font-family:var(--head);font-weight:700;font-size:.8rem;text-transform:uppercase;letter-spacing:.06em;color:var(--slate)}
.btn{border-radius:2px;height:52px;padding:0 26px;font-family:var(--head);font-weight:700;font-size:.8rem;text-transform:uppercase;letter-spacing:.1em;box-shadow:none}
.btn-n{box-shadow:none}
.ph h2{max-width:24ch}
:is(.tw,.vt,.gc,.vmc,.dir,.vcard,.cpanel,.c3-b,.job,.prj,.ms,.pstep,.usp,.role,.sus-i,.hcg,.cert) :is(h3,h4){letter-spacing:-.005em}
/* statement: white page, navy type */
.mani{background:#fff}
.mani-c{max-width:min(900px,66vw)}
.mani-t{font-weight:800;font-size:clamp(1.7rem,3.3vw,3.2rem);line-height:1.12;letter-spacing:-.02em;color:var(--navy)}
.mani-t b{font-weight:800;color:var(--navy);box-shadow:inset 0 -.16em 0 var(--yellow)}
.mani .eyebrow,.mani-sig{color:var(--navy)}
@media (max-width:1023px){.mani-c{max-width:100%}}
/* white canvas everywhere (no tinted glows) */
.hwrap.is-h{background:#fff}
.hwrap.is-h .hglow{display:none}
.phero{background:#fff}
/* branches */
.group{background:#fff;border-top:1px solid var(--line)}
.group-say{color:var(--slate);font-weight:300;letter-spacing:0}
.group-say b{color:var(--navy);font-weight:700}
.gc{border-color:var(--line-2)}
.gc:hover{box-shadow:0 30px 60px -36px rgba(29,29,69,.35)}
.gc h3{font-size:1.25rem}
.gc p{font-size:.95rem}
.gc .gm{font-size:.9rem}
/* phones: larger, comfortable reading */
@media (max-width:640px){
  .h-l{font-size:clamp(1.75rem,7.6vw,2.3rem)}
  .h-xl{font-size:clamp(2.1rem,9.6vw,2.8rem)}
  .mani-t{font-size:clamp(1.5rem,6.4vw,2rem)}
  .lead{font-size:1.08rem}
  .eyebrow{font-size:.8rem}
}
.hwrap.is-h .panel.pdark{background:var(--navy-d)}
/* finale panel: photo + navy veil */
.panel.pdark{background:var(--navy-d);color:#fff;overflow:hidden}
.pbg{position:absolute;inset:0;z-index:0;overflow:hidden}
.pbg img{width:100%;height:100%;object-fit:cover}
.pbg::after{content:'';position:absolute;inset:0;background:linear-gradient(100deg,rgba(19,19,47,.94) 0%,rgba(29,29,69,.84) 48%,rgba(29,29,69,.45) 100%)}
.pdark .pin{position:relative;z-index:1}
.pdark .ghost{-webkit-text-stroke:1px rgba(255,255,255,.14);z-index:1}
.pdark .eyebrow{color:var(--yellow)}.pdark h2{color:#fff}
.pdark .btn-l{background:transparent;color:#fff;border-color:rgba(255,255,255,.5)}.pdark .btn-l::before{background:#fff}.pdark .btn-l:hover{color:var(--navy);border-color:#fff}
.pdark .btn-y:hover{color:var(--navy)}
.pdark .seal-ring text{fill:#fff}
@media (min-width:1024px) and (max-height:820px) and (min-height:540px){.panel .ph h2{font-size:clamp(1.5rem,2.6vw,2.3rem)}.vt{height:clamp(180px,30vh,420px)}}

/* ================= navy chapters + weld-seam transition ================= */
.panel.pnv{background:var(--navy)}
.hsea{display:none}
.hwrap.is-h .panel.pnv{background:transparent}
.hwrap.is-h .hsea{display:block;position:absolute;top:0;bottom:0;z-index:0;pointer-events:none;--b:0;--heat:0;background:radial-gradient(55% 70% at 28% 42%,rgba(84,84,150,.55) 0%,transparent 70%),radial-gradient(50% 60% at 78% 62%,rgba(84,84,150,.4) 0%,transparent 70%),var(--navy)}
.hsea::before{content:'';position:absolute;left:0;right:0;bottom:clamp(54px,8vh,78px);height:1px;background:rgba(255,255,255,.14)}
.seam{position:absolute;top:0;height:100%;width:12vw}
.seam.l{right:calc(100% - 1px)}
.seam.r{left:calc(100% - 1px)}
.seam svg{position:absolute;inset:0;width:100%;height:100%;overflow:visible}
.seam .f{fill:var(--navy)}
.seam .g{fill:none;stroke:var(--yellow);stroke-width:14px;vector-effect:non-scaling-stroke;filter:blur(7px);opacity:calc(.08 + var(--heat) * .6)}
.seam .ln{fill:none;stroke:#fff7a6;stroke-width:1.6px;vector-effect:non-scaling-stroke;opacity:calc(.6 + var(--heat) * .4)}
.seam .sp{position:absolute;inset:0;opacity:var(--heat)}
.seam .sp i{position:absolute;top:calc(var(--t) * 100%);width:3px;height:3px;margin:-1.5px;border-radius:50%;background:#fffbd0;box-shadow:0 0 6px 2px rgba(255,242,0,.75);animation:spark .9s linear infinite;animation-delay:var(--dl)}
.seam.l .sp i{left:calc(100% - var(--b) * var(--k) * 1%)}
.seam.r .sp i{left:calc(var(--b) * var(--k) * 1%)}
.seam.r .sp i{--sx:-1}
@keyframes spark{0%{transform:translate(0,0) scale(1);opacity:1}100%{transform:translate(calc(var(--dx) * var(--sx,1)),var(--dy)) scale(.2);opacity:0}}
/* type & components on navy */
.pnv .eyebrow{color:var(--yellow)}
.pnv h2,.pnv h4{color:#fff}
.pnv .lead{color:#c3c4de}.pnv .lead b{color:#fff}
.pnv .link{color:#fff}
.pnv .ghost{-webkit-text-stroke:1px rgba(255,255,255,.12)}
.pnv .usp-grid,.pnv .usp{border-color:rgba(255,255,255,.14)}
.pnv .usp svg{color:var(--yellow)}
.pnv .usp b{color:#fff}
.pnv .usp p{color:#a9aacb}
.pnv .usp::before{background:rgba(255,255,255,.07)}
.pnv .usp:hover p{color:#d6d7ec}
.pnv .map .dot{fill:rgba(255,255,255,.2)}
.pnv .map .arc{stroke:var(--yellow)}
.pnv .map .dest circle{fill:#fff}.pnv .map .dest .pulse{stroke:#fff}.pnv .map .dest text{fill:#fff}
.pnv .map .home circle{stroke:#fff}.pnv .map .home .pulse{stroke:var(--yellow)}
.pnv .map .home text{fill:#fff!important}
.pnv .regions{background:none;border-color:rgba(255,255,255,.16)}
.pnv .regions div{background:none;box-shadow:0 0 0 .5px rgba(255,255,255,.16)}
.pnv .regions b{color:#fff}.pnv .regions span{color:#a9aacb}

/* ================= Who we are: split layout with full-bleed photo ================= */
.hwrap.is-h .panel.pwho{background:#fff;padding-right:0}
.who-t{max-width:min(600px,calc(54vw - var(--pad) - 80px))}
.who-t h2{margin:18px 0 22px}
.who-pil{display:grid;grid-template-columns:repeat(3,1fr);margin:30px 0 34px;border-top:1px solid var(--line-2)}
.who-pil>div{padding:18px 18px 0 0}
.who-pil>div+div{padding-left:18px;border-left:1px solid var(--line-2)}
.who-pil small{font-size:.72rem;font-weight:800;letter-spacing:.14em;color:var(--muted)}
.who-pil h4{font-size:1.05rem;margin:8px 0 6px}
.who-pil p{font-size:.84rem;line-height:1.5;color:var(--muted)}
.who-bleed{position:absolute;top:var(--hdr);right:0;bottom:0;width:46vw;overflow:hidden;background:var(--navy-d);z-index:0}
.who-bleed img{position:absolute;inset:0;width:100%;height:100%;object-fit:cover}
.who-bleed::after{content:'';position:absolute;inset:0;background:linear-gradient(180deg,rgba(19,19,47,.15) 0%,transparent 30%,transparent 60%,rgba(19,19,47,.55) 100%)}
.who-stats{position:absolute;z-index:2;right:0;bottom:0;width:46vw;display:grid;grid-template-columns:repeat(3,1fr);background:rgba(29,29,69,.9);-webkit-backdrop-filter:blur(10px);backdrop-filter:blur(10px)}
.who-stats>div{padding:clamp(16px,2.6vh,26px) clamp(16px,2vw,30px)}
.who-stats>div+div{border-left:1px solid rgba(255,255,255,.12)}
.who-stats b{display:block;font-weight:800;font-size:clamp(1.5rem,2.2vw,2.1rem);line-height:1;letter-spacing:-.03em;color:#fff}
.who-stats span{display:block;margin-top:6px;font-size:.78rem;color:#c3c4de}
.who-card{position:absolute;z-index:3;left:calc(54vw - 36px);bottom:clamp(120px,17vh,180px);width:clamp(200px,16vw,270px);background:#fff;padding:6px 6px 0;box-shadow:0 40px 70px -30px rgba(19,19,47,.55)}
.who-card img{display:block;width:100%;aspect-ratio:4/3;object-fit:cover}
.who-card span{display:block;padding:10px 6px 11px;font-size:.72rem;font-weight:800;letter-spacing:.12em;text-transform:uppercase;color:var(--navy)}
.pwho .pin{z-index:1}
@media (min-width:1024px) and (max-height:820px) and (min-height:540px){.who-pil{margin:20px 0 24px}.who-pil p{font-size:.78rem}.who-card{width:clamp(170px,13vw,220px)}}
@media (max-width:1023px){
  .panel.pwho{flex-direction:column;align-items:stretch}
  .pwho .pnum{display:none}
  .who-bleed{position:relative;top:auto;width:auto;height:clamp(240px,58vw,440px);margin:0 0 0;order:0}
  .who-stats{position:relative;width:auto;order:1;margin-bottom:34px}
  .who-card{display:none}
  .pwho .pin{order:2}
  .who-t{max-width:none}
}
@media (max-width:560px){.who-pil{grid-template-columns:1fr}.who-pil>div+div{padding-left:0;border-left:0;border-top:1px solid var(--line-2);margin-top:14px}.who-pil>div{padding-right:0}}

/* ================= secondary (body) typeface: MAN-style neo-grotesque, black ================= */
:root{--body:'Arimo','Helvetica Neue',Helvetica,Arial,sans-serif;--slate:#111;--ink:#111;--muted:#3b3b3b}
body{font-family:var(--body);color:#111}
.lead{font-weight:400;color:#111;letter-spacing:0;line-height:1.6}
.lead b,.group-say b{font-weight:700;color:#000}
input,textarea,select,button{font-family:var(--body)}
/* headings, labels, menu, buttons and big figures keep the primary face */
.who-stats b,.who-pil small,.mt-l b,.mani-sig,.intro-tag,.dd-h,.dd-co b,.mn-l,.mn-t,.cg-tag span,.regions b,.ld-num,.marq div{font-family:var(--head)}
</style>
</head>
<body class="pg-<?= e($p) ?>">

<!-- ============ LOADER ============ -->
<div id="loader" aria-hidden="true">
  <div class="ld-c">
    <img class="ld-em" src="assets/logo/emblem.svg" alt="">
    <img class="ld-wm" src="assets/logo/toolfab-towers-wordmark.svg" alt="">
    <div class="ld-bar"><i></i></div>
  </div>
  <div class="ld-tag">30+ Years · Wind Towers</div>
  <div class="ld-num" id="ldNum">00</div>
</div>

<!-- ============ SHUTTER ============ -->
<div class="shutter" id="shutter" aria-hidden="true"><i></i><i></i><div class="sh-c"><div><img src="assets/logo/emblem.svg" alt=""><span id="shLabel">TOOLFAB TOWERS</span></div></div></div>

<!-- ============ HEADER ============ -->
<?php
$chev = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>';
$arr = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M4 12h15M13 6l6 6-6 6"/></svg>';
$products = [['towers', 'tower', 'Wind Tower Solutions', 'Lattice · Tubular · 7 MW Modular'], ['verticals', 'gear', 'Engineering & Fabrication', 'Boilers, bridges, rail & heavy steel']];
$company = [['quality', 'shield', 'Certifications', 'ISO & EN approvals'], ['clients', 'users', 'Clients', 'Who we build for'], ['projects', 'image', 'Projects', 'Our work in the field'], ['achievements', 'award', 'Achievements', 'Milestones & firsts']];
$ddItem = fn($k, $ic, $t, $sub) => '<a class="dd-l' . ($k === $GLOBALS['p'] ? ' cur' : '') . '" href="' . url($k) . '" data-label="' . e($t) . '"><b>' . e($t) . '</b>' . $GLOBALS['arr'] . '</a>';
$inList = fn($list) => in_array($p, array_column($list, 0), true);
?>
<header class="hdr" id="hdr">
  <a class="brand" href="<?= url('home') ?>" data-label="Home" aria-label="TOOLFAB TOWERS home">
    <img class="em" src="assets/logo/emblem.svg" alt="TOOLFAB emblem">
    <img class="wm" src="assets/logo/toolfab-towers-wordmark.svg" alt="TOOLFAB TOWERS">
  </a>
  <nav class="nav" aria-label="Main">
    <a href="./" data-label="Home" class="<?= $p === 'home' ? 'on' : '' ?>">Home</a>
    <a href="<?= url('about') ?>" data-label="About" class="<?= $p === 'about' ? 'on' : '' ?>">About</a>
    <div class="dd<?= $isCo ? ' on' : '' ?>">
      <button class="dd-t" type="button" aria-haspopup="true" aria-expanded="false"><span class="roll"><span data-t="Groups">Groups</span></span><?= $chev ?></button>
      <div class="dd-m"><div class="dd-in">
        <span class="dd-h">The TOOLFAB Group</span>
        <?php foreach ($companies as $slug => $c): $g = $group[$c['g']]; ?>
        <a class="dd-co<?= $slug === $p ? ' cur' : '' ?>" href="<?= url($slug) ?>" data-label="<?= e($c['short']) ?>"><img src="<?= e($g[5]) ?>" alt=""><span><b><?= e($g[0]) ?></b><small><?= e($c['district']) ?>, <?= e($c['state']) ?> · <?= e($g[2]) ?></small></span><?= $arr ?></a>
        <?php endforeach; ?>
      </div></div>
    </div>
    <div class="dd<?= $inList($products) ? ' on' : '' ?>">
      <button class="dd-t" type="button" aria-haspopup="true" aria-expanded="false"><span class="roll"><span data-t="Products">Products</span></span><?= $chev ?></button>
      <div class="dd-m md"><div class="dd-in">
        <span class="dd-h">Products &amp; Services</span>
        <?php foreach ($products as $it) echo $ddItem(...$it); ?>
      </div></div>
    </div>
    <div class="dd<?= $inList($company) ? ' on' : '' ?>">
      <button class="dd-t" type="button" aria-haspopup="true" aria-expanded="false"><span class="roll"><span data-t="Our Work">Our Work</span></span><?= $chev ?></button>
      <div class="dd-m md"><div class="dd-in">
        <span class="dd-h">Our Work</span>
        <?php foreach ($company as $it) echo $ddItem(...$it); ?>
      </div></div>
    </div>
    <a href="<?= url('careers') ?>" data-label="Careers" class="<?= $p === 'careers' ? 'on' : '' ?>">Careers</a>
    <a href="<?= url('contact') ?>" data-label="Contact us" class="<?= $p === 'contact' ? 'on' : '' ?>">Contact us</a>
  </nav>
  <div class="hdr-r">
    <a class="badge30" href="<?= url('about') ?>" data-label="About" title="30+ Years of Excellence in Wind Towers"><img src="assets/logo/30-years.svg" alt="30+ Years of Excellence in Wind Towers"></a>
    <a class="btn btn-n" href="<?= url('contact') ?>" data-label="Contact us">Get a Quote <?= $arrow ?></a>
    <button class="burger" id="burger" aria-label="Menu"><span></span><span></span></button>
  </div>
</header>
<nav class="mnav" id="mnav" aria-label="Mobile">
  <?php
  $mi = 0;
  $chevM = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>';
  $mLink = function ($k, $l) use (&$mi, $p, $arr) {
      return '<a class="mn-l' . ($k === $p ? ' on' : '') . '" href="' . url($k) . '" data-label="' . e($l) . '" style="--i:' . $mi++ . '"><span>' . e($l) . '</span></a>';
  };
  $mGrp = function ($title, $links) use (&$mi, $p, $chevM) {
      $open = in_array($p, array_column($links, 0), true);
      $h = '<div class="mn-g' . ($open ? ' open cur' : '') . '" style="--i:' . $mi++ . '"><button class="mn-t" type="button" aria-expanded="' . ($open ? 'true' : 'false') . '"><span>' . e($title) . '</span>' . $chevM . '</button><div class="mn-s"><div><div>';
      foreach ($links as [$k, $l, $em]) $h .= '<a class="' . ($k === $p ? 'on' : '') . '" href="' . url($k) . '" data-label="' . e($l) . '"><b>' . e($l) . '</b>' . ($em !== '' ? '<small>' . e($em) . '</small>' : '') . '</a>';
      return $h . '</div></div></div></div>';
  };
  ?>
  <div class="mn-list">
  <?php
  echo $mLink('home', 'Home'), $mLink('about', 'About');
  echo $mGrp('Groups', array_map(fn($slug, $c) => [$slug, $c['short'], $c['district'] . ', ' . $c['state']], array_keys($companies), $companies));
  echo $mGrp('Products', array_map(fn($x) => [$x[0], $x[2], $x[3]], $products));
  echo $mGrp('Our Work', array_map(fn($x) => [$x[0], $x[2], $x[3]], $company));
  echo $mLink('careers', 'Careers');
  echo $mLink('contact', 'Contact us');
  ?>
  </div>
  <div class="mn-foot" style="--i:<?= $mi ?>">
    <a class="btn btn-n mn-q" href="<?= url('contact') ?>" data-label="Contact us">Get a Quote <?= $arrow ?></a>
    <div class="mn-c">
      <a href="tel:<?= e(preg_replace('/\s+/', '', $site['phone'])) ?>"><?= icon('phone') ?>Call us</a>
      <a href="mailto:<?= e($site['email']) ?>"><?= icon('mail') ?>Email us</a>
    </div>
  </div>
</nav>

<main id="main">
<?php if ($p === 'home'): ?>
<!-- =========================================================== HOME -->
<section class="cinema" id="cinema" aria-label="TOOLFAB film">
  <div class="cin-frame" id="cinFrame">
    <img src="assets/img/hero-poster-g.jpg" alt="TOOLFAB manufacturing plant">
    <video id="heroVid" muted playsinline preload="metadata" poster="assets/img/hero-poster-g.jpg" data-src="assets/video/toolfab-hero-h.mp4" data-src-m="assets/video/toolfab-hero-mobile-h.mp4"></video>
    <div class="h30" id="h30" aria-hidden="true"><video id="vid30" muted playsinline preload="none" data-src="assets/video/30-years-a.mp4"></video></div>
  </div>
  <div class="hero-cue"><i></i>Scroll</div>
  <button class="snd" id="sndBtn" type="button" aria-pressed="false" aria-label="Turn sound on">
    <svg class="ic-off" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M4 9v6h4l5 4V5L8 9z"/><path d="M17 9l4 6M21 9l-4 6"/></svg>
    <svg class="ic-on" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M4 9v6h4l5 4V5L8 9z"/><path d="M16.5 8.5a5 5 0 010 7M19 6a8.5 8.5 0 010 12"/></svg>
    <span class="eq"><i></i><i></i><i></i><i></i></span><span class="lbl" id="sndLbl">Sound off</span>
  </button>
</section>

<section class="intro" id="intro">
  <div class="intro-logo" id="introLogo">
    <img class="intro-em" data-rv="s" src="assets/logo/emblem.svg" alt="TOOLFAB emblem">
    <h1 style="margin:0"><img class="intro-wm" data-rv style="--d:.15s" src="assets/logo/toolfab-towers-wordmark.svg" alt="TOOLFAB TOWERS"></h1>
    <p class="intro-tag" data-rv style="--d:.3s"><span><?= implode(' ', array_map(fn($x) => '<i>' . e($x) . '</i>', preg_split('/(?<=\.)\s+/', $site['tagline']))) ?></span></p>
  </div>
  <div class="intro-seal" id="introSeal"><div data-rv="s" style="--d:.45s"><?= seal() ?></div></div>
</section>

<section class="mani" aria-label="About TOOLFAB">
  <div class="mani-in">
    <div class="mani-img i1" data-ms=".55"><img src="assets/img/hq/cnc-cutting-sm.webp" alt="" loading="lazy"></div>
    <div class="mani-img i2" data-ms=".85"><img src="assets/img/hq/welder-blue-sm.webp" alt="" loading="lazy"></div>
    <div class="mani-img i3" data-ms=".7"><img src="assets/img/hq/plate-rolling-sm.webp" alt="" loading="lazy"></div>
    <div class="mani-img i4" data-ms=".45"><img src="assets/img/hq/painted-section-sm.webp" alt="" loading="lazy"></div>
    <div class="mani-c">
      <span class="eyebrow">Since 1995</span>
      <p class="mani-t">We cut, roll and weld the steel that carries <em>the world’s wind.</em> Thirty years, three plants and <b>2000+ towers</b> later — every section still leaves our floor <b>built right.</b></p>
      <span class="mani-sig"><i></i>TOOLFAB TOWERS<i></i></span>
    </div>
  </div>
</section>


<section class="wrap" style="padding-top:clamp(40px,8vh,80px);padding-bottom:clamp(40px,8vh,80px)">
  <div class="stats">
    <div class="stat" data-rv><b><span data-count="30">0</span><sup>+</sup></b><span>Years of heavy engineering fabrication</span></div>
    <div class="stat" data-rv style="--d:.08s"><b><span data-count="2000">0</span><sup>+</sup></b><span>Windmill towers supplied</span></div>
    <div class="stat" data-rv style="--d:.16s"><b><span data-count="3">0</span></b><span>Strategic manufacturing locations</span></div>
    <div class="stat" data-rv style="--d:.24s"><b><span data-count="7">0</span><sup class="y">MW</sup></b><span>Only manufacturer in India of modular steel towers up to 7 MW</span></div>
  </div>
</section>

<section class="hwrap" id="hwrap">
  <div class="hglow" aria-hidden="true"><i></i><i></i><i></i></div>
  <div class="htrack" id="htrack">
    <div class="hcanvas" aria-hidden="true"></div>
    <div class="hsea" id="hsea" aria-hidden="true"><div class="seam l"><svg viewBox="0 0 100 100" preserveAspectRatio="none"><path class="f"/><path class="g"/><path class="ln"/></svg><span class="sp"><i style="--t:0.12;--k:0.317;--dx:-38px;--dy:-26px;--dl:-0.1s"></i><i style="--t:0.2;--k:0.480;--dx:-54px;--dy:14px;--dl:-0.5s"></i><i style="--t:0.31;--k:0.642;--dx:-30px;--dy:30px;--dl:-0.25s"></i><i style="--t:0.4;--k:0.720;--dx:-62px;--dy:-18px;--dl:-0.7s"></i><i style="--t:0.48;--k:0.749;--dx:-44px;--dy:22px;--dl:-0.05s"></i><i style="--t:0.55;--k:0.742;--dx:-58px;--dy:-30px;--dl:-0.6s"></i><i style="--t:0.63;--k:0.699;--dx:-36px;--dy:18px;--dl:-0.35s"></i><i style="--t:0.72;--k:0.605;--dx:-50px;--dy:-12px;--dl:-0.8s"></i><i style="--t:0.8;--k:0.480;--dx:-42px;--dy:26px;--dl:-0.15s"></i><i style="--t:0.9;--k:0.270;--dx:-30px;--dy:-20px;--dl:-0.45s"></i></span></div><div class="seam r"><svg viewBox="0 0 100 100" preserveAspectRatio="none"><path class="f"/><path class="g"/><path class="ln"/></svg><span class="sp"><i style="--t:0.12;--k:0.317;--dx:-38px;--dy:-26px;--dl:-0.1s"></i><i style="--t:0.2;--k:0.480;--dx:-54px;--dy:14px;--dl:-0.5s"></i><i style="--t:0.31;--k:0.642;--dx:-30px;--dy:30px;--dl:-0.25s"></i><i style="--t:0.4;--k:0.720;--dx:-62px;--dy:-18px;--dl:-0.7s"></i><i style="--t:0.48;--k:0.749;--dx:-44px;--dy:22px;--dl:-0.05s"></i><i style="--t:0.55;--k:0.742;--dx:-58px;--dy:-30px;--dl:-0.6s"></i><i style="--t:0.63;--k:0.699;--dx:-36px;--dy:18px;--dl:-0.35s"></i><i style="--t:0.72;--k:0.605;--dx:-50px;--dy:-12px;--dl:-0.8s"></i><i style="--t:0.8;--k:0.480;--dx:-42px;--dy:26px;--dl:-0.15s"></i><i style="--t:0.9;--k:0.270;--dx:-30px;--dy:-20px;--dl:-0.45s"></i></span></div></div>

    <div class="panel pwho" data-title="Who we are">
      <span class="pnum">01 / 08</span>
      <div class="who-bleed" data-px-img><img src="assets/img/hq/plant-trichy-aerial.webp" alt="Aerial view of the TOOLFAB plant, Tiruchirappalli" loading="lazy"></div>
      <div class="who-stats">
        <div><b>1995</b><span>Established</span></div>
        <div><b>3</b><span>Manufacturing plants</span></div>
        <div><b>2000+</b><span>Towers supplied</span></div>
      </div>
      <div class="who-card"><img src="assets/img/hq/engineer-pointing-sm.webp" alt="Engineers on the TOOLFAB shop floor" loading="lazy"><span>Head office · Tiruchirappalli</span></div>
      <div class="pin who2">
        <div class="who-t">
          <span class="eyebrow" data-rv>Who we are</span>
          <h2 class="h-l split" data-split>Three decades of engineering. <span class="serif">A future powered by innovation.</span></h2>
          <p class="lead" data-rv style="--d:.2s">TOOLFAB is a heavy engineering and renewable energy infrastructure group with a strong foundation in steel fabrication and wind tower manufacturing. Established in <b>1995</b>, the group has evolved into a manufacturing partner for wind energy developers, turbine manufacturers and infrastructure companies.</p>
          <div class="who-pil" data-rv style="--d:.3s">
            <div><small>01</small><h4>People</h4><p>Skilled fabricators, welders and engineers across three plants.</p></div>
            <div><small>02</small><h4>Precision</h4><p>Qualified welding and full plate-to-flange traceability.</p></div>
            <div><small>03</small><h4>Progress</h4><p>From 2.1 MW lattice to 7 MW modular towers.</p></div>
          </div>
          <a class="btn btn-n" data-rv style="--d:.4s" href="<?= url('about') ?>" data-label="About">Our story &amp; leadership <?= $arrow ?></a>
        </div>
      </div>
    </div>

    <div class="panel pp" data-title="Tower technologies">
      <span class="pnum">02 / 08</span>
      <div class="pin">
        <div class="ph">
          <div><span class="eyebrow" data-rv>Three tower technologies</span><h2 class="h-l split" data-split>From 2.1 MW lattice to <span class="hl-y">7 MW modular.</span></h2></div>
          <a class="link" data-rv href="<?= url('towers') ?>" data-label="Tower Technology">Compare technologies <?= $arrow ?></a>
        </div>
        <div class="tw-grid">
          <?php $ti = 0; foreach ($towers as $k => [$name, $mw, $desc, $pts]): ?>
          <a class="tw drawwatch" href="<?= url('towers') ?>#<?= $k ?>" data-label="Tower Technology" data-rv style="--d:<?= .1 + $ti++ * .12 ?>s">
            <?php if ($k === 'modular'): ?><span class="tag">ONLY MANUFACTURER IN INDIA</span><?php endif; ?>
            <?= towerSvg($k) ?>
            <div class="mw"><span data-count="<?= $mw ?>" data-dec="1">0</span><small>MW</small></div>
            <h3><?= e($name) ?></h3>
            <p><?= e($desc) ?></p>
          </a>
          <?php endforeach; ?>
        </div>
      </div>
    </div>

    <div class="panel pnv" data-title="Our credentials">
      <span class="pnum">03 / 08</span>
      <div class="pin usp-wrap">
        <div>
          <span class="eyebrow" data-rv>Why TOOLFAB</span>
          <h2 class="h-l split" data-split style="margin:18px 0 22px">Credentials built <span class="serif">tower by tower.</span></h2>
          <p class="lead" data-rv style="--d:.2s">Thirty years of fabrication discipline, <b>India’s only 7 MW modular tower</b> capability and internationally certified quality — delivered from three plants.</p>
        </div>
        <div class="usp-grid">
          <?php foreach ($usps as $i => [$big, $title, $txt, $ic]): ?>
          <div class="usp" data-rv style="--d:<?= .05 * $i ?>s"><?= icon($ic) ?><b><?= e($big) ?></b><h4><?= e($title) ?></h4><p><?= e($txt) ?></p></div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>

    <div class="panel pp pnv" data-title="Global supplier">
      <span class="pnum">04 / 08</span>
      <div class="pin gl">
        <div>
          <span class="eyebrow" data-rv>Global supplier</span>
          <h2 class="h-l split" data-split style="margin:18px 0 22px">Built in India. <span class="serif">Standing worldwide.</span></h2>
          <p class="lead" data-rv style="--d:.2s">A global supplier of wind energy solutions — TOOLFAB towers and engineered steel stand on wind farms and infrastructure across <b>four continents.</b></p>
          <div class="regions" data-rv style="--d:.3s">
            <div><b>North America</b><span>Wind &amp; infrastructure</span></div>
            <div><b>Europe</b><span>EN 1090 certified supply</span></div>
            <div><b>Middle East</b><span>Energy &amp; EPC projects</span></div>
            <div><b>Asia</b><span>South &amp; South-East Asia</span></div>
          </div>
        </div>
        <div class="map" id="worldMap" data-dest='<?= e(json_encode($destinations)) ?>'></div>
      </div>
    </div>

    <div class="panel" data-title="Certifications">
      <span class="ghost" data-px="20" style="font-size:clamp(12rem,26vw,26rem);right:-4vw;top:8vh">ISO</span>
      <span class="pnum">05 / 08</span>
      <div class="pin">
        <div class="ph">
          <div><span class="eyebrow" data-rv>Certified quality</span><h2 class="h-l split" data-split>Five certifications. <span class="serif">Zero compromise.</span></h2></div>
          <a class="link" data-rv href="<?= url('quality') ?>" data-label="Certifications">View certifications <?= $arrow ?></a>
        </div>
        <div class="iso-row">
          <?php foreach ($certs as $i => [$code, $name]): ?>
          <a class="cert" href="<?= url('quality') ?>#c<?= $i ?>" data-label="Certifications" data-rv style="--d:<?= .08 * $i ?>s"><div class="cbadge"><img src="<?= e($certs[$i][4]) ?>" alt="<?= e($code) ?> certification" title="<?= e($code) ?>" loading="lazy"></div><span><?= e($name) ?></span></a>
          <?php endforeach; ?>
        </div>
      </div>
    </div>

    <div class="panel pp" data-title="Clients & capacity">
      <span class="pnum">06 / 08</span>
      <div class="pin cap">
        <div>
          <span class="eyebrow" data-rv>Clients &amp; power capacity</span>
          <h2 class="h-m" data-rv style="margin:18px 0 30px;--d:.1s;max-width:22ch">Tower platforms delivered for leading wind OEMs &amp; IPPs.</h2>
          <div class="cap-meter" id="capMeter">
            <div class="cap-num"><span id="capNum">1.0</span><small>MW</small></div>
            <div class="cap-turb drawn" id="capTurb"><?= towerSvg('tubular') ?></div>
          </div>
          <div class="cap-scale" id="capScale"><?php foreach ($platforms as $pl): ?><span><?= e($pl) ?> MW</span><?php endforeach; ?></div>
        </div>
        <?= clientGroupsHtml($clientGroups) ?>
      </div>
    </div>

    <div class="panel" data-title="Other verticals">
      <span class="pnum">07 / 08</span>
      <div class="pin">
        <div class="ph">
          <div><span class="eyebrow" data-rv>Engineering &amp; Fabrication</span><h2 class="h-l split" data-split>Beyond towers — <span class="serif">boilers &amp; heavy structures.</span></h2></div>
          <a class="link" data-rv href="<?= url('verticals') ?>" data-label="Engineering &amp; Fabrication">All services <?= $arrow ?></a>
        </div>
        <div class="vt-row">
          <?php foreach (array_slice($verticals, 0, 6) as $i => [$t, $d, $img]): ?>
          <a class="vt" href="<?= url('verticals') ?>" data-label="Engineering &amp; Fabrication" data-rv style="--d:<?= .07 * $i ?>s"><img src="<?= e($img) ?>" alt="<?= e($t) ?>" loading="lazy"><div class="vc"><small>0<?= $i + 1 ?></small><h3><?= e($t) ?></h3><p><?= e($d) ?></p></div></a>
          <?php endforeach; ?>
        </div>
      </div>
    </div>

    <div class="panel pdark" data-title="Let’s build">
      <div class="pbg"><img src="assets/img/hq/dispatch-road.webp" alt="" loading="lazy" decoding="async"></div>
      <span class="ghost" data-px="16" style="font-size:clamp(14rem,30vw,30rem);left:-3vw;bottom:-10vh">7 MW</span>
      <span class="pnum">08 / 08</span>
      <div class="pin cta">
        <div>
          <span class="eyebrow" data-rv>Planning a wind or steel-structure project?</span>
          <h2 class="h-xl split" data-split style="margin-top:22px">Let’s raise the <span class="serif">next tower.</span></h2>
          <div class="acts" data-rv style="--d:.2s">
            <a class="btn btn-y" href="<?= url('contact') ?>" data-label="Contact">Request a Quote <?= $arrow ?></a>
            <a class="btn btn-l" href="tel:<?= e(preg_replace('/\s+/', '', $site['phone'])) ?>"><?= e($site['phone']) ?></a>
          </div>
        </div>
        <div data-rv="s"><?= seal() ?></div>
      </div>
    </div>

  </div>
</section>

<?php elseif ($isCo): /* ======================================================= GROUP COMPANY PAGE */
$c = $companies[$p]; [$cName, $cLoc, $cTag, $cSpec, $cWeb, $cImg, $cQ] = $group[$c['g']];
?>
<section class="phero">
  <span class="ph-ghost" data-speed=".2" aria-hidden="true">0<?= $c['g'] + 1 ?></span>
  <div class="wrap ph-top">
    <div>
      <div class="crumb" data-rv><a href="./" data-label="Home">Home</a><span>/</span><span>Groups</span><span>/</span><span style="color:var(--navy)"><?= e($c['short']) ?></span></div>
      <span class="eyebrow" data-rv><?= e($cTag) ?> · <?= e($c['district']) ?>, <?= e($c['state']) ?></span>
      <h1 class="h-l split" data-split><?= $c['title'] ?></h1>
      <p class="lead" data-rv style="--d:.25s"><?= e($c['lead']) ?></p>
      <div class="pchips" data-rv style="--d:.35s">
        <?php foreach ($companies as $slug => $o): ?><a class="chip<?= $slug === $p ? ' on' : '' ?>" href="<?= url($slug) ?>" data-label="<?= e($o['short']) ?>"><i></i><?= e($group[$o['g']][0]) ?></a><?php endforeach; ?>
      </div>
    </div>
    <div data-rv="s" style="--d:.3s"><?= seal() ?></div>
  </div>
  <div class="ph-band"><div class="pframe" id="phBand"><img src="<?= e($c['hero']) ?>" alt="<?= e($cName) ?> plant"></div></div>
</section>

<?= statement($c['statement'][0], $c['statement'][1], $c['imgs']) ?>

<section class="sec">
  <div class="wrap">
    <div class="facts">
      <div data-rv><small>Company</small><b><?= e($cName) ?></b></div>
      <div data-rv style="--d:.08s"><small>Location</small><b><?= e($cLoc) ?></b></div>
      <div data-rv style="--d:.16s"><small>Role in the group</small><b><?= e($cTag) ?></b></div>
      <div data-rv style="--d:.24s"><small>Website</small><b><a href="https://<?= e($cWeb) ?>" target="_blank" rel="noopener"><?= e($cWeb) ?> ↗</a></b></div>
    </div>
  </div>
</section>

<section class="sec alt">
  <div class="wrap">
    <div class="sec-h"><span class="eyebrow" data-rv>What we build in <?= e($c['district']) ?></span><h2 class="h-l split" data-split><?= e($cSpec) ?></h2></div>
    <div class="vgrid">
      <?php foreach ($c['focus'] as $i => [$ic, $t, $d, $img]): ?>
      <div class="vcard" data-rv style="--d:<?= .08 * $i ?>s"><div class="pframe" data-px-img><img src="<?= e($img) ?>" alt="<?= e($t) ?>" loading="lazy"></div><div class="vb"><small>FOCUS 0<?= $i + 1 ?></small><h3><?= e($t) ?></h3><p><?= e($d) ?></p></div></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="sec">
  <div class="wrap two">
    <div class="pframe" data-px-img><img src="<?= e($c['side']) ?>" alt="Inside <?= e($cName) ?>" loading="lazy"></div>
    <div>
      <span class="eyebrow" data-rv>Plant capabilities</span>
      <h2 class="h-l split" data-split style="margin:18px 0 10px">One group standard, <span class="serif">built in <?= e($c['district']) ?>.</span></h2>
      <p class="lead lead-x" data-scrub>Every plant in the TOOLFAB Group works to the same <b>certified quality, welding and safety systems</b> — so a section from <?= e($c['district']) ?> is <em>built right,</em> every time.</p>
      <div class="specs" data-rv><?php foreach ($c['caps'] as $cp): ?><div><?= e($cp) ?></div><?php endforeach; ?></div>
      <a class="btn btn-n" data-rv href="<?= url('contact') ?>" data-label="Contact">Enquire with <?= e($c['short']) ?> <?= $arrow ?></a>
    </div>
  </div>
</section>

<section class="sec alt">
  <div class="wrap colocate">
    <div>
      <span class="eyebrow" data-rv>Visit the plant</span>
      <h2 class="h-l split" data-split style="margin:18px 0 22px"><?= e($c['district']) ?>, <span class="serif"><?= e($c['state']) ?>.</span></h2>
      <div class="plants" data-rv style="--d:.15s">
        <a class="plant" href="<?= e(maps($cQ)) ?>" target="_blank" rel="noopener"><i><?= icon('pin') ?></i><div><b><?= e($cName) ?></b><span><?= e($cLoc) ?></span></div><em>DIRECTIONS ↗</em></a>
        <a class="plant" href="https://<?= e($cWeb) ?>" target="_blank" rel="noopener"><i><?= icon('web') ?></i><div><b><?= e($cWeb) ?></b><span>Company website</span></div><em>VISIT ↗</em></a>
        <a class="plant" href="mailto:<?= e($site['email']) ?>"><i><?= icon('mail') ?></i><div><b><?= e($site['email']) ?></b><span>General enquiries</span></div></a>
        <a class="plant" href="tel:<?= e(preg_replace('/\s+/', '', $site['phone'])) ?>"><i><?= icon('phone') ?></i><div><b><?= e($site['phone']) ?></b><span>Call or WhatsApp</span></div></a>
      </div>
    </div>
    <div class="cmap" data-rv="s"><iframe title="Map of <?= e($cName) ?>" src="https://www.google.com/maps?q=<?= rawurlencode($cQ) ?>&amp;output=embed" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
  </div>
</section>

<?php else: /* ======================================================= SUB PAGES */
$heroes = [
    'about'     => ['About Toolfab – Since 1995', 'Three decades of engineering. <span class="serif">A future powered by innovation.</span>', 'TOOLFAB is a heavy engineering and renewable energy infrastructure group with a strong foundation in steel fabrication and wind tower manufacturing.', 'assets/img/hq/plant-aerial-end.webp'],
    'towers'    => ['Wind Tower Solutions', 'Engineered wind towers. <span class="serif">One standard of precision.</span>', 'TOOLFAB manufactures engineered wind tower solutions designed to support diverse turbine platforms, project requirements, and site conditions.', 'assets/img/hq/section-yard.webp'],
    'verticals' => ['Engineering & Fabrication', 'Beyond wind towers — <span class="serif">comprehensive steel engineering solutions.</span>', 'TOOLFAB delivers engineered fabrication solutions across renewable energy, industrial infrastructure, and heavy engineering sectors.', 'assets/img/hq/tower-shell.webp'],
    'quality'   => ['Quality & Certifications', 'Quality built into <span class="serif">every stage of manufacturing.</span>', 'At TOOLFAB, quality is integral to our manufacturing philosophy.', 'assets/img/hq/inspection-team.webp'],
    'global'    => ['Global Reach', 'A global supplier of <span class="serif">wind energy solutions.</span>', 'Built in India, standing worldwide — TOOLFAB steel supports wind farms and infrastructure across four continents.', 'assets/img/hq/dispatch-road.webp'],
    'clients'      => ['Our Clients', 'Trusted by the builders of <span class="serif">clean energy.</span>', 'Wind turbine OEMs, developers, EPC contractors and infrastructure agencies rely on TOOLFAB steel — tower after tower.', 'assets/img/hq/yard-aerial.webp'],
    'projects'     => ['Projects', 'Steel that stands on <span class="serif">every horizon.</span>', 'From 7 MW modular towers to high-speed rail trusses and airport roofs — a selection of what our plants have delivered.', 'assets/img/hq/plant-aerial-end.webp'],
    'achievements' => ['Achievements', 'Thirty years of <span class="serif">firsts.</span>', 'Milestones earned on the shop floor — measured in towers delivered, standards met and technologies brought to India.', 'assets/img/hq/plant-trichy-wide.webp'],
    'careers'      => ['Careers', 'Build your career <span class="serif">with TOOLFAB.</span>', 'At TOOLFAB, we believe our people are the foundation of engineering excellence.', 'assets/img/hq/engineer-pointing.webp'],
    'contact'   => ['Contact us', 'Let’s build the next engineering <span class="serif">milestone together.</span>', 'Whether you are planning a wind energy project, seeking a manufacturing partner, or exploring engineered steel fabrication solutions, our team is ready to discuss your requirements.', 'assets/img/hq/gate-truck.webp'],
];
[$hEyebrow, $hTitle, $hLead, $hImg] = $heroes[$p];
?>
<?php if ($item): $list = $p === 'projects' ? $projects : $achievements; $slug = (string)$_GET['item']; ?>
<!-- ============ READ MORE page (project / achievement) ============ -->
<section class="dt">
  <div class="wrap">
    <div class="crumb" data-rv><a href="./" data-label="Home">Home</a><span>/</span><a href="<?= url($p) ?>" data-label="<?= e($pages[$p]) ?>"><?= e($pages[$p]) ?></a><span>/</span><span style="color:var(--navy)"><?= e($item[0]) ?></span></div>
    <span class="eyebrow" data-rv><?= e($item[1]) ?></span>
    <h1 class="h-l" data-rv><?= e($item[0]) ?></h1>
    <p class="lead" data-rv style="--d:.15s"><?= e($item[3]) ?></p>
    <div class="dt-img" data-rv style="--d:.2s"><img src="<?= e($item[2]) ?>" alt="<?= e($item[0]) ?>"></div>
    <div class="dt-g">
      <div class="dt-body"><?php foreach ($item[4] as $i => $para): ?><p data-rv style="--d:<?= .08 * $i ?>s"><?= e($para) ?></p><?php endforeach; ?>
        <a class="link" data-rv href="<?= url($p) ?>" data-label="<?= e($pages[$p]) ?>">← All <?= e(strtolower($pages[$p])) ?></a>
      </div>
      <aside class="dt-facts" data-rv style="--d:.15s">
        <h5>At a glance</h5>
        <dl><?php foreach ($item[5] as [$k, $v]): ?><div><dt><?= e($k) ?></dt><dd><?= e($v) ?></dd></div><?php endforeach; ?></dl>
        <a class="btn btn-n" href="<?= url('contact') ?>" data-label="Contact us">Discuss a project <?= $arrow ?></a>
      </aside>
    </div>
  </div>
</section>
<section class="sec alt">
  <div class="wrap">
    <div class="sec-h"><span class="eyebrow" data-rv>More <?= e(strtolower($pages[$p])) ?></span><h2 class="h-m" data-rv style="margin-top:16px">Keep exploring.</h2></div>
    <div class="c3"><?php $n = 0; foreach ($list as $k => $it) { if ($k === $slug || $n >= 3) continue; echo card3($p, $k, $it, $n++); } ?></div>
  </div>
</section>
<?php else: ?>
<section class="phero">
  <span class="ph-ghost" data-speed=".2" aria-hidden="true">30+</span>
  <div class="wrap ph-top">
    <div>
      <div class="crumb" data-rv><a href="./" data-label="Home">Home</a><span>/</span><span style="color:var(--navy)"><?= e($pages[$p]) ?></span></div>
      <span class="eyebrow" data-rv><?= e($hEyebrow) ?></span>
      <h1 class="h-l split" data-split><?= $hTitle ?></h1>
      <p class="lead" data-rv style="--d:.25s"><?= e($hLead) ?></p>
      <div class="pchips" data-rv style="--d:.35s"><?php foreach ($group as $g): ?><span class="chip"><i></i><?= e($g[0]) ?></span><?php endforeach; ?></div>
    </div>
    <?php if ($p === 'about'): ?><div class="ph-30" data-rv="s" style="--d:.3s"><?= anim30() ?></div><?php else: ?><div data-rv="s" style="--d:.3s"><?= seal() ?></div><?php endif; ?>
  </div>
  <div class="ph-band"><div class="pframe" id="phBand"><img src="<?= e($hImg) ?>" alt=""></div></div>
</section>
<?php endif; ?>
<?php
$statements = [
    'about'     => ['Our promise', 'Founded in <b>1995</b> on one promise — steel that is <em>built right,</em> by people who take ownership of every plate, every seam and every flange.', ['assets/img/hq/plant-trichy-wide-sm.webp', 'assets/img/hq/operators-sm.webp', 'assets/img/hq/gate-truck-sm.webp', 'assets/img/hq/team-assembly-sm.webp']],
    'towers'    => ['Plate to tower', 'Every tower begins as <em>flat steel plate.</em> We cut it, roll it, weld it and finish it — until it can carry <b>7 MW</b> into the sky.', ['assets/img/hq/laser-cutting-sm.webp', 'assets/img/hq/raw-section-sm.webp', 'assets/img/hq/seam-welding-sm.webp', 'assets/img/hq/yard-trucks-sm.webp']],
    'verticals' => ['One fabrication DNA', 'The same hands that build <b>multi-MW wind towers</b> deliver boilers, bridges and <em>heavy structures</em> — to the very same standard.', ['assets/img/hq/blue-plasma-sm.webp', 'assets/img/hq/raw-section-sm.webp', 'assets/img/hq/seam-welding-sm.webp', 'assets/img/hq/engineer-pointing-sm.webp']],
    'quality'   => ['Quality, built in', 'Five certifications. Qualified welders. <b>Full traceability</b> from plate to flange — because quality is never inspected in, <em>it is built in.</em>', ['assets/img/hq/operators-sm.webp', 'assets/img/hq/laser-cutting-sm.webp', 'assets/img/hq/paint-booth-sm.webp', 'assets/img/hq/painted-section-sm.webp']],
    'global'    => ['Standing worldwide', 'Built in India, standing on <b>four continents</b> — TOOLFAB steel carries <em>clean energy</em> to wind farms across the world.', ['assets/img/hq/dispatch-trucks-sm.webp', 'assets/img/hq/yard-aerial-sm.webp', 'assets/img/hq/yard-trucks-sm.webp', 'assets/img/hq/plant-aerial-end-sm.webp']],
];
if (isset($statements[$p]) && !$item) echo statement(...$statements[$p]);
?>

<?php if ($p === 'about'): ?>
<section class="sec" id="story">
  <div class="wrap two">
    <div>
      <span class="eyebrow" data-rv>About Toolfab – Since 1995</span>
      <h2 class="h-l split" data-split style="margin:18px 0 24px">Three decades of engineering. <span class="serif">A future powered by innovation.</span></h2>
      <p class="lead" data-rv>Established in <b>1995</b>, the TOOLFAB Group has evolved into a manufacturing partner for wind energy developers, turbine manufacturers, and infrastructure companies.</p>
      <p class="lead" data-rv style="margin-top:16px">Our expertise spans <b>wind tower manufacturing, heavy structural fabrication, engineering, quality assurance, and project execution.</b></p>
      <p class="lead" data-rv style="margin-top:16px">Driven by technical expertise, skilled professionals, and continuous improvement, we are committed to delivering reliable engineering solutions that support our customers' projects and contribute to a sustainable future.</p>
    </div>
    <div class="pframe" data-px-img><img src="assets/img/hq/shop-floor.webp" alt="TOOLFAB fabrication shop" loading="lazy"></div>
  </div>
</section>

<section class="sec alt" id="vision">
  <div class="wrap">
    <div class="sec-h"><span class="eyebrow" data-rv>Vision &amp; Mission</span><h2 class="h-l split" data-split>What we <span class="serif">stand for.</span></h2></div>
    <div class="vm">
      <div class="vmc" data-rv>
        <span class="ic"><?= icon('globe') ?></span>
        <h3>Our Vision</h3>
        <p>To be a globally respected engineering and manufacturing partner, contributing to the growth of renewable energy and sustainable infrastructure.</p>
        <span class="gh">Vision</span>
      </div>
      <div class="vmc m" data-rv style="--d:.12s">
        <span class="ic"><?= icon('gear') ?></span>
        <h3>Our Mission</h3>
        <p>To deliver reliable, high-quality engineering and fabrication solutions through technological advancement, operational excellence, and customer-focused execution.</p>
        <span class="gh">Mission</span>
      </div>
    </div>
  </div>
</section>

<section class="sec">
  <div class="wrap msg">
    <div class="pframe" data-px-img><img src="assets/img/hq/plant-flags.webp" alt="TOOLFAB plant with national and company flags" loading="lazy"></div>
    <div>
      <span class="eyebrow" data-rv>Directors’ message</span>
      <blockquote data-scrub style="margin-top:24px">When we started in 1995, we promised our customers one thing — steel that is built right. Three decades and more than two thousand towers later, that promise still guides every plate we cut and every seam we weld. As turbines grow taller and the world moves to clean energy, TOOLFAB will keep investing in technology, people and capacity to remain India’s most trusted wind-tower partner — and a global supplier the world can rely on.</blockquote>
      <div class="sign" data-rv style="--d:.2s"><i></i><div><b><?= e($directors[0][0]) ?></b><span><?= e($directors[0][1]) ?>, on behalf of the Board</span></div></div>
    </div>
  </div>
</section>

<section class="sec alt" id="leadership">
  <div class="wrap">
    <div class="sec-h"><span class="eyebrow" data-rv>Leadership</span><h2 class="h-l split" data-split>The team <span class="serif">behind TOOLFAB.</span></h2></div>
    <div class="dirs">
      <?php foreach ($directors as $i => [$n, $r, $em, $ph]): ?>
      <div class="dir" data-rv style="--d:<?= .1 * $i ?>s">
        <div class="av"><?= e(substr(preg_replace('/^[A-Z]\.\s*/', '', $n), 0, 1)) ?></div>
        <h3><?= e($n) ?></h3><small><?= e($r) ?></small>
        <?php if ($em): ?><a href="mailto:<?= e($em) ?>"><?= icon('mail') ?><?= e($em) ?></a><?php endif; ?>
        <?php if ($ph): ?><a href="tel:<?= e(preg_replace('/\s+/', '', $ph)) ?>"><?= icon('phone') ?><?= e($ph) ?></a><?php endif; ?>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="sec" id="journey">
  <div class="wrap">
    <div class="sec-h"><span class="eyebrow" data-rv>Our journey</span><h2 class="h-l split" data-split>Milestones, <span class="serif">left to right.</span></h2></div>
    <div class="tl" data-hscroll>
      <?php foreach ($milestones as $i => [$y, $t, $d]): ?>
      <div class="ms" data-rv style="--d:<?= .08 * $i ?>s"><small class="eyebrow" style="font-size:.64rem">0<?= $i + 1 ?></small><b><?= e($y) ?></b><h4><?= e($t) ?></h4><p><?= e($d) ?></p></div>
      <?php endforeach; ?>
    </div>
    <div class="vals3" data-rv style="margin-top:clamp(50px,9vh,90px)">
      <div><b>People</b><p>Skilled fabricators, welders and engineers who take ownership of every section that leaves our shop.</p></div>
      <div><b>Precision</b><p>Tight tolerances, qualified welding procedures and full traceability from plate to flange.</p></div>
      <div><b>Progress</b><p>Investing in prototypes, new tower concepts and capacity for the next generation of turbines.</p></div>
    </div>
  </div>
</section>

<?php elseif ($p === 'towers'): ?>
<section class="sec">
  <div class="wrap">
    <div class="sec-h"><span class="eyebrow" data-rv>Tower technologies</span><h2 class="h-l split" data-split>Lattice, tubular <span class="serif">&amp; modular.</span></h2><p class="lead" data-rv>Our manufacturing capabilities encompass lattice, tubular, and modular tower technologies.</p></div>
    <?php $ti = 0; foreach ($towers as $k => [$name, $mw, $desc, $pts]): ?>
    <div class="tech <?= $ti++ % 2 ? 'rev' : '' ?>" id="<?= $k ?>">
      <div class="tech-art drawwatch" data-rv="s">
        <div class="mwbig"><span data-count="<?= $mw ?>" data-dec="1">0</span> MW<small><?= e(strtoupper($name)) ?></small></div>
        <?= towerSvg($k) ?>
      </div>
      <div>
        <span class="eyebrow" data-rv>Technology 0<?= $ti ?> / 03</span>
        <h2 class="h-l split" data-split><?= e($name) ?><?= $k === 'modular' ? ' <span class="hl-y">up to 7 MW</span>' : '' ?></h2>
        <p class="lead" data-rv style="--d:.15s"><?= e($desc) ?></p>
        <div class="specs" data-rv style="--d:.25s"><?php foreach ($pts as $pt): ?><div><?= e($pt) ?></div><?php endforeach; ?></div>
        <a class="btn btn-n" data-rv style="--d:.3s" href="<?= url('contact') ?>" data-label="Contact">Enquire about <?= e(strtolower($name)) ?> <?= $arrow ?></a>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</section>
<section class="sec alt">
  <div class="wrap">
    <div class="sec-h"><span class="eyebrow" data-rv>Tower platforms delivered</span><h2 class="h-l split" data-split>From 1.0 MW to <span class="serif">7.0 MW.</span></h2><p class="lead" data-rv>2000+ towers across nine platforms, plus complete tower internals — platforms, ladders, cable supports and pre-assembled kits.</p></div>
    <div class="plat" data-rv><?php foreach ($platforms as $pl): ?><span><?= e($pl) ?> MW</span><?php endforeach; ?></div>
    <div class="sec-h" style="margin-top:clamp(70px,11vh,120px)"><span class="eyebrow" data-rv>How a tower is made</span><h2 class="h-m" data-rv style="margin-top:16px">Plate to flange to wind farm — all in-house.</h2></div>
    <div class="proc" data-hscroll>
      <?php foreach ($process as $i => [$t, $d, $img]): ?>
      <div class="pstep" data-rv style="--d:<?= .07 * $i ?>s"><div class="pi"><img src="<?= e($img) ?>" alt="<?= e($t) ?>" loading="lazy"></div><div class="pt"><small>STEP 0<?= $i + 1 ?></small><h4><?= e($t) ?></h4><p><?= e($d) ?></p></div></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php elseif ($p === 'verticals'): ?>
<section class="sec">
  <div class="wrap">
    <div class="sec-h"><span class="eyebrow" data-rv>Our capabilities</span><h2 class="h-l split" data-split>Comprehensive steel <span class="serif">engineering solutions.</span></h2><p class="lead" data-rv>From engineering and fabrication to inspection and finishing, we focus on precision, quality, and project-specific requirements.</p></div>
    <div class="vgrid">
      <?php foreach ($verticals as $i => [$t, $d, $img]): ?>
      <div class="vcard" id="v<?= $i ?>" data-rv style="--d:<?= .07 * ($i % 3) ?>s"><div class="pframe" data-px-img><img src="<?= e($img) ?>" alt="<?= e($t) ?>" loading="lazy"></div><div class="vb"><small>SERVICE 0<?= $i + 1 ?></small><h3><?= e($t) ?></h3><p><?= e($d) ?></p></div></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<section class="sec alt">
  <div class="wrap two">
    <div class="pframe" data-px-img><img src="assets/img/hq/plate-rolling.webp" alt="Heavy plate rolling at TOOLFAB" loading="lazy"></div>
    <div>
      <span class="eyebrow" data-rv>Capabilities</span>
      <h2 class="h-l split" data-split style="margin:18px 0 10px">Heavy plate. <span class="serif">Heavy responsibility.</span></h2>
      <div class="specs" data-rv><div>CNC plasma &amp; oxy-fuel cutting</div><div>Heavy plate rolling</div><div>SAW / MIG / TIG welding</div><div>Trial assembly at works</div><div>Blasting &amp; painting</div><div>NDT &amp; dimensional inspection</div></div>
      <a class="btn btn-n" data-rv href="<?= url('contact') ?>" data-label="Contact">Discuss your project <?= $arrow ?></a>
    </div>
  </div>
</section>

<?php elseif ($p === 'quality'): ?>
<section class="sec">
  <div class="wrap">
    <div class="sec-h"><span class="eyebrow" data-rv>Our certifications</span><h2 class="h-l split" data-split>Internationally certified. <span class="serif">Independently audited.</span></h2><p class="lead" data-rv>Our quality systems support consistent manufacturing practices, welding control, inspection, traceability, and compliance with applicable customer and project requirements.</p></div>
    <div class="ctabs">
      <div class="ctl" role="tablist">
        <?php foreach ($certs as $i => [$code, $name]): ?>
        <button role="tab" id="c<?= $i ?>" class="<?= $i ? '' : 'on' ?>" data-tab="<?= $i ?>" data-rv style="--d:<?= .06 * $i ?>s"><i class="badge"><img src="<?= e($certs[$i][4]) ?>" alt="<?= e($code) ?> logo"></i><div><b><?= e($code) ?></b><span><?= e($name) ?></span></div></button>
        <?php endforeach; ?>
      </div>
      <div class="cpanel" data-rv style="--d:.15s">
        <?php foreach ($certs as $i => [$code, $name, $txt, $pts, $badge]): ?>
        <div class="cp <?= $i ? '' : 'on' ?>" data-pane="<?= $i ?>" role="tabpanel">
          <div class="bigros badge"><div><img src="<?= e($badge) ?>" alt="<?= e($code) ?> logo"><small>CERTIFIED</small></div></div>
          <div><span class="eyebrow"><?= e($name) ?></span><h3><?= e($code) ?></h3><p><?= e($txt) ?></p><ul><?php foreach ($pts as $pt): ?><li><?= e($pt) ?></li><?php endforeach; ?></ul></div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
    <p class="lead commit" data-rv>Our commitment extends beyond certification to continuous improvement in manufacturing performance, workplace safety, and environmental responsibility.</p>
  </div>
</section>
<section class="sec alt">
  <div class="wrap two">
    <div>
      <span class="eyebrow" data-rv>Quality at every step</span>
      <h2 class="h-l split" data-split style="margin:18px 0 24px">Traceable from <span class="serif">plate to flange.</span></h2>
      <p class="lead lead-x" data-scrub>Every tower section carries its history — plate heat numbers, welder IDs, WPS references, NDT reports and dimensional records — compiled into a complete quality dossier for our customers.</p>
      <div class="specs" data-rv style="--d:.2s"><div>Incoming material inspection</div><div>Qualified WPS / PQR</div><div>UT / MT / RT testing</div><div>Flatness &amp; flange checks</div><div>DFT coating inspection</div><div>Final quality dossier</div></div>
    </div>
    <div class="pframe" data-px-img><img src="assets/img/hq/control-panel.webp" alt="TOOLFAB engineer at a control panel" loading="lazy"></div>
  </div>
</section>
<section class="sec" id="sustainability">
  <div class="wrap">
    <div class="sec-h"><span class="eyebrow" data-rv>Sustainability commitment</span><h2 class="h-l split" data-split>Engineering a better future. <span class="serif">Sustainably.</span></h2></div>
    <div class="sus">
      <?php foreach ([
        ['plant', 'Eco-friendly Manufacturing Processes', 'Committed to environmentally responsible and sustainable production.'],
        ['bolt', 'Continuous Innovation', 'Investing in innovation to support the clean energy transition.'],
        ['globe', 'Aligned with Global Sustainability Goals', 'Our practices support and contribute to global sustainability and climate action.'],
        ['tower', 'Supporting India’s Renewable Energy Mission', 'Proudly contributing to India’s vision for a sustainable energy future.'],
        ['trace', 'Resource Efficiency', 'Optimizing resources to maximize efficiency and minimize environmental impact.'],
        ['gear', 'Sustainability in Every Project', 'Sustainability is embedded in our planning, execution and delivery.'],
        ['years', 'Waste Reduction', 'Integrated waste management and recycling across all operations.'],
        ['shield', 'Certified Commitment', 'Our certifications reflect our dedication to safety, health and environment.'],
        ['users', 'Responsible Engineering', 'Safe, ethical and sustainable engineering practices in every project.'],
        ['award', 'A Greener Future', 'We drive progress today for a cleaner, greener and sustainable tomorrow.'],
      ] as $i => [$ic, $t, $d]): ?>
      <div class="sus-i" data-rv style="--d:<?= .05 * ($i % 2) ?>s"><i><?= icon($ic) ?></i><div><h4><?= e($t) ?></h4><p><?= e($d) ?></p></div></div>
      <?php endforeach; ?>
    </div>
    <div class="sdg" data-rv>
      <div class="sdg-h"><b>Supporting the Sustainable Development Goals</b><span>(SDGs)</span></div>
      <div class="sdg-g">
        <?php foreach ([[7, 'Affordable and clean energy', '#fcc30b'], [8, 'Decent work and economic growth', '#a21942'], [9, 'Industry, innovation and infrastructure', '#fd6925'], [11, 'Sustainable cities and communities', '#fd9d24'], [12, 'Responsible consumption and production', '#bf8b2e'], [13, 'Climate action', '#3f7e44'], [15, 'Life on land', '#56c02b'], [17, 'Partnerships for the goals', '#19486a']] as [$n, $t, $col]): ?>
        <span style="--c:<?= $col ?>"><b><?= $n ?></b><?= e($t) ?></span>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="sus-f" data-rv><span>Responsible Today</span><i></i><span>Sustainable Tomorrow</span><i></i><span>Stronger Future</span></div>
  </div>
</section>

<?php elseif ($p === 'global'): ?>
<section class="sec">
  <div class="wrap">
    <div class="sec-h"><span class="eyebrow" data-rv>Global supplier</span><h2 class="h-l split" data-split>Built in India. <span class="serif">Standing worldwide.</span></h2><p class="lead" data-rv>From three manufacturing plants in India, TOOLFAB supplies wind towers and engineered steel to customers across North America, Europe, the Middle East and Asia.</p></div>
    <div class="map" id="worldMap" data-dest='<?= e(json_encode($destinations)) ?>'></div>
    <div class="regions" style="grid-template-columns:repeat(4,1fr)" data-rv>
      <div><b>North America</b><span>Wind &amp; infrastructure</span></div>
      <div><b>Europe</b><span>EN 1090 certified supply</span></div>
      <div><b>Middle East</b><span>Energy &amp; EPC projects</span></div>
      <div><b>Asia</b><span>South &amp; South-East Asia</span></div>
    </div>
  </div>
</section>
<section class="sec alt">
  <div class="wrap cap">
    <div>
      <span class="eyebrow" data-rv>Clients &amp; power capacity</span>
      <h2 class="h-m" data-rv style="margin:18px 0 30px;max-width:22ch">Tower platforms delivered for leading wind OEMs &amp; developers.</h2>
      <div class="cap-meter" id="capMeter"><div class="cap-num"><span id="capNum">1.0</span><small>MW</small></div><div class="cap-turb drawn" id="capTurb"><?= towerSvg('tubular') ?></div></div>
      <div class="cap-scale" id="capScale"><?php foreach ($platforms as $pl): ?><span><?= e($pl) ?> MW</span><?php endforeach; ?></div>
    </div>
    <?= clientGroupsHtml($clientGroups) ?>
  </div>
</section>

<?php elseif ($p === 'clients'): ?>
<section class="sec">
  <div class="wrap">
    <div class="sec-h">
      <span class="eyebrow" data-rv>Our clients</span>
      <h2 class="h-l type-h" data-type>Trusted by the names that power <span class="serif">wind &amp; infrastructure.</span></h2>
      <p class="lead" data-rv style="--d:.2s">Leading wind turbine OEMs and independent power producers rely on TOOLFAB towers and steel.</p>
    </div>
    <?php foreach ($clientGroups as $gName => $list): ?>
    <div class="cgroup">
      <div class="cg-tag" data-rv><span><?= e(strtoupper($gName)) ?></span></div>
      <div class="logos clr<?= count($list) > 8 ? ' five' : '' ?>">
        <?php foreach ($list as $i => [$cn, $cf]): ?>
        <div class="logo" data-rv style="--d:<?= .06 * ($i % 5) ?>s"><img src="assets/img/clients/<?= e($cf) ?>.webp" alt="<?= e($cn) ?>" title="<?= e($cn) ?>" loading="lazy"></div>
        <?php endforeach; ?>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<?php elseif ($p === 'projects' && !$item): ?>
<section class="sec">
  <div class="wrap">
    <div class="sec-h"><span class="eyebrow" data-rv>Featured projects</span><h2 class="h-l split" data-split>Built in our plants. <span class="serif">Standing in the field.</span></h2></div>
    <div class="c3"><?php $n = 0; foreach ($projects as $k => $it) echo card3('projects', $k, $it, $n++); ?></div>
  </div>
</section>

<?php elseif ($p === 'achievements' && !$item): ?>
<section class="sec">
  <div class="wrap">
    <div class="sec-h"><span class="eyebrow" data-rv>Milestones of excellence</span><h2 class="h-l split" data-split>Earned on the <span class="serif">shop floor.</span></h2></div>
    <div class="c3"><?php $n = 0; foreach ($achievements as $k => $it) echo card3('achievements', $k, $it, $n++); ?></div>
  </div>
</section>

<?php elseif ($p === 'careers'): ?>
<section class="sec">
  <div class="wrap two">
    <div>
      <span class="eyebrow" data-rv>Build your career with TOOLFAB</span>
      <h2 class="h-l split" data-split style="margin:18px 0 24px">Our people are the foundation of <span class="serif">engineering excellence.</span></h2>
      <p class="lead" data-rv>We offer opportunities for professionals and aspiring engineers to contribute to challenging manufacturing projects, develop technical expertise, and grow within a dynamic engineering environment.</p>
      <p class="lead" data-rv style="margin-top:16px"><b>Join us in building the structures that support tomorrow's energy and infrastructure.</b></p>
      <div class="hr-cta" data-rv>
        <a class="btn btn-n" href="mailto:<?= e($site['hr']) ?>?subject=<?= rawurlencode('Career application') ?>" data-label="Email your resume">Email your resume <?= $arrow ?></a>
        <a class="hr-mail" href="mailto:<?= e($site['hr']) ?>"><i><?= icon('mail') ?></i><span><small>HR Department</small><?= e($site['hr']) ?></span></a>
      </div>
    </div>
    <div class="pframe" data-px-img><img src="assets/img/hq/team-assembly.webp" alt="TOOLFAB team on the shop floor" loading="lazy"></div>
  </div>
</section>
<section class="sec alt">
  <div class="wrap">
    <div class="sec-h"><span class="eyebrow" data-rv>Current openings</span><h2 class="h-l split" data-split>Find your place <span class="serif">on the floor.</span></h2></div>
    <div class="jobs">
      <?php foreach ($jobs as $i => [$t, $dept, $loc, $type, $exp, $d]): ?>
      <article class="job" data-rv style="--d:<?= .05 * $i ?>s">
        <div class="job-m">
          <h3><?= e($t) ?></h3>
          <div class="job-t"><span><?= icon('brief') ?><?= e($dept) ?></span><span><?= icon('pin') ?><?= e($loc) ?></span><span><?= icon('years') ?><?= e($type) ?></span><span><?= icon('award') ?><?= e($exp) ?></span></div>
          <p><?= e($d) ?></p>
        </div>
        <button class="btn btn-l job-apply" type="button" data-job="<?= e($t) ?>">Apply now <?= $arrow ?></button>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<section class="sec" id="apply">
  <div class="wrap ct">
    <div>
      <span class="eyebrow" data-rv>Apply</span>
      <h2 class="h-l split" data-split style="margin:18px 0 22px">Send us your <span class="serif">application.</span></h2>
      <p class="lead" data-rv>Choose a position, tell us a little about yourself and attach your resume. Don’t see the right role? Apply anyway — we keep every application on file.</p>
      <a class="plant" data-rv style="margin-top:26px" href="mailto:<?= e($site['hr']) ?>"><i><?= icon('mail') ?></i><div><b><?= e($site['hr']) ?></b><span>Human resources</span></div></a>
    </div>
    <form class="enq" id="jobForm" novalidate data-rv style="--d:.2s">
      <div class="alert success" id="jobOk" hidden></div>
      <div class="alert error" id="jobErr" hidden></div>
      <div class="row2">
        <div class="fld"><input id="j-name" name="fullname" placeholder=" " required><label for="j-name">Full name</label></div>
        <div class="fld"><input id="j-email" name="email" type="email" placeholder=" " required><label for="j-email">Email address</label></div>
      </div>
      <div class="row2">
        <div class="fld"><input id="j-phone" name="phone" placeholder=" "><label for="j-phone">Phone</label></div>
        <div class="fld"><input id="j-exp" name="experience" placeholder=" "><label for="j-exp">Experience (years)</label></div>
      </div>
      <div class="row2">
        <div class="fld sel"><select id="jPos" name="position" required><option value="">Select a position</option><?php foreach ($jobs as $j): ?><option><?= e($j[0]) ?></option><?php endforeach; ?><option>Other / general application</option></select><label for="jPos">Position</label></div>
        <div class="fld sel"><select id="j-plant" name="plant"><option>Any plant</option><?php foreach ($companies as $c): ?><option><?= e($c['district']) ?>, <?= e($c['state']) ?></option><?php endforeach; ?></select><label for="j-plant">Preferred plant</label></div>
      </div>
      <label class="drop" id="cvDrop">
        <input type="file" id="cvFile" name="resume" accept=".pdf,.doc,.docx">
        <i><?= icon('upload') ?></i>
        <span><b>Upload your resume</b><small>Drag &amp; drop or click to browse · PDF or Word, max 5 MB</small><em id="cvName"></em></span>
      </label>
      <div class="fld"><textarea id="j-msg" name="message" placeholder=" "></textarea><label for="j-msg">Cover note (optional)</label></div>
      <button class="btn btn-n" type="submit">Submit application <?= $arrow ?></button>
    </form>
  </div>
</section>

<?php elseif ($p === 'contact'): ?>
<section class="sec" id="enquiry">
  <div class="wrap ct">
    <div>
      <span class="eyebrow" data-rv>TOOLFAB TOWERS</span>
      <h2 class="h-l split" data-split style="margin:18px 0 22px">Engineering today. <span class="serif">Sustaining tomorrow.</span></h2>
      <p class="lead" data-rv>Whether you are planning a wind energy project, seeking a manufacturing partner, or exploring engineered steel fabrication solutions, our team is ready to discuss your requirements.</p>
      <div class="plants" data-rv style="--d:.15s">
        <?php foreach ($group as $i => [$n, $loc, $tag, , $web, , $q, $gm]): ?>
        <a class="plant" href="<?= e(maps($q)) ?>" target="_blank" rel="noopener"><i><?= icon('pin') ?></i><div><b><?= e($n) ?></b><span><?= e($loc) ?> · <?= e($gm) ?></span></div><em><?= e(strtoupper($tag)) ?> ↗</em></a>
        <?php endforeach; ?>
        <a class="plant" href="mailto:<?= e($site['email']) ?>"><i><?= icon('mail') ?></i><div><b><?= e($site['email']) ?></b><span>General enquiries</span></div></a>
        <a class="plant" href="tel:<?= e(preg_replace('/\s+/', '', $site['phone'])) ?>"><i><?= icon('phone') ?></i><div><b><?= e($site['phone']) ?></b><span>Call or WhatsApp</span></div></a>
      </div>
    </div>
    <form class="enq" method="post" action="?p=contact#enquiry" novalidate data-rv style="--d:.2s">
      <?php if ($formStatus): ?><div class="alert <?= e($formStatus[0]) ?>"><?= e($formStatus[1]) ?></div><?php endif; ?>
      <div class="row2">
        <div class="fld"><input id="f-name" name="name" placeholder=" " value="<?= e($old['name']) ?>" required><label for="f-name">Full name</label></div>
        <div class="fld"><input id="f-company" name="company" placeholder=" " value="<?= e($old['company']) ?>"><label for="f-company">Company</label></div>
      </div>
      <div class="row2">
        <div class="fld"><input id="f-email" name="email" type="email" placeholder=" " value="<?= e($old['email']) ?>" required><label for="f-email">Email address</label></div>
        <div class="fld"><input id="f-phone" name="phone" placeholder=" " value="<?= e($old['phone']) ?>"><label for="f-phone">Phone</label></div>
      </div>
      <div class="fld"><textarea id="f-msg" name="message" placeholder=" " required><?= e($old['message']) ?></textarea><label for="f-msg">Project requirement (tower type, MW, quantity, location)</label></div>
      <button class="btn btn-n" type="submit">Send Enquiry <?= $arrow ?></button>
    </form>
  </div>
</section>
<section class="sec alt">
  <div class="wrap">
    <div class="sec-h"><span class="eyebrow" data-rv>Leadership contacts</span><h2 class="h-m" data-rv style="margin-top:16px">Speak directly with our directors.</h2></div>
    <div class="dirs">
      <?php foreach ($directors as $i => [$n, $r, $em, $ph]): ?>
      <div class="dir" data-rv style="--d:<?= .1 * $i ?>s"><div class="av"><?= e(substr(preg_replace('/^[A-Z]\.\s*/', '', $n), 0, 1)) ?></div><h3><?= e($n) ?></h3><small><?= e($r) ?></small><?php if ($em): ?><a href="mailto:<?= e($em) ?>"><?= icon('mail') ?><?= e($em) ?></a><?php endif; ?><?php if ($ph): ?><a href="tel:<?= e(preg_replace('/\s+/', '', $ph)) ?>"><?= icon('phone') ?><?= e($ph) ?></a><?php endif; ?></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>
<?php endif; /* sub pages */ ?>

<!-- ============ GROUP COMPANIES (home, about, contact only) ============ -->
<?php if (in_array($p, ['home', 'about', 'contact'], true)): ?>
<section class="group">
  <div class="wrap">
    <div class="group-h">
      <div><span class="eyebrow" data-rv>Our branches</span><h2 class="h-l split" data-split>Three companies. Three plants. <span class="serif">One standard.</span></h2><p class="group-say" data-scrub>From <b>Tiruchirappalli</b>, <b>Ballari</b> and <b>Kachchh</b> — three plants placed close to India’s wind belts, working to <em>one shared standard</em> of quality.</p></div>
      <div data-rv="s" style="width:clamp(120px,10vw,150px);flex:none"><?= seal() ?></div>
    </div>
    <div class="gcards">
      <?php foreach ($group as $i => [$n, $loc, $tag, $spec, $web, $img, $q]): ?>
      <?php $slug = array_keys($companies)[$i]; ?>
      <article class="gc<?= $slug === $p ? ' here' : '' ?>" data-rv style="--d:<?= .1 * $i ?>s">
        <div class="pframe" data-px-img><img src="<?= e($img) ?>" alt="<?= e($n) ?>" loading="lazy"><span class="tagp"><?= e($slug === $p ? 'You are here' : $tag) ?></span></div>
        <div class="gb">
          <h3><?= e($n) ?></h3>
          <p><?= e($spec) ?></p>
          <div class="gm">
            <a href="<?= e(maps($q)) ?>" target="_blank" rel="noopener"><?= icon('pin') ?><?= e($loc) ?></a>
            <a href="https://<?= e($web) ?>" target="_blank" rel="noopener"><?= icon('web') ?><?= e($web) ?></a>
          </div>
          <a class="link gc-go" href="<?= url($slug) ?>" data-label="<?= e($companies[$slug]['short']) ?>">Company profile <?= $arrow ?></a>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>
</main>

<!-- ============ FOOTER ============ -->
<footer class="foot">
  <div class="marq" aria-hidden="true"><?php for ($k = 0; $k < 2; $k++): ?><div><span>TOOLFAB TOWERS</span><i></i><span class="s">30+ years of excellence</span><i></i><span>In wind towers</span><i></i><span class="s">since 1995</span><i></i></div><?php endfor; ?></div>
  <div class="wrap">
    <div class="foot-g">
      <div class="fb">
        <div class="logo-w"><img class="em" src="assets/logo/emblem.svg" alt="TOOLFAB emblem"><img class="wm" src="assets/logo/toolfab-towers-wordmark.svg" alt="TOOLFAB TOWERS"></div>
        <p>Heavy-engineering and renewable-energy infrastructure group — global supplier of lattice, tubular and 7 MW modular wind towers since 1995.</p>
        <div class="soc"><?php foreach ($social as $n => $u): ?><a href="<?= e($u) ?>" aria-label="TOOLFAB on <?= e($n) ?>" title="<?= e($n) ?>"<?= $u !== '#' ? ' target="_blank" rel="noopener"' : '' ?>><?= socialIcon($n) ?></a><?php endforeach; ?></div>
      </div>
      <div><h5>Explore</h5><ul><?php foreach ($pages as $k => $l): ?><li><a href="<?= url($k) ?>" data-label="<?= e($l) ?>"><?= e($l) ?></a></li><?php endforeach; ?></ul></div>
      <div><h5>Towers</h5><ul><?php foreach ($towers as $k => $t): ?><li><a href="<?= url('towers') ?>#<?= $k ?>" data-label="Tower Technology"><?= e($t[0]) ?> · <?= e(number_format($t[1], 1)) ?> MW</a></li><?php endforeach; ?><li><a href="<?= url('verticals') ?>" data-label="Engineering &amp; Fabrication">Boilers &amp; structures</a></li></ul><div style="margin-top:26px"><?= seal() ?></div></div>
      <div><h5>Group companies</h5><ul><?php foreach ($group as $gi => $g): ?><li><a href="<?= url(array_keys($companies)[$gi]) ?>" data-label="<?= e($g[0]) ?>"><span style="color:#fff;font-weight:500"><?= e($g[0]) ?></span><br><span style="font-size:.8rem;color:#9596c0"><?= e($g[1]) ?></span></a></li><?php endforeach; ?><li><a href="mailto:<?= e($site['email']) ?>"><?= e($site['email']) ?></a></li><li><a href="tel:<?= e(preg_replace('/\s+/', '', $site['phone'])) ?>"><?= e($site['phone']) ?></a></li></ul></div>
    </div>
    <div class="foot-b"><span>© <?= date('Y') ?> Toolfab Engineering Industries Pvt. Ltd. All rights reserved.</span><span><?= e($site['tagline']) ?></span></div>
  </div>
</footer>
<a class="wa" href="https://wa.me/<?= e($site['wa']) ?>?text=<?= rawurlencode('Hello TOOLFAB, I would like to enquire about…') ?>" target="_blank" rel="noopener" aria-label="WhatsApp TOOLFAB"><svg viewBox="0 0 24 24" fill="#fff"><path d="M12 2a10 10 0 00-8.6 15.1L2 22l5-1.3A10 10 0 1012 2zm0 18.2a8.2 8.2 0 01-4.2-1.2l-.3-.2-3 .8.8-2.9-.2-.3A8.2 8.2 0 1112 20.2zm4.5-6.1c-.2-.1-1.5-.7-1.7-.8s-.4-.1-.6.1-.7.8-.8 1-.3.2-.5.1a6.7 6.7 0 01-3.3-2.9c-.2-.4.2-.4.7-1.3.1-.2 0-.3 0-.4l-.8-1.8c-.2-.5-.4-.4-.6-.4h-.5a1 1 0 00-.7.3 3 3 0 00-.9 2.2 5.2 5.2 0 001.1 2.8 11.9 11.9 0 004.6 4c1.7.7 2.4.8 3.2.7a2.8 2.8 0 001.8-1.3 2.3 2.3 0 00.2-1.3c-.1-.1-.3-.2-.5-.3z"/></svg></a>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lenis@1.1.13/dist/lenis.min.js"></script>
<?php if ($p === 'home' || $p === 'global'): ?><script src="https://cdn.jsdelivr.net/npm/topojson-client@3.1.0/dist/topojson-client.min.js"></script><?php endif; ?>
<script>
(() => {
  'use strict';
  const $ = (s, r = document) => r.querySelector(s), $$ = (s, r = document) => [...r.querySelectorAll(s)];
  const REDUCE = matchMedia('(prefers-reduced-motion: reduce)').matches;
  const HAS_GSAP = !!(window.gsap && window.ScrollTrigger);
  const store = { get: k => { try { return sessionStorage.getItem(k); } catch (e) { return null; } }, set: (k, v) => { try { sessionStorage.setItem(k, v); } catch (e) {} } };
  if (HAS_GSAP) gsap.registerPlugin(ScrollTrigger);
  if ('scrollRestoration' in history && !location.hash) { history.scrollRestoration = 'manual'; scrollTo(0, 0); }
  const hdr = $('#hdr');
  const DESKTOP_H = '(min-width: 1024px) and (min-height: 540px)';

  /* ---------------- smooth scroll ---------------- */
  let lenis = null;
  if (window.Lenis && !REDUCE) {
    lenis = new Lenis({ lerp: 0.08 });
    if (HAS_GSAP) { lenis.on('scroll', ScrollTrigger.update); gsap.ticker.add(t => lenis.raf(t * 1000)); gsap.ticker.lagSmoothing(0); }
    else { const raf = t => { lenis.raf(t); requestAnimationFrame(raf); }; requestAnimationFrame(raf); }
  }

  /* ---------------- split headings into words ---------------- */
  $$('[data-split]').forEach(el => {
    let i = 0;
    const walk = node => [...node.childNodes].forEach(n => {
      if (n.nodeType === 3) {
        const frag = document.createDocumentFragment();
        n.textContent.split(/(\s+)/).forEach(part => {
          if (!part) return;
          if (/^\s+$/.test(part)) { frag.appendChild(document.createTextNode(' ')); return; }
          const w = document.createElement('span'); w.className = 'w';
          const s = document.createElement('span'); s.textContent = part; s.style.setProperty('--i', i++);
          w.appendChild(s); frag.appendChild(w);
        });
        n.replaceWith(frag);
      } else if (n.nodeType === 1) walk(n);
    });
    walk(el); el.classList.add('split');
  });

  /* ---------------- reveal on view ---------------- */
  const counted = new WeakSet();
  const countUp = el => {
    if (counted.has(el)) return; counted.add(el);
    const to = parseFloat(el.dataset.count), dec = +(el.dataset.dec || 0), t0 = performance.now(), dur = 2000;
    const fmt = v => dec ? v.toFixed(dec) : Math.round(v).toLocaleString('en-IN');
    if (REDUCE) { el.textContent = fmt(to); return; }
    const step = now => { const p = Math.min(1, (now - t0) / dur); el.textContent = fmt(to * (1 - Math.pow(1 - p, 4))); if (p < 1) requestAnimationFrame(step); };
    requestAnimationFrame(step);
  };
  const io = new IntersectionObserver(entries => entries.forEach(en => {
    if (!en.isIntersecting) return;
    const el = en.target;
    el.classList.add('in');
    if (el.matches('[data-count]')) countUp(el);
    if (el.classList.contains('drawwatch')) el.classList.add('drawn');
    if (el.id === 'worldMap') el.classList.add('go');
    io.unobserve(el);
  }), { threshold: 0.15, rootMargin: '0px 0px -5% 0px' });

  /* ---------------- loader / shutter ---------------- */
  const loader = $('#loader'), shutter = $('#shutter'), shLabel = $('#shLabel');
  const fromNav = store.get('tf_nav'), firstVisit = !store.get('tf_seen2');
  let ready = false;
  const begin = () => { if (ready) return; ready = true; $$('[data-rv],[data-split],[data-count],.drawwatch,#worldMap').forEach(el => io.observe(el)); startVideo(); };

  if (fromNav && !REDUCE) {
    store.set('tf_nav', '');
    shLabel.textContent = fromNav;
    shutter.classList.add('cover');
    setTimeout(() => { shutter.classList.remove('cover'); shutter.classList.add('out'); begin(); setTimeout(() => shutter.classList.remove('out'), 1200); }, 260);
  } else if (firstVisit && !REDUCE) {
    store.set('tf_seen2', '1');
    loader.classList.add('run');
    document.documentElement.style.overflow = 'hidden';
    const num = $('#ldNum'), t0 = performance.now(), D = 2300;
    const tick = now => {
      const p = Math.min(1, (now - t0) / D);
      num.textContent = String(Math.round(100 * (1 - Math.pow(1 - p, 2.2)))).padStart(2, '0');
      if (p < 1) return requestAnimationFrame(tick);
      loader.classList.add('out'); document.documentElement.style.overflow = '';
      setTimeout(begin, 250); setTimeout(() => { loader.style.display = 'none'; }, 1100);
    };
    requestAnimationFrame(tick);
  } else begin();

  document.addEventListener('click', e => {
    const a = e.target.closest('a[href]');
    if (!a || e.defaultPrevented || e.metaKey || e.ctrlKey || e.shiftKey || a.target === '_blank') return;
    const href = a.getAttribute('href');
    if (!href || href.startsWith('#') || /^(mailto:|tel:|https?:)/.test(href)) return;
    const u = new URL(href, location.href);
    if (u.pathname === location.pathname && u.search === location.search && u.hash) return;
    e.preventDefault();
    document.body.classList.remove('menu-open');
    if (REDUCE) { location.href = u.href; return; }
    shLabel.textContent = a.dataset.label || 'TOOLFAB TOWERS';
    shutter.classList.remove('out'); shutter.classList.add('in');
    store.set('tf_nav', a.dataset.label || 'TOOLFAB TOWERS');
    setTimeout(() => { location.href = u.href; }, 850);
  });
  addEventListener('pageshow', ev => { if (ev.persisted) shutter.className = 'shutter'; });

  /* ---------------- header: solid on scroll, hides while scrolling down ---------------- */
  let lastY = 0;
  const MOBILE_HDR = matchMedia('(max-width: 1023px)');
  const cinema = $('#cinema');
  if (cinema) hdr.classList.add('ov');
  const onScroll = () => {
    const y = scrollY;
    hdr.classList.toggle('solid', cinema ? y > cinema.offsetHeight - 90 : y > 30);
    // phones & tablets: header always stays visible; desktop: tucks away while reading down
    hdr.classList.toggle('hide', !MOBILE_HDR.matches && y > 400 && y > lastY + 2 && !document.body.classList.contains('menu-open'));
    if (y < lastY - 2) hdr.classList.remove('hide');
    lastY = y;
  };
  onScroll(); addEventListener('scroll', onScroll, { passive: true });
  const setMenu = open => {
    document.body.classList.toggle('menu-open', open);
    $('#burger').setAttribute('aria-expanded', open ? 'true' : 'false');
    hdr.classList.remove('hide');
    if (lenis) open ? lenis.stop() : lenis.start();
  };
  $('#burger').addEventListener('click', () => setMenu(!document.body.classList.contains('menu-open')));
  addEventListener('keydown', e => { if (e.key === 'Escape' && document.body.classList.contains('menu-open')) setMenu(false); });
  $$('.mn-t').forEach(t => t.addEventListener('click', () => {
    const g = t.parentElement, open = !g.classList.contains('open');
    $$('.mn-g.open').forEach(o => { if (o !== g) { o.classList.remove('open'); $('.mn-t', o).setAttribute('aria-expanded', 'false'); } });
    g.classList.toggle('open', open); t.setAttribute('aria-expanded', open ? 'true' : 'false');
  }));

  /* ---------------- clean film: plays in view; at the end -> 30+ transition ---------------- */
  function startVideo() {
    const v = $('#heroVid'); if (!v) return;
    const small = innerWidth < 760 || (navigator.connection && navigator.connection.saveData);
    v.src = small ? v.dataset.srcM : v.dataset.src;
    v.preload = 'auto';
    const play = el => { const pr = el.play(); if (pr && pr.catch) pr.catch(() => {}); };
    const h30 = $('#h30'), v30 = $('#vid30');
    let in30 = false;
    new IntersectionObserver(en => {
      if (en[0].isIntersecting) play(in30 ? v30 : v); else { v.pause(); v30.pause(); }
    }, { threshold: 0.15 }).observe($('#cinema'));
    const sb = $('#sndBtn'), sl = $('#sndLbl');
    const setSound = on => {
      v.muted = !on; v30.muted = !on; if (on) { v.volume = 1; v30.volume = 1; play(in30 ? v30 : v); }
      sb.classList.toggle('on', on); sb.setAttribute('aria-pressed', on); sb.setAttribute('aria-label', on ? 'Turn sound off' : 'Turn sound on');
      sl.textContent = on ? 'Sound on' : 'Sound off';
    };
    let chose = false;   // set once the visitor uses the sound button themselves
    sb.addEventListener('click', () => { chose = true; setSound(v.muted); });
    $('#cinFrame').addEventListener('click', () => { chose = true; setSound(v.muted); });
    // sound ON by default: try to start with audio; if the browser blocks it,
    // play muted and switch the sound on at the visitor's first tap / click / key press
    const unlockEvts = ['pointerdown', 'keydown', 'touchstart'];
    const unlock = e => {
      if (e && e.target && e.target.closest && e.target.closest('#sndBtn, #cinFrame')) return;   // those toggle on their own
      unlockEvts.forEach(t => removeEventListener(t, unlock, true));
      if (!chose) setSound(true);
    };
    v.muted = false; v30.muted = false;
    const first = v.play();
    const fallback = () => { setSound(false); play(v); unlockEvts.forEach(t => addEventListener(t, unlock, { capture: true, passive: true })); };
    if (first && first.then) first.then(() => setSound(true), fallback); else setSound(true);
    // outro starts ~0.8 s before the film ends: film music is already fading, the picture crossfades over it
    const startOutro = () => {
      if (in30) return;
      if (!v30.src) v30.src = v30.dataset.src;
      in30 = true; v30.muted = v.muted; v30.currentTime = 0; h30.classList.add('show'); play(v30);
      // white outro: switch header + hero UI to dark text while it shows
      hdr.classList.remove('ov'); $('#cinema').classList.add('in30');
    };
    v.addEventListener('timeupdate', () => {
      const left = v.duration - v.currentTime;
      if (left < 6 && !v30.src) { v30.src = v30.dataset.src; v30.preload = 'auto'; v30.load(); }   // buffer the outro early
      if (left < .8) startOutro();
    });
    v.addEventListener('ended', startOutro);
    const back = () => { in30 = false; h30.classList.remove('show'); hdr.classList.add('ov'); $('#cinema').classList.remove('in30'); v.currentTime = 0; play(v); };
    v30.addEventListener('ended', () => setTimeout(back, 900));
    v30.addEventListener('error', back);
  }

  /* ---------------- typing headline (clients) ---------------- */
  $$('[data-type]').forEach(el => {
    if (REDUCE) return;
    const parts = [], walk = n => [...n.childNodes].forEach(c => { if (c.nodeType === 3) { parts.push([c, c.textContent]); c.textContent = ''; } else walk(c); });
    el.style.minHeight = el.offsetHeight + 'px';
    walk(el); el.classList.add('typing');
    const total = parts.reduce((a, [, t]) => a + t.length, 0);
    const io = new IntersectionObserver(en => {
      if (!en[0].isIntersecting) return; io.disconnect();
      let i = 0;
      const tick = () => {
        let k = ++i;
        for (const [n, t] of parts) { const take = Math.min(t.length, Math.max(0, k)); n.textContent = t.slice(0, take); k -= t.length; }
        if (i < total) setTimeout(tick, 34 + Math.random() * 30); else setTimeout(() => el.classList.add('typed'), 1600);
      };
      setTimeout(tick, 350);
    }, { threshold: .5 });
    io.observe(el);
  });

  /* ---------------- careers: apply buttons, resume drop zone, form (UI only for now) ---------------- */
  const jf = $('#jobForm');
  if (jf) {
    const fi = $('#cvFile'), fname = $('#cvName'), drop = $('#cvDrop'), pos = $('#jPos');
    const showFile = f => { fname.textContent = f ? '✓ ' + f.name + ' · ' + (f.size < 1048576 ? Math.max(1, Math.round(f.size / 1024)) + ' KB' : (f.size / 1048576).toFixed(1) + ' MB') : ''; drop.classList.toggle('has', !!f); };
    fi.addEventListener('change', () => showFile(fi.files[0]));
    ['dragenter', 'dragover'].forEach(t => drop.addEventListener(t, e => { e.preventDefault(); drop.classList.add('over'); }));
    ['dragleave', 'drop'].forEach(t => drop.addEventListener(t, e => { e.preventDefault(); drop.classList.remove('over'); }));
    drop.addEventListener('drop', e => { const f = e.dataTransfer.files; if (f && f[0]) { fi.files = f; showFile(f[0]); } });
    $$('.job-apply').forEach(b => b.addEventListener('click', () => {
      pos.value = b.dataset.job;
      const t = $('#apply'); lenis ? lenis.scrollTo(t, { offset: -60, duration: 1.2 }) : t.scrollIntoView({ behavior: 'smooth' });
      setTimeout(() => $('#j-name').focus({ preventScroll: true }), 1300);
    }));
    jf.addEventListener('submit', e => {
      e.preventDefault();
      const ok = $('#jobOk'), err = $('#jobErr'), el = jf.elements;
      const f = fi.files[0], miss = [];
      if (!el.fullname.value.trim()) miss.push('your name');
      if (!/^\S+@\S+\.\S+$/.test(el.email.value.trim())) miss.push('a valid email');
      if (!pos.value) miss.push('a position');
      if (!f) miss.push('your resume');
      else if (f.size > 5 * 1048576) miss.push('a resume under 5 MB');
      ok.hidden = true; err.hidden = !miss.length;
      if (miss.length) { err.textContent = 'Please add ' + miss.join(', ') + '.'; return; }
      // TODO: send to the server (resume upload + email to HR) — UI only for now
      ok.textContent = 'Thank you, ' + el.fullname.value.trim() + '. Your application for “' + pos.value + '” is ready to send.';
      ok.hidden = false; jf.reset(); showFile(null);
    });
  }

  /* ---------------- word splitter for scroll-lit text ---------------- */
  const splitWords = root => {
    const walk = node => [...node.childNodes].forEach(n => {
      if (n.nodeType === 3) {
        const f = document.createDocumentFragment();
        n.textContent.split(/(\s+)/).forEach(part => {
          if (!part) return;
          if (/^\s+$/.test(part)) { f.appendChild(document.createTextNode(' ')); return; }
          const sp = document.createElement('span'); sp.className = 'mword'; sp.textContent = part; f.appendChild(sp);
        });
        n.replaceWith(f);
      } else if (n.nodeType === 1) walk(n);
    });
    walk(root);
    return $$('.mword', root);
  };
  /* ---------------- pinned statements: words light up, photos drift at their own depth ---------------- */
  $$('.mani').forEach(m => {
    const words = splitWords($('.mani-t', m));
    if (!HAS_GSAP || REDUCE) return;
    const D = words.length * .1 + .5;
    const tl = gsap.timeline({ scrollTrigger: { trigger: m, start: 'top top', end: '+=170%', pin: true, scrub: .6, anticipatePin: 1, refreshPriority: 2 } });
    tl.fromTo(words, { opacity: .1 }, { opacity: 1, stagger: .1, duration: .5, ease: 'none' }, 0);
    tl.fromTo($('.mani-c', m), { scale: .93 }, { scale: 1, duration: D, ease: 'none' }, 0);
    $$('.mani-img', m).forEach(el => {
      const sp = parseFloat(el.dataset.ms);
      tl.fromTo(el, { y: () => innerHeight * sp, rotate: -sp * 9 }, { y: () => -innerHeight * sp, rotate: sp * 9, duration: D, ease: 'none' }, 0);
      tl.fromTo($('img', el), { scale: 1.35 }, { scale: 1, duration: D, ease: 'none' }, 0);
    });
  });
  /* ---------------- crossing ribbons move against each other ---------------- */
  if (HAS_GSAP && !REDUCE) $$('.xb').forEach((b, i) => {
    gsap.fromTo($('.xb-t', b), { xPercent: i ? 0 : -20 }, { xPercent: i ? -20 : 0, ease: 'none', scrollTrigger: { trigger: b.parentElement, start: 'top bottom', end: 'bottom top', scrub: .5 } });
  });

  /* ---------------- header turns white while hovered over the hero ---------------- */
  {
    const hd = $('.hdr');
    if (hd) {
      hd.addEventListener('pointerenter', e => { if (e.pointerType === 'mouse') hd.classList.add('hv'); });
      hd.addEventListener('pointerleave', e => { if (e.pointerType === 'mouse' && !hd.contains(document.activeElement)) hd.classList.remove('hv'); });
      hd.addEventListener('focusin', () => hd.classList.add('hv'));
      hd.addEventListener('focusout', e => { if (!hd.contains(e.relatedTarget) && !hd.matches(':hover')) hd.classList.remove('hv'); });
    }
  }

  /* ---------------- horizontal journey (left-to-right movement) ---------------- */
  const hwrap = $('#hwrap'), track = $('#htrack');
  if (hwrap && HAS_GSAP) {
    gsap.matchMedia().add(DESKTOP_H, () => {
      const panels = $$('.panel', track), N = panels.length;
      const dist = () => track.scrollWidth - innerWidth;
      hwrap.classList.add('is-h');
      const tween = gsap.to(track, {
        x: () => -dist(), ease: 'none',
        scrollTrigger: {
          trigger: hwrap, pin: true, scrub: 1.2, start: 'top top', end: () => '+=' + dist(), invalidateOnRefresh: true, anticipatePin: 1,
          // gentle settle only: if a panel is already ~90% in view, align it; otherwise stay exactly where the reader stopped
          snap: REDUCE ? false : {
            snapTo: v => { const step = 1 / (N - 1), n = Math.round(v / step) * step; return Math.abs(v - n) < step * .1 ? n : v; },
            directional: false, inertia: false, duration: { min: .25, max: .5 }, delay: .4, ease: 'power2.out'
          }
        }
      });
      // navy chapters: band spans panels 3–4; seams bend like molten steel while moving, settle straight at rest
      const sea = $('#hsea', track), nv = $$('.panel.pnv', track);
      let seamTick = null;
      if (sea && nv.length) {
        const place = () => { const a = nv[0], z = nv[nv.length - 1]; sea.style.left = a.offsetLeft + 'px'; sea.style.width = (z.offsetLeft + z.offsetWidth - a.offsetLeft) + 'px'; };
        place(); ScrollTrigger.addEventListener('refreshInit', place);
        const fl = $$('.seam.l path', sea), fr = $$('.seam.r path', sea);
        const draw = b => {
          const l = `M100 0 C${100 - b} 33 ${100 - b} 67 100 100`, r = `M0 0 C${b} 33 ${b} 67 0 100`;
          fl[0].setAttribute('d', l + 'Z'); fl[1].setAttribute('d', l); fl[2].setAttribute('d', l);
          fr[0].setAttribute('d', r + 'Z'); fr[1].setAttribute('d', r); fr[2].setAttribute('d', r);
          sea.style.setProperty('--b', b.toFixed(2)); sea.style.setProperty('--heat', Math.min(b / 26, 1).toFixed(3));
        };
        draw(0);
        if (!REDUCE) {
          let lastX = gsap.getProperty(track, 'x'), cur = 0;
          seamTick = () => {
            const x = gsap.getProperty(track, 'x'), v = Math.abs(lastX - x); lastX = x;
            const t = Math.min(v * 1.5, 48); cur += (t - cur) * (t > cur ? .18 : .07);
            if (cur < .05 && t === 0) { if (cur) { cur = 0; draw(0); } return; }
            draw(cur);
          };
          gsap.ticker.add(seamTick);
        }
      }
      if (!REDUCE) {
        // depth layers drift at their own speed while panels slide
        $$('[data-px]', track).forEach(el => {
          const d = parseFloat(el.dataset.px);
          gsap.fromTo(el, { xPercent: d }, { xPercent: -d, ease: 'none', scrollTrigger: { trigger: el.closest('.panel'), containerAnimation: tween, start: 'left right', end: 'right left', scrub: true } });
        });
        // photos slide inside their frames
        $$('[data-px-img] img', track).forEach(img => gsap.fromTo(img, { xPercent: -6, scale: 1.14 }, { xPercent: 6, scale: 1.14, ease: 'none', scrollTrigger: { trigger: img.closest('.panel'), containerAnimation: tween, start: 'left right', end: 'right left', scrub: true } }));
        // flying showcase: every chapter's layers glide in from different depths, land exactly when the
        // chapter is centred, then drift on as the next one arrives (one continuous canvas, no hard cuts)
        // each column travels as one solid block (text stays with its heading, cards stay in their grid);
        // depth only between columns, no fading
        panels.forEach(pn => {
          const pin = $('.pin', pn); if (!pin) return;
          [...pin.children].filter(el => !el.matches('[data-px]')).forEach((el, j) => {
            const tl = gsap.timeline({ scrollTrigger: { trigger: pn, containerAnimation: tween, start: 'left right', end: 'right left', scrub: true, invalidateOnRefresh: true } });
            tl.fromTo(el, { x: () => innerWidth * (.04 + j * .06), y: 0, scale: 1 },
                          { x: 0, y: 0, scale: 1, ease: 'power2.out', duration: .5 })
              .to(el, { x: () => -innerWidth * (.015 + j * .02), ease: 'power1.in', duration: .5 });
          });
        });
        // soft colour glows drift slower than the canvas (background depth)
        $$('.hglow i', hwrap).forEach((g, i) => gsap.to(g, { x: () => -dist() * [.18, .32, .45][i], ease: 'none', scrollTrigger: { trigger: hwrap, start: 'top top', end: () => '+=' + dist(), scrub: 1.5, invalidateOnRefresh: true } }));
      }
      const goTo = dir => {
        const st = tween.scrollTrigger, i = Math.round(st.progress * (N - 1)) + dir;
        const y = st.start + (st.end - st.start) * Math.max(0, Math.min(N - 1, i)) / (N - 1);
        lenis ? lenis.scrollTo(y, { duration: 1.3 }) : scrollTo({ top: y, behavior: 'smooth' });
      };
      const unH = () => hwrap.classList.remove('is-h');
      const key = e => { if (!tween.scrollTrigger.isActive) return; if (e.key === 'ArrowRight') { e.preventDefault(); goTo(1); } if (e.key === 'ArrowLeft') { e.preventDefault(); goTo(-1); } };
      addEventListener('keydown', key);
      return () => { removeEventListener('keydown', key); unH(); if (seamTick) gsap.ticker.remove(seamTick); };
    });
  }

  /* ---------------- vertical scroll parallax ---------------- */
  if (HAS_GSAP && !REDUCE) {
    $$('[data-speed]').forEach(el => {
      const s = parseFloat(el.dataset.speed);
      gsap.fromTo(el, { yPercent: -s * 100 }, { yPercent: s * 100, ease: 'none', scrollTrigger: { trigger: el.closest('section') || el, start: 'top top', end: 'bottom top', scrub: true } });
    });
    const inTrack = el => el.closest('#htrack') && matchMedia(DESKTOP_H).matches;
    $$('[data-px-img]').forEach(fr => {
      if (inTrack(fr)) return;
      gsap.fromTo(fr.querySelector('img'), { yPercent: -8 }, { yPercent: 8, ease: 'none', scrollTrigger: { trigger: fr, start: 'top bottom', end: 'bottom top', scrub: true } });
    });
    if ($('#intro')) {
      // film drifts slower than the page; logo section rises over it
      gsap.to('#cinFrame', { yPercent: 28, scale: 1.08, ease: 'none', scrollTrigger: { trigger: '#cinema', start: 'top top', end: 'bottom top', scrub: true } });
      gsap.fromTo('#introLogo', { yPercent: 22, scale: .94 }, { yPercent: -12, scale: 1, ease: 'none', scrollTrigger: { trigger: '#intro', start: 'top bottom', end: 'bottom top', scrub: true } });
      // seal floats up faster than the page (logo stays upright); its ring turns with the scroll
      const smallSeal = () => innerWidth <= 980;
      gsap.fromTo('#introSeal', { y: () => smallSeal() ? 40 : 150 }, { y: () => smallSeal() ? -30 : -40, ease: 'none', scrollTrigger: { trigger: '#intro', start: 'top bottom', end: 'bottom top', scrub: .4, invalidateOnRefresh: true } });
      gsap.fromTo('#introSeal .seal', { scale: .9 }, { scale: 1.06, ease: 'none', scrollTrigger: { trigger: '#intro', start: 'top bottom', end: 'bottom top', scrub: .4 } });
      gsap.fromTo('#introSeal .seal-ring', { '--sr': '-90deg' }, { '--sr': '180deg', ease: 'none', scrollTrigger: { trigger: '#intro', start: 'top bottom', end: 'bottom top', scrub: .4 } });
    }
    if ($('#phBand')) {
      const pb = $('#phBand');
      gsap.fromTo(pb, { clipPath: getComputedStyle(pb).clipPath }, { clipPath: 'inset(0px 0px 0px 0px round 0px)', ease: 'none', scrollTrigger: { trigger: '.ph-band', start: 'top 85%', end: 'top 10%', scrub: true } });
      gsap.fromTo('#phBand img', { yPercent: -10, scale: 1.12 }, { yPercent: 10, scale: 1, ease: 'none', scrollTrigger: { trigger: '.ph-band', start: 'top bottom', end: 'bottom top', scrub: true } });
    }
    $$('.vmc .gh').forEach(el => gsap.fromTo(el, { xPercent: 12 }, { xPercent: -12, ease: 'none', scrollTrigger: { trigger: el.parentElement, start: 'top bottom', end: 'bottom top', scrub: true } }));
    $$('.group .gc').forEach((el, i) => gsap.fromTo(el, { y: 60 + i * 40 }, { y: 0, ease: 'none', scrollTrigger: { trigger: '.gcards', start: 'top bottom', end: 'top 40%', scrub: true } }));
  }

  /* ---------------- drag-to-scroll strips ---------------- */
  /* ---------------- drag-to-scroll strips ---------------- */
  $$('[data-hscroll]').forEach(el => {
    let down = false, sx = 0, sl = 0;
    el.addEventListener('pointerdown', e => { if (e.pointerType !== 'mouse') return; down = true; sx = e.clientX; sl = el.scrollLeft; el.style.cursor = 'grabbing'; });
    addEventListener('pointerup', () => { down = false; el.style.cursor = ''; });
    el.addEventListener('pointermove', e => { if (down) el.scrollLeft = sl - (e.clientX - sx); });
    // left / right buttons: one card per click
    const ar = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M4 12h15M13 6l6 6-6 6"/></svg>';
    const nav = document.createElement('div'); nav.className = 'hs-nav';
    nav.innerHTML = `<button class="hs-btn prev" type="button" aria-label="Previous">${ar}</button><button class="hs-btn next" type="button" aria-label="Next">${ar}</button>`;
    el.after(nav);
    const [prev, next] = nav.children;
    const step = () => el.children[0].getBoundingClientRect().width + (parseFloat(getComputedStyle(el).columnGap) || 16);
    prev.addEventListener('click', () => el.scrollBy({ left: -step(), behavior: 'smooth' }));
    next.addEventListener('click', () => el.scrollBy({ left: step(), behavior: 'smooth' }));
    const upd = () => { const max = el.scrollWidth - el.clientWidth; prev.disabled = el.scrollLeft < 4; next.disabled = el.scrollLeft > max - 4; nav.hidden = max < 4; };
    el.addEventListener('scroll', upd, { passive: true }); addEventListener('resize', upd); upd();

    // desktop: the section holds while the mouse wheel moves the cards sideways, then the page continues
    if (!HAS_GSAP || REDUCE) return;
    const head = el.previousElementSibling && el.previousElementSibling.matches('.sec-h') ? el.previousElementSibling : null;
    const zone = document.createElement('div'); zone.className = 'hzone';
    el.parentNode.insertBefore(zone, head || el);
    if (head) zone.appendChild(head);
    zone.append(el, nav);
    gsap.matchMedia().add(DESKTOP_H, () => {
      const max = () => Math.max(1, el.scrollWidth - el.clientWidth);
      // resting points: every card edge, plus the very end of the strip
      const stopsPx = () => { const m = max(), sp = step(), a = []; for (let x = 0; x < m - 8; x += sp) a.push(Math.round(x)); a.push(m); return a; };
      let dirn = 1, hold = 0, dragT = 0, idleT = 0, wrote = 0;   // hold: auto-settle stays off until this time
      const busy = () => performance.now() < hold;
      el.classList.add('pinned-strip');
      const st = ScrollTrigger.create({
        trigger: zone, start: 'center center', end: () => '+=' + Math.round((stopsPx().length - 1) * innerHeight * .55),
        pin: true, anticipatePin: 1, refreshPriority: 1, invalidateOnRefresh: true,
        onUpdate: self => { if (self.direction) dirn = self.direction; wrote = self.progress * max(); el.scrollLeft = wrote; }
      });
      const pageY = left => st.start + (left / max()) * (st.end - st.start);
      const inZone = () => scrollY >= st.start - 2 && scrollY <= st.end + 2;
      const glideTo = (left, d = .9) => { hold = performance.now() + d * 1000 + 350; lenis ? lenis.scrollTo(pageY(left), { duration: d }) : scrollTo({ top: pageY(left), behavior: 'smooth' }); };
      // mouse wheel: when the wheel pauses inside the section, glide on to the next card in that direction
      const settle = () => {
        if (busy() || !st.isActive) return;
        const a = stopsPx(), cur = el.scrollLeft;
        const target = dirn > 0 ? (a.find(x => x > cur - 2) ?? a[a.length - 1]) : ([...a].reverse().find(x => x < cur + 2) ?? 0);
        if (Math.abs(target - cur) > 2) glideTo(target, .6);
      };
      // settle as soon as the wheel's momentum has nearly died out (smooth scroll keeps easing for a while)
      const onScrollIdle = ev => {
        const v = ev && typeof ev.velocity === 'number' ? Math.abs(ev.velocity) : 0;
        if (v < 1.2) { if (!idleT) idleT = setTimeout(() => { idleT = 0; settle(); }, 40); }
        else { clearTimeout(idleT); idleT = 0; }
      };
      if (lenis) lenis.on('scroll', onScrollIdle); else addEventListener('scroll', onScrollIdle, { passive: true });
      // buttons: glide to the next / previous card (moves the page, so pin and strip stay in sync)
      const onBtn = e => {
        const b = e.target.closest('.hs-btn'); if (!b || !inZone()) return;
        e.stopPropagation();
        const cur = el.scrollLeft, a = stopsPx();
        glideTo(b.classList.contains('next') ? (a.find(x => x > cur + 4) ?? a[a.length - 1]) : ([...a].reverse().find(x => x < cur - 4) ?? 0));
      };
      nav.addEventListener('click', onBtn, true);
      // dragging the cards / scrollbar while pinned: the page follows, then settles on the nearest card
      const onUserScroll = () => {
        if (!inZone() || Math.abs(el.scrollLeft - wrote) < 3) return;   // our own update, ignore
        hold = performance.now() + 700;
        lenis ? lenis.scrollTo(pageY(el.scrollLeft), { immediate: true }) : scrollTo(0, pageY(el.scrollLeft));
        clearTimeout(dragT);
        dragT = setTimeout(() => { const a = stopsPx(), cur = el.scrollLeft; glideTo(a.reduce((best, x) => Math.abs(x - cur) < Math.abs(best - cur) ? x : best, a[0]), .5); }, 450);
      };
      el.addEventListener('scroll', onUserScroll, { passive: true });
      ScrollTrigger.sort();
      return () => {
        el.classList.remove('pinned-strip'); nav.removeEventListener('click', onBtn, true); el.removeEventListener('scroll', onUserScroll);
        if (lenis) lenis.off('scroll', onScrollIdle); else removeEventListener('scroll', onScrollIdle);
        clearTimeout(dragT); clearTimeout(idleT);
      };
    });
  });

  /* ---------------- power capacity transition ---------------- */
  const capNum = $('#capNum');
  if (capNum) {
    const chips = $$('#capScale span'), turb = $('#capTurb'), vals = chips.map(c => parseFloat(c.textContent));
    let k = 0, timer = null;
    const show = i => {
      chips.forEach((c, j) => c.classList.toggle('on', j === i));
      const from = parseFloat(capNum.textContent) || 0, to = vals[i], t0 = performance.now(), dp = (chips[i].textContent.split(' ')[0].split('.')[1] || '0').length;
      const step = now => { const p = Math.min(1, (now - t0) / 700); capNum.textContent = (from + (to - from) * (1 - Math.pow(1 - p, 3))).toFixed(dp); if (p < 1) requestAnimationFrame(step); };
      requestAnimationFrame(step);
      turb.style.transform = `scale(${0.6 + 0.4 * (to / 7)})`;
    };
    chips.forEach((c, j) => c.addEventListener('mouseenter', () => { k = j; show(j); }));
    new IntersectionObserver(en => { if (en[0].isIntersecting && !timer) { show(0); timer = setInterval(() => { k = (k + 1) % vals.length; show(k); }, 1800); } }, { threshold: .3 }).observe($('#capMeter'));
  }

  /* ---------------- dotted world map with export arcs ---------------- */
  const mapEl = $('#worldMap');
  if (mapEl && window.topojson) {
    fetch('https://cdn.jsdelivr.net/npm/world-atlas@2.0.2/land-110m.json').then(r => r.json()).then(topo => {
      const land = topojson.feature(topo, topo.objects.land);
      const W = 1000, H = 500, LAT0 = 80, LAT1 = -58;
      const px = (lon, lat) => [(lon + 180) / 360 * W, (LAT0 - lat) / (LAT0 - LAT1) * H];
      const cv = document.createElement('canvas'); cv.width = W; cv.height = H;
      const cx = cv.getContext('2d'); cx.fillStyle = '#000';
      const geoms = land.features ? land.features.map(f => f.geometry) : [land.geometry];
      geoms.forEach(g => (g.type === 'MultiPolygon' ? g.coordinates : [g.coordinates]).forEach(poly => { cx.beginPath(); poly.forEach(ring => ring.forEach(([lo, la], i) => { const [x, y] = px(lo, la); i ? cx.lineTo(x, y) : cx.moveTo(x, y); })); cx.fill('evenodd'); }));
      const data = cx.getImageData(0, 0, W, H).data, S = 9;
      let dots = '';
      for (let y = S / 2; y < H; y += S) for (let x = S / 2; x < W; x += S) if (data[(Math.floor(y) * W + Math.floor(x)) * 4 + 3] > 0) dots += `<circle class="dot" cx="${x}" cy="${y}" r="1.9"/>`;
      const home = px(78.7, 10.8);
      let arcs = '', pins = '';
      JSON.parse(mapEl.dataset.dest).forEach(([name, lo, la], i) => {
        const [x, y] = px(lo, la), mx = (home[0] + x) / 2, my = Math.min(home[1], y) - Math.abs(home[0] - x) * .28 - 20;
        arcs += `<path class="arc" d="M${home[0]} ${home[1]} Q${mx} ${my} ${x} ${y}" style="--len:1400;--d:${i * .16}s"/>`;
        pins += `<g class="dest" style="--d:${i * .16}s"><circle class="pulse" cx="${x}" cy="${y}" r="3.6"/><circle cx="${x}" cy="${y}" r="3.8"/><text x="${x + 8}" y="${y + (name === 'Sri Lanka' ? 14 : -7)}">${name.toUpperCase()}</text></g>`;
      });
      mapEl.innerHTML = `<svg viewBox="0 0 ${W} ${H}" role="img" aria-label="Map showing TOOLFAB supply from India to North America, Europe, the Middle East and Asia">${dots}${arcs}${pins}<g class="home"><circle class="pulse" cx="${home[0]}" cy="${home[1]}" r="6"/><circle cx="${home[0]}" cy="${home[1]}" r="6.5"/><text x="${home[0] - 12}" y="${home[1] + 24}" style="font:700 11px 'Manrope',sans-serif;fill:#2f2f65;letter-spacing:.1em">INDIA</text></g></svg>`;
      $$('.arc', mapEl).forEach(p => p.style.setProperty('--len', Math.ceil(p.getTotalLength())));
      $$('.pulse', mapEl).forEach(c => { c.style.transformBox = 'fill-box'; c.style.transformOrigin = 'center'; });
      if (HAS_GSAP) ScrollTrigger.refresh();
    }).catch(() => { mapEl.style.display = 'none'; });
  } else if (mapEl) mapEl.style.display = 'none';

  /* ---------------- certification tabs ---------------- */
  const tabs = $$('[data-tab]');
  if (tabs.length) {
    const sel = i => { tabs.forEach(t => t.classList.toggle('on', t.dataset.tab == i)); $$('[data-pane]').forEach(p => p.classList.toggle('on', p.dataset.pane == i)); };
    tabs.forEach(t => t.addEventListener('click', () => sel(t.dataset.tab)));
    const m = location.hash.match(/^#c(\d)$/); if (m) sel(m[1]);
  }

  /* ---------------- extra scroll choreography ---------------- */
  if (HAS_GSAP && !REDUCE) {
    $$('.two .pframe, .msg .pframe').forEach(fr => gsap.fromTo(fr, { clipPath: 'inset(14% 10% 14% 10% round 28px)' }, { clipPath: 'inset(0% 0% 0% 0% round 20px)', ease: 'none', scrollTrigger: { trigger: fr, start: 'top 95%', end: 'top 35%', scrub: true } }));
    $$('.sec .sec-h, .group-h>div:first-child, .tech > div:not(.tech-art)').forEach((h, i) => gsap.fromTo(h, { x: i % 2 ? -40 : 40 }, { x: 0, ease: 'none', scrollTrigger: { trigger: h, start: 'top bottom', end: 'top 45%', scrub: true } }));
    $$('.tech-art .tower-svg').forEach(t => gsap.fromTo(t, { yPercent: 10 }, { yPercent: -6, ease: 'none', scrollTrigger: { trigger: t.closest('.tech'), start: 'top bottom', end: 'bottom top', scrub: true } }));
    $$('.stats .stat b').forEach((b, i) => gsap.fromTo(b, { y: 50 + i * 22 }, { y: 0, ease: 'none', scrollTrigger: { trigger: '.stats', start: 'top bottom', end: 'top 40%', scrub: true } }));
    gsap.fromTo('.foot-g', { yPercent: -16, opacity: .25 }, { yPercent: 0, opacity: 1, ease: 'none', scrollTrigger: { trigger: '.foot', start: 'top bottom', end: 'top 30%', scrub: true } });
    gsap.fromTo('.marq div', { x: 0 }, { x: -260, ease: 'none', scrollTrigger: { trigger: '.foot', start: 'top bottom', end: 'bottom bottom', scrub: true } });
  }
  /* light scroll-lit text (not pinned) */
  $$('[data-scrub]').forEach(el => {
    const words = splitWords(el);
    if (!HAS_GSAP || REDUCE) return;
    gsap.fromTo(words, { opacity: .12 }, { opacity: 1, stagger: .1, ease: 'none', scrollTrigger: { trigger: el, start: 'top 85%', end: 'bottom 45%', scrub: .5 } });
  });
  /* images lean with scroll velocity */
  if (lenis && HAS_GSAP && !REDUCE) {
    const imgs = $$('.pframe img').filter(i => !i.closest('#phBand') && !i.closest('#htrack'));
    const sk = imgs.map(i => gsap.quickTo(i, 'skewY', { duration: .6, ease: 'power3' }));
    lenis.on('scroll', ({ velocity }) => { const v = gsap.utils.clamp(-4, 4, velocity * .3); sk.forEach(fn => fn(v)); });
  }

  /* ---------------- hover layer: rolling labels, magnetic buttons, 3D tilt, cursor ---------------- */
  $$('.nav a, .btn').forEach(a => {
    const tn = [...a.childNodes].find(n => n.nodeType === 3 && n.textContent.trim());
    if (!tn) return;
    const t = tn.textContent.trim(), r = document.createElement('span'), sp = document.createElement('span');
    r.className = 'roll'; sp.dataset.t = t; sp.textContent = t; r.appendChild(sp); tn.replaceWith(r);
  });
  const FINE = matchMedia('(hover: hover) and (pointer: fine)').matches;
  if (FINE && HAS_GSAP && !REDUCE) {
    // magnetic
    $$('.btn, .snd, .soc a, .badge30, .wa, .hs-btn').forEach(el => {
      el.classList.add('mag');
      const xT = gsap.quickTo(el, 'x', { duration: .6, ease: 'power3' }), yT = gsap.quickTo(el, 'y', { duration: .6, ease: 'power3' });
      el.addEventListener('mousemove', e => { const r = el.getBoundingClientRect(); xT((e.clientX - r.left - r.width / 2) * .32); yT((e.clientY - r.top - r.height / 2) * .4); });
      el.addEventListener('mouseleave', () => { xT(0); yT(0); });
    });
    // 3D tilt with a yellow light that follows the pointer
    $$('.tw, .cert, .gc, .dir, .vcard, .vmc, .pstep, .ms, .vt, .usp').forEach(el => {
      el.classList.add('tilt');
      const g = document.createElement('span'); g.className = 'glare'; el.appendChild(g);
      const rx = gsap.quickTo(el, 'rotationX', { duration: .7, ease: 'power3' }), ry = gsap.quickTo(el, 'rotationY', { duration: .7, ease: 'power3' });
      const amt = el.matches('.usp') ? 4 : 9;
      let prepped = false;
      el.addEventListener('mouseenter', () => {
        if (!prepped) { prepped = true; gsap.set(el, { transformPerspective: 1100 }); }
        el.style.transitionProperty = 'opacity, box-shadow, border-color, background-color';
      });
      el.addEventListener('mousemove', e => {
        const r = el.getBoundingClientRect(), px = (e.clientX - r.left) / r.width, py = (e.clientY - r.top) / r.height;
        ry((px - .5) * amt); rx((.5 - py) * amt * .8);
        el.style.setProperty('--mx', (px * 100).toFixed(1) + '%'); el.style.setProperty('--my', (py * 100).toFixed(1) + '%');
      });
      el.addEventListener('mouseleave', () => { rx(0); ry(0); });
    });
    // logo emblem follows the pointer in 3D
    const intro = $('#intro'), em = $('.intro-em');
    if (intro && em) {
      const ex = gsap.quickTo(em, 'rotationX', { duration: 1, ease: 'power3' }), ey = gsap.quickTo(em, 'rotationY', { duration: 1, ease: 'power3' });
      let prep = false;
      intro.addEventListener('mousemove', e => {
        if (!prep) { prep = true; em.style.transitionProperty = 'opacity'; gsap.set(em, { transformPerspective: 700 }); }
        ey((e.clientX / innerWidth - .5) * 34); ex(-(e.clientY / innerHeight - .5) * 24);
      });
      intro.addEventListener('mouseleave', () => { ex(0); ey(0); });
    }
    // cursor: ring + label disk
    const ring = document.createElement('div'), disk = document.createElement('div');
    ring.className = 'cur-r'; disk.className = 'cur-b'; disk.innerHTML = '<b></b>';
    document.body.append(ring, disk);
    const lbl = disk.firstChild;
    const q = (el, p, d) => gsap.quickTo(el, p, { duration: d, ease: 'power3' });
    const rX = q(ring, 'x', .35), rY = q(ring, 'y', .35), dX = q(disk, 'x', .6), dY = q(disk, 'y', .6);
    let lastT = null;
    const BIG = '.tw, .vt, .gc .pframe, .vcard, .cert, .pstep .pi, .who-art .pframe';
    const upd = t => {
      if (!t || !t.closest) return;
      const big = t.closest(BIG), lk = t.closest('a, button, [data-tab], .cap-scale span, label, input, textarea');
      const vid = !lk && t.closest('#cinFrame');
      let L = '';
      if (big) L = big.matches('a, a *') || big.closest('a') ? 'View' : 'Explore';
      else if (vid) L = $('#sndBtn') && $('#sndBtn').classList.contains('on') ? 'Mute' : 'Sound on';
      lbl.textContent = L;
      document.body.classList.toggle('cur-big', !!L);
      ring.classList.toggle('lk', !!lk && !L);
    };
    addEventListener('mousemove', e => { rX(e.clientX); rY(e.clientY); dX(e.clientX); dY(e.clientY); document.body.classList.add('cur-on'); }, { passive: true });
    document.addEventListener('mouseover', e => { lastT = e.target; upd(lastT); });
    document.addEventListener('click', () => setTimeout(() => upd(lastT), 30));
    document.documentElement.addEventListener('mouseleave', () => document.body.classList.remove('cur-on'));
  }

  /* 30+ animation on inner pages: pause off-screen, stay still for reduced-motion users */
  $$('.anim30').forEach(v => {
    if (REDUCE) { v.removeAttribute('autoplay'); v.pause(); return; }
    new IntersectionObserver(en => { if (en[0].isIntersecting) { const p = v.play(); if (p && p.catch) p.catch(() => {}); } else v.pause(); }).observe(v);
  });

  setTimeout(() => { if (!ready) begin(); }, 4000);
  addEventListener('load', () => HAS_GSAP && ScrollTrigger.refresh());
})();
</script>
</body>
</html>
