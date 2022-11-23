<script>
    function GET_MY_PROFILE() {
        try {
            {{--const myProfile = JSON.parse('{{json_encode(auth()->user())}}'.replace(/&quot;/g, '"').replaceAll(/\\/g, ''));--}}
            {{--return myProfile || {};--}}
            return {};
        } catch (err) {
            return {};
        }
    }

    function GET_MY_PERMISSION() {
        try {
            {{--const myProfile = JSON.parse('{{json_encode(\App\Repositories\Staff\Parser\StaffParser::first(profile()))}}'.replace(/&quot;/g, '"').replaceAll(/\\/g, ''));--}}
            {{--return Object.keys(myProfile).length ? myProfile.permissions : {};--}}
            return {};
        } catch (err) {
            return {};
        }
    }

    // GET_MY_PERMISSION()


    {{--function actionAddCurrency() {--}}
    {{--    window.localStorage.setItem('ls_modal_add_mCurrency', JSON.stringify(true))--}}
    {{--    window.localStorage.setItem('ls_setting_tab_href', JSON.stringify('nav-currency'))--}}
    {{--    window.location.href = '{{route('administrator.system.websiteConfig')}}'--}}
    {{--}--}}

    {{--function actionAddLanguage() {--}}
    {{--    window.localStorage.setItem('ls_modal_add_mLanguage', JSON.stringify(true))--}}
    {{--    window.localStorage.setItem('ls_setting_tab_href', JSON.stringify('nav-language'))--}}
    {{--    window.location.href = '{{route('administrator.system.websiteConfig')}}'--}}
    {{--}--}}

    {{--function actionAddArea() {--}}
    {{--    window.localStorage.setItem('ls_modal_add_area', JSON.stringify(true))--}}
    {{--    window.location.href = '{{route('administrator.property.area')}}';--}}
    {{--}--}}

    {{--function actionAddProperty() {--}}
    {{--    window.localStorage.setItem('ls_modal_add_property', JSON.stringify(true))--}}
    {{--    window.location.href = '{{route('administrator.property.property')}}';--}}
    {{--}--}}

    {{--function URLGlobePropertyAddFreeHold() {--}}
    {{--    return '{{route('administrator.property.property')}}/add-free-hold';--}}
    {{--}--}}

    {{--function URLGlobePropertyAddLeaseHold() {--}}
    {{--    return '{{route('administrator.property.property')}}/add-lease-hold';--}}
    {{--}--}}


    {{--// GET COMPONENT STATIC--}}
    {{--function configComponentStatic(keyFunction) {--}}
    {{--    return JSON.parse(keyFunction.replace(/&quot;/g, '"'));--}}
    {{--}--}}

    {{--function customCSKey(name, display) {--}}
    {{--    return {--}}
    {{--        name: name,--}}
    {{--        display: display--}}
    {{--    }--}}
    {{--}--}}

    {{--function actionGetComponentStatic(passKey) {--}}
    {{--    const statics = {--}}
    {{--        // All Property--}}
    {{--        property_ownership_status: configComponentStatic('{{property_ownership_status()}}'),--}}
    {{--        property_status: configComponentStatic('{{property_status()}}'),--}}
    {{--        property_type: configComponentStatic('{{property_type()}}'),--}}
    {{--        property_type_freehold: configComponentStatic('{{property_type_freehold()}}'),--}}
    {{--        property_type_leasehold: configComponentStatic('{{property_type_leasehold()}}'),--}}
    {{--        property_type_yearly_rental: configComponentStatic('{{property_type_yearly_rental()}}'),--}}
    {{--        property_view: configComponentStatic('{{property_view()}}'),--}}
    {{--        property_zoning: configComponentStatic('{{property_zoning()}}'),--}}
    {{--        property_advertising: configComponentStatic('{{property_advertising()}}'),--}}
    {{--        property_document_type: configComponentStatic('{{property_document_type()}}'),--}}
    {{--        property_leasehold_possibility_extension: configComponentStatic('{{property_leasehold_possibility_extension()}}'),--}}

    {{--        // PROPERTY (BUILDING ONLY)--}}
    {{--        property_building_aperture: configComponentStatic('{{property_building_window_type()}}'),--}}
    {{--        property_building_configuration: configComponentStatic('{{property_building_configuration()}}'),--}}
    {{--        property_building_electricity: configComponentStatic('{{property_building_electricity()}}'),--}}
    {{--        property_building_furnishing: configComponentStatic('{{property_building_furnishing()}}'),--}}
    {{--        property_building_garden_type: configComponentStatic('{{property_building_garden_type()}}'),--}}
    {{--        property_building_general_aspect: configComponentStatic('{{property_building_general_aspect()}}'),--}}
    {{--        property_building_IMB_type: configComponentStatic('{{property_building_IMB_type()}}'),--}}
    {{--        property_building_isolation: configComponentStatic('{{property_building_isolation()}}'),--}}
    {{--        property_building_kitchen: configComponentStatic('{{property_building_kitchen()}}'),--}}
    {{--        property_building_other_room_residential: configComponentStatic('{{property_building_other_room_residential()}}'),--}}
    {{--        property_building_outdoor_amenity: configComponentStatic('{{property_building_outdoor_amenity()}}'),--}}
    {{--        property_building_parking_plot: configComponentStatic('{{property_building_parking_plot()}}'),--}}
    {{--        property_building_photo_shoot_package: configComponentStatic('{{property_photo_shoot_package()}}'),--}}
    {{--        property_building_pool_can_build: configComponentStatic('{{property_building_pool_can_build()}}'),--}}
    {{--        property_building_rental_period: configComponentStatic('{{property_building_rental_period()}}'),--}}
    {{--        property_building_roof_type: configComponentStatic('{{property_building_roof_type()}}'),--}}
    {{--        property_building_room_circulation: configComponentStatic('{{property_building_living_room_type()}}'),--}}
    {{--        property_building_water: configComponentStatic('{{property_building_water()}}'),--}}
    {{--        property_building_water_heater: configComponentStatic('{{property_building_water_heater()}}'),--}}
    {{--        property_building_floor_type: configComponentStatic('{{property_building_floor_type()}}'),--}}
    {{--        property_price_management_type: configComponentStatic('{{property_price_management_type()}}'),--}}

    {{--        // COMPONENT--}}
    {{--        religions: configComponentStatic('{{religions()}}'),--}}

    {{--        // CONTACT--}}
    {{--        contact_preference: configComponentStatic('{{contact_preference()}}'),--}}
    {{--        contact_type: configComponentStatic('{{contact_type()}}'),--}}
    {{--        contact_origin: configComponentStatic('{{contact_origin()}}'),--}}
    {{--        contact_owner_tax_number: configComponentStatic('{{contact_owner_tax_number()}}'),--}}

    {{--        custom_property_document: [--}}
    {{--            customCSKey('land_certificates', 'Land Certificates'),--}}
    {{--            customCSKey('copy_of_lease_agreement', 'Copy Lease Agreement'),--}}
    {{--            customCSKey('copy_of_previous_lease_agreement', 'Copy Previous Lease Agreement'),--}}
    {{--            customCSKey('selling_tax_recip', 'Selling Tax Recip'),--}}
    {{--            customCSKey('pbb_up_to_date', 'PBB Up to Date'),--}}
    {{--            customCSKey('npwpd', 'NPWPD'),--}}
    {{--            customCSKey('passport_ktp', 'Passport KTP'),--}}
    {{--            customCSKey('freehold', 'Other (Freehold)')--}}
    {{--        ],--}}

    {{--        propertyFilterSortBy: [--}}
    {{--            customCSKey('price', 'Price'),--}}
    {{--        ],--}}
    {{--        propertyFilterSortType: [--}}
    {{--            customCSKey('asc', 'Asc'),--}}
    {{--            customCSKey('desc', 'Desc')--}}
    {{--        ]--}}
    {{--    }--}}

    {{--    return statics[passKey]--}}
    {{--}--}}

</script>
