@extends('frontEnd.master1')
@section('meta_title')

    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Omegabijles">
    <meta property="og:description" content="Bijles in Haarlem, Bloemendaal of omgeving? Zoek gemakkelijk via Omegabijles de bijlesgever die bij je past! Bijles aan huis. Voor VMBO, HAVO, VWO en gymnasium. We helpen met de stof en geven persoonlijke tips mee. "/>
    <meta name="Language" content="nederlands"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="robots" content="index, follow"/>

    <?php
    if(isset($permalink)){
    ?>
    <script type="application/ld+json" xml="space">// <![CDATA[
    {
    "@context": "http://schema.org",
    "@id": "https://www.omegabijles.nl/#Organization",
    "@type": "Organization",
    "name": "omegabijles",
    "sameAs": "https://www.trustpilot.com/review/omegabijles.nl"
    ,"aggregateRating": {
    "@type": "AggregateRating",
    "bestRating": "5",
    "worstRating": "1",
    "ratingValue": "5",
    "reviewCount": "10",
    "url":""
    }
    }
    // ]]>
    </script>
    @if($permalink == 'aardrijkskunde')
        <meta name="description" content="Gemakkelijk Bijles {{$subject}} Aan Huis vinden in Haarlem of omgeving. Vind de Bijlesgever Die Bij Je Past. Samen de Vakstof Herhalen en Persoonlijke Tips! Bijles Aan Huis. Voor VMBO, HAVO, VWO én gymnasium. ">
        <meta name="keywords" content="bijles, begeleiding, {{$subject}}, haarlem, aan huis, vmbo, havo, vwo, gymnasium, omegabijles, haarlem-noord"/>
        <title>Bijles {{$subject}} in Haarlem - Omegabijles </title>

    @elseif($permalink == 'biologie')
        <meta name="description" content="Gemakkelijk Bijles {{$subject}} Aan Huis vinden in Haarlem of omgeving. Vind de Bijlesgever Die Bij Je Past. Samen de Vakstof Herhalen en Persoonlijke Tips! Bijles Aan Huis. Voor VMBO, HAVO, VWO én gymnasium. ">
        <meta name="keywords" content="bijles, begeleiding, {{$subject}}, haarlem, aan huis, vmbo, havo, vwo, gymnasium, omegabijles, haarlem-noord"/>

        <title>Bijles {{$subject}} in Haarlem - Omegabijles </title>

    @elseif($permalink == 'duits')
        <meta name="description" content="Gemakkelijk Bijles {{$subject}} Aan Huis vinden in Haarlem of omgeving. Vind de Bijlesgever Die Bij Je Past. Samen de Vakstof Herhalen en Persoonlijke Tips! Bijles Aan Huis. Voor VMBO, HAVO, VWO én gymnasium. ">
        <meta name="keywords" content="bijles, begeleiding, {{$subject}}, haarlem, aan huis, vmbo, havo, vwo, gymnasium, omegabijles, haarlem-noord"/>


        <title>Bijles {{$subject}} in Haarlem - Omegabijles </title>

    @elseif($permalink == 'economie')
        <meta name="description" content="Gemakkelijk Bijles {{$subject}} Aan Huis vinden in Haarlem of omgeving. Vind de Bijlesgever Die Bij Je Past. Samen de Vakstof Herhalen en Persoonlijke Tips! Bijles Aan Huis. Voor VMBO, HAVO, VWO én gymnasium. ">
        <meta name="keywords" content="bijles, begeleiding, {{$subject}}, haarlem, aan huis, vmbo, havo, vwo, gymnasium, omegabijles, haarlem-noord"/>


        <title>Bijles {{$subject}} in Haarlem - Omegabijles </title>

    @elseif($permalink == 'engels')
        <meta name="description" content="Gemakkelijk Bijles {{$subject}} Aan Huis vinden in Haarlem of omgeving. Vind de Bijlesgever Die Bij Je Past. Samen de Vakstof Herhalen en Persoonlijke Tips! Bijles Aan Huis. Voor VMBO, HAVO, VWO én gymnasium. ">
        <meta name="keywords" content="bijles, begeleiding, {{$subject}}, haarlem, aan huis, vmbo, havo, vwo, gymnasium, omegabijles, haarlem-noord"/>


        <title>Bijles {{$subject}} in Haarlem - Omegabijles </title>

    @elseif($permalink == 'filosofie')
        <meta name="description" content="Gemakkelijk Bijles {{$subject}} Aan Huis vinden in Haarlem of omgeving. Vind de Bijlesgever Die Bij Je Past. Samen de Vakstof Herhalen en Persoonlijke Tips! Bijles Aan Huis. Voor VMBO, HAVO, VWO én gymnasium. ">
        <meta name="keywords" content="bijles, begeleiding, {{$subject}}, haarlem, aan huis, vmbo, havo, vwo, gymnasium, omegabijles, haarlem-noord"/>


        <title>Bijles {{$subject}} in Haarlem - Omegabijles </title>

    @elseif($permalink == 'frans')
        <meta name="description" content="Gemakkelijk Bijles {{$subject}} Aan Huis vinden in Haarlem of omgeving. Vind de Bijlesgever Die Bij Je Past. Samen de Vakstof Herhalen en Persoonlijke Tips! Bijles Aan Huis. Voor VMBO, HAVO, VWO én gymnasium. ">
        <meta name="keywords" content="bijles, begeleiding, {{$subject}}, haarlem, aan huis, vmbo, havo, vwo, gymnasium, omegabijles, haarlem-noord"/>


        <title>Bijles {{$subject}} in Haarlem - Omegabijles </title>

    @elseif($permalink == 'geschiedenis')
        <meta name="description" content="Gemakkelijk Bijles {{$subject}} Aan Huis vinden in Haarlem of omgeving. Vind de Bijlesgever Die Bij Je Past. Samen de Vakstof Herhalen en Persoonlijke Tips! Bijles Aan Huis. Voor VMBO, HAVO, VWO én gymnasium. ">
        <meta name="keywords" content="bijles, begeleiding, {{$subject}}, haarlem, aan huis, vmbo, havo, vwo, gymnasium, omegabijles, haarlem-noord"/>


        <title>Bijles {{$subject}} in Haarlem - Omegabijles </title>

    @elseif($permalink == 'grieks')
        <meta name="description" content="Gemakkelijk Bijles {{$subject}} Aan Huis vinden in Haarlem of omgeving. Vind de Bijlesgever Die Bij Je Past. Samen de Vakstof Herhalen en Persoonlijke Tips! Bijles Aan Huis. Voor VMBO, HAVO, VWO én gymnasium. ">
        <meta name="keywords" content="bijles, begeleiding, {{$subject}}, haarlem, aan huis, vmbo, havo, vwo, gymnasium, omegabijles, haarlem-noord"/>


        <title>Bijles {{$subject}} in Haarlem - Omegabijles </title>

    @elseif($permalink == 'latijn')
        <meta name="description" content="Gemakkelijk Bijles {{$subject}} Aan Huis vinden in Haarlem of omgeving. Vind de Bijlesgever Die Bij Je Past. Samen de Vakstof Herhalen en Persoonlijke Tips! Bijles Aan Huis. Voor VMBO, HAVO, VWO én gymnasium. ">
        <meta name="keywords" content="bijles, begeleiding, {{$subject}}, haarlem, aan huis, vmbo, havo, vwo, gymnasium, omegabijles, haarlem-noord"/>


        <title>Bijles {{$subject}} in Haarlem - Omegabijles </title>

    @elseif($permalink == 'm&o')
        <meta name="description" content="Gemakkelijk Bijles M&O Aan Huis vinden in Haarlem of omgeving. Vind de Bijlesgever Die Bij Je Past. Samen de Vakstof Herhalen en Persoonlijke Tips! Bijles Aan Huis. Voor VMBO, HAVO, VWO én gymnasium. ">
        <meta name="keywords" content="bijles, begeleiding, M&O, haarlem, aan huis, vmbo, havo, vwo, gymnasium, omegabijles, haarlem-noord"/>


        <title>Bijles M&O in Haarlem - Omegabijles </title>

    @elseif($permalink == 'maatschappijleer')
        <meta name="description" content="Gemakkelijk Bijles {{$subject}} Aan Huis vinden in Haarlem of omgeving. Vind de Bijlesgever Die Bij Je Past. Samen de Vakstof Herhalen en Persoonlijke Tips! Bijles Aan Huis. Voor VMBO, HAVO, VWO én gymnasium. ">
        <meta name="keywords" content="bijles, begeleiding, {{$subject}}, haarlem, aan huis, vmbo, havo, vwo, gymnasium, omegabijles, haarlem-noord"/>


        <title>Bijles {{$subject}} in Haarlem - Omegabijles </title>

    @elseif($permalink == 'natuurkunde')
        <meta name="description" content="Gemakkelijk Bijles {{$subject}} Aan Huis vinden in Haarlem of omgeving. Vind de Bijlesgever Die Bij Je Past. Samen de Vakstof Herhalen en Persoonlijke Tips! Bijles Aan Huis. Voor VMBO, HAVO, VWO én gymnasium. ">
        <meta name="keywords" content="bijles, begeleiding, {{$subject}}, haarlem, aan huis, vmbo, havo, vwo, gymnasium, omegabijles, haarlem-noord"/>


        <title>Bijles {{$subject}} in Haarlem - Omegabijles </title>

    @elseif($permalink == 'nederlands')
        <meta name="description" content="Gemakkelijk Bijles {{$subject}} Aan Huis vinden in Haarlem of omgeving. Vind de Bijlesgever Die Bij Je Past. Samen de Vakstof Herhalen en Persoonlijke Tips! Bijles Aan Huis. Voor VMBO, HAVO, VWO én gymnasium. ">
        <meta name="keywords" content="bijles, begeleiding, {{$subject}}, haarlem, aan huis, vmbo, havo, vwo, gymnasium, omegabijles, haarlem-noord"/>


        <title>Bijles {{$subject}} in Haarlem - Omegabijles </title>

    @elseif($permalink == 'nlt')
        <meta name="description" content="Gemakkelijk Bijles NLT Aan Huis vinden in Haarlem of omgeving. Vind de Bijlesgever Die Bij Je Past. Samen de Vakstof Herhalen en Persoonlijke Tips! Bijles Aan Huis. Voor VMBO, HAVO, VWO én gymnasium. ">
        <meta name="keywords" content="bijles, begeleiding, NLT, haarlem, aan huis, vmbo, havo, vwo, gymnasium, omegabijles, haarlem-noord"/>


        <title>Bijles NLT in Haarlem - Omegabijles</title>

    @elseif($permalink == 'scheikunde')
        <meta name="description" content="Gemakkelijk Bijles {{$subject}} Aan Huis vinden in Haarlem of omgeving. Vind de Bijlesgever Die Bij Je Past. Samen de Vakstof Herhalen en Persoonlijke Tips! Bijles Aan Huis. Voor VMBO, HAVO, VWO én gymnasium. ">
        <meta name="keywords" content="bijles, begeleiding, {{$subject}}, haarlem, aan huis, vmbo, havo, vwo, gymnasium, omegabijles, haarlem-noord"/>


        <title>Bijles {{$subject}} in Haarlem - Omegabijles </title>

    @elseif($permalink == 'wiskundea')
        <meta name="description" content="Gemakkelijk Bijles Wiskunde A Aan Huis vinden in Haarlem of omgeving. Vind de Bijlesgever Die Bij Je Past. Samen de Vakstof Herhalen en Persoonlijke Tips! Bijles Aan Huis. Voor VMBO, HAVO, VWO én gymnasium. ">
        <meta name="keywords" content="bijles, begeleiding, Wiskunde A, wiskunde, haarlem, aan huis, vmbo, havo, vwo, gymnasium, omegabijles, haarlem-noord"/>


        <title>Bijles Wiskunde A in Haarlem - Omegabijles</title>

    @elseif($permalink == 'wiskundeb')
        <meta name="description" content="Gemakkelijk Bijles Wiskunde B Aan Huis vinden in Haarlem of omgeving. Vind de Bijlesgever Die Bij Je Past. Samen de Vakstof Herhalen en Persoonlijke Tips! Bijles Aan Huis. Voor VMBO, HAVO, VWO én gymnasium. ">
        <meta name="keywords" content="bijles, begeleiding, wiskunde b, wiskunde, haarlem, aan huis, vmbo, havo, vwo, gymnasium, omegabijles, haarlem-noord"/>

        <title>Bijles Wiskunde B in Haarlem - Omegabijles </title>

    @elseif($permalink == 'wiskundeonderbouw')
        <meta name="description" content="Gemakkelijk Bijles wiskunde onderbouw Aan Huis vinden in Haarlem of omgeving. Vind de Bijlesgever Die Bij Je Past. Samen de Vakstof Herhalen en Persoonlijke Tips! Bijles Aan Huis. Voor VMBO, HAVO, VWO én gymnasium. ">
        <meta name="keywords" content="bijles, begeleiding, wiskunde onderbouw, wiskunde, haarlem, aan huis, vmbo, havo, vwo, gymnasium, omegabijles, haarlem-noord"/>


        <title>Bijles Wiskunde in Haarlem - Omegabijles </title>

    @elseif($permalink == 'wiskundec')
        <meta name="description" content="Gemakkelijk Bijles Wiskunde C Aan Huis vinden in Haarlem of omgeving. Vind de Bijlesgever Die Bij Je Past. Samen de Vakstof Herhalen en Persoonlijke Tips! Bijles Aan Huis. Voor VMBO, HAVO, VWO én gymnasium. ">
        <meta name="keywords" content="bijles, begeleiding, wiskunde c, wiskunde, haarlem, aan huis, vmbo, havo, vwo, gymnasium, omegabijles, haarlem-noord"/>


        <title>Bijles Wiskunde C in Haarlem - Omegabijles</title>

    @endif

    <?php
    }
    if(isset($bloemendaalPermalink)){
    ?>

    <script type="application/ld+json" xml="space">// <![CDATA[
    {
    "@context": "http://schema.org",
    "@id": "https://www.omegabijles.nl/#Organization",
    "@type": "Organization",
    "name": "omegabijles",
    "sameAs": "https://www.trustpilot.com/review/omegabijles.nl"
    ,"aggregateRating": {
    "@type": "AggregateRating",
    "bestRating": "5",
    "worstRating": "1",
    "ratingValue": "5",
    "reviewCount": "10",
    "url":""
    }
    }
    // ]]></script>

    @if($bloemendaalPermalink == 'aardrijkskunde')
        <meta name="description" content="Gemakkelijk Bijles {{$subject}} Aan Huis vinden in Bloemendaal of omgeving. Vind de Bijlesgever Die Bij Je Past. Samen de Vakstof Herhalen en Persoonlijke Tips! Bijles Aan Huis. Voor VMBO, HAVO, VWO én gymnasium. ">
        <meta name="keywords" content="bijles, begeleiding, {{$subject}}, bloemendaal, overveen, aan huis, vmbo, havo, vwo, gymnasium, omegabijles">


        <title>Bijles {{$subject}} in Bloemendaal - Omegabijles </title>

    @elseif($bloemendaalPermalink == 'biologie')
        <meta name="description" content="Gemakkelijk Bijles {{$subject}} Aan Huis vinden in Bloemendaal of omgeving. Vind de Bijlesgever Die Bij Je Past. Samen de Vakstof Herhalen en Persoonlijke Tips! Bijles Aan Huis. Voor VMBO, HAVO, VWO én gymnasium. ">
        <meta name="keywords" content="bijles, begeleiding, {{$subject}}, bloemendaal, overveen, aan huis, vmbo, havo, vwo, gymnasium, omegabijles">


        <title>Bijles {{$subject}} in Bloemendaal - Omegabijles </title>

    @elseif($bloemendaalPermalink == 'duits')
        <meta name="description" content="Gemakkelijk Bijles {{$subject}} Aan Huis vinden in Bloemendaal of omgeving. Vind de Bijlesgever Die Bij Je Past. Samen de Vakstof Herhalen en Persoonlijke Tips! Bijles Aan Huis. Voor VMBO, HAVO, VWO én gymnasium. ">
        <meta name="keywords" content="bijles, begeleiding, {{$subject}}, bloemendaal, overveen, aan huis, vmbo, havo, vwo, gymnasium, omegabijles">


        <title>Bijles {{$subject}} in Bloemendaal - Omegabijles </title>

    @elseif($bloemendaalPermalink == 'economie')
        <meta name="description" content="Gemakkelijk Bijles {{$subject}} Aan Huis vinden in Bloemendaal of omgeving. Vind de Bijlesgever Die Bij Je Past. Samen de Vakstof Herhalen en Persoonlijke Tips! Bijles Aan Huis. Voor VMBO, HAVO, VWO én gymnasium. ">
        <meta name="keywords" content="bijles, begeleiding, {{$subject}}, bloemendaal, overveen, aan huis, vmbo, havo, vwo, gymnasium, omegabijles">


        <title>Bijles {{$subject}} in Bloemendaal - Omegabijles </title>

    @elseif($bloemendaalPermalink == 'engels')
        <meta name="description" content="Gemakkelijk Bijles {{$subject}} Aan Huis vinden in Bloemendaal of omgeving. Vind de Bijlesgever Die Bij Je Past. Samen de Vakstof Herhalen en Persoonlijke Tips! Bijles Aan Huis. Voor VMBO, HAVO, VWO én gymnasium. ">
        <meta name="keywords" content="bijles, begeleiding, {{$subject}}, bloemendaal, overveen, aan huis, vmbo, havo, vwo, gymnasium, omegabijles">


        <title>Bijles {{$subject}} in Bloemendaal - Omegabijles </title>

    @elseif($bloemendaalPermalink == 'filosofie')
        <meta name="description" content="Gemakkelijk Bijles {{$subject}} Aan Huis vinden in Bloemendaal of omgeving. Vind de Bijlesgever Die Bij Je Past. Samen de Vakstof Herhalen en Persoonlijke Tips! Bijles Aan Huis. Voor VMBO, HAVO, VWO én gymnasium. ">
        <meta name="keywords" content="bijles, begeleiding, {{$subject}}, bloemendaal, overveen, aan huis, vmbo, havo, vwo, gymnasium, omegabijles">


        <title>Bijles {{$subject}} in Bloemendaal - Omegabijles </title>

    @elseif($bloemendaalPermalink == 'frans')
        <meta name="description" content="Gemakkelijk Bijles {{$subject}} Aan Huis vinden in Bloemendaal of omgeving. Vind de Bijlesgever Die Bij Je Past. Samen de Vakstof Herhalen en Persoonlijke Tips! Bijles Aan Huis. Voor VMBO, HAVO, VWO én gymnasium. ">
        <meta name="keywords" content="bijles, begeleiding, {{$subject}}, bloemendaal, overveen, aan huis, vmbo, havo, vwo, gymnasium, omegabijles">


        <title>Bijles {{$subject}} in Bloemendaal - Omegabijles </title>

    @elseif($bloemendaalPermalink == 'geschiedenis')
        <meta name="description" content="Gemakkelijk Bijles {{$subject}} Aan Huis vinden in Bloemendaal of omgeving. Vind de Bijlesgever Die Bij Je Past. Samen de Vakstof Herhalen en Persoonlijke Tips! Bijles Aan Huis. Voor VMBO, HAVO, VWO én gymnasium. ">
        <meta name="keywords" content="bijles, begeleiding, {{$subject}}, bloemendaal, overveen, aan huis, vmbo, havo, vwo, gymnasium, omegabijles">


        <title>Bijles {{$subject}} in Bloemendaal - Omegabijles </title>

    @elseif($bloemendaalPermalink == 'grieks')
        <meta name="description" content="Gemakkelijk Bijles {{$subject}} Aan Huis vinden in Bloemendaal of omgeving. Vind de Bijlesgever Die Bij Je Past. Samen de Vakstof Herhalen en Persoonlijke Tips! Bijles Aan Huis. Voor VMBO, HAVO, VWO én gymnasium. ">
        <meta name="keywords" content="bijles, begeleiding, {{$subject}}, bloemendaal, overveen, aan huis, vmbo, havo, vwo, gymnasium, omegabijles">


        <title>Bijles {{$subject}} in Bloemendaal - Omegabijles </title>

    @elseif($bloemendaalPermalink == 'latijn')
        <meta name="description" content="Gemakkelijk Bijles {{$subject}} Aan Huis vinden in Bloemendaal of omgeving. Vind de Bijlesgever Die Bij Je Past. Samen de Vakstof Herhalen en Persoonlijke Tips! Bijles Aan Huis. Voor VMBO, HAVO, VWO én gymnasium. ">
        <meta name="keywords" content="bijles, begeleiding, {{$subject}}, bloemendaal, overveen, aan huis, vmbo, havo, vwo, gymnasium, omegabijles">


        <title>Bijles {{$subject}} in Bloemendaal - Omegabijles </title>

    @elseif($bloemendaalPermalink == 'm&o')
        <meta name="description" content="Gemakkelijk Bijles M&O Aan Huis vinden in Bloemendaal of omgeving. Vind de Bijlesgever Die Bij Je Past. Samen de Vakstof Herhalen en Persoonlijke Tips! Bijles Aan Huis. Voor VMBO, HAVO, VWO én gymnasium. ">
        <meta name="keywords" content="bijles, begeleiding, M&O, bloemendaal, overveen, aan huis, vmbo, havo, vwo, gymnasium, omegabijles">


        <title>Bijles M&O in Bloemendaal - Omegabijles </title>

    @elseif($bloemendaalPermalink == 'maatschappijleer')
        <meta name="description" content="Gemakkelijk Bijles {{$subject}} Aan Huis vinden in Bloemendaal of omgeving. Vind de Bijlesgever Die Bij Je Past. Samen de Vakstof Herhalen en Persoonlijke Tips! Bijles Aan Huis. Voor VMBO, HAVO, VWO én gymnasium. ">
        <meta name="keywords" content="bijles, begeleiding, {{$subject}}, bloemendaal, overveen, aan huis, vmbo, havo, vwo, gymnasium, omegabijles">


        <title>Bijles {{$subject}} in Bloemendaal - Omegabijles </title>

    @elseif($bloemendaalPermalink == 'natuurkunde')
        <meta name="description" content="Gemakkelijk Bijles {{$subject}} Aan Huis vinden in Bloemendaal of omgeving. Vind de Bijlesgever Die Bij Je Past. Samen de Vakstof Herhalen en Persoonlijke Tips! Bijles Aan Huis. Voor VMBO, HAVO, VWO én gymnasium. ">
        <meta name="keywords" content="bijles, begeleiding, {{$subject}}, bloemendaal, overveen, aan huis, vmbo, havo, vwo, gymnasium, omegabijles">


        <title>Bijles {{$subject}} in Bloemendaal - Omegabijles </title>

    @elseif($bloemendaalPermalink == 'nederlands')
        <meta name="description" content="Gemakkelijk Bijles {{$subject}} Aan Huis vinden in Bloemendaal of omgeving. Vind de Bijlesgever Die Bij Je Past. Samen de Vakstof Herhalen en Persoonlijke Tips! Bijles Aan Huis. Voor VMBO, HAVO, VWO én gymnasium. ">
        <meta name="keywords" content="bijles, begeleiding, {{$subject}}, bloemendaal, overveen, aan huis, vmbo, havo, vwo, gymnasium, omegabijles">


        <title>Bijles {{$subject}} in Bloemendaal - Omegabijles </title>

    @elseif($bloemendaalPermalink == 'nlt')
        <meta name="description" content="Gemakkelijk Bijles NLT Aan Huis vinden in Bloemendaal of omgeving. Vind de Bijlesgever Die Bij Je Past. Samen de Vakstof Herhalen en Persoonlijke Tips! Bijles Aan Huis. Voor VMBO, HAVO, VWO én gymnasium. ">
        <meta name="keywords" content="bijles, begeleiding, NLT, bloemendaal, overveen, aan huis, vmbo, havo, vwo, gymnasium, omegabijles">


        <title>Bijles NLT in Bloemendaal - Omegabijles </title>

    @elseif($bloemendaalPermalink == 'scheikunde')
        <meta name="description" content="Gemakkelijk Bijles {{$subject}} Aan Huis vinden in Bloemendaal of omgeving. Vind de Bijlesgever Die Bij Je Past. Samen de Vakstof Herhalen en Persoonlijke Tips! Bijles Aan Huis. Voor VMBO, HAVO, VWO én gymnasium. ">
        <meta name="keywords" content="bijles, begeleiding, {{$subject}}, bloemendaal, overveen, aan huis, vmbo, havo, vwo, gymnasium, omegabijles">


        <title>Bijles {{$subject}} in Bloemendaal - Omegabijles </title>

    @elseif($bloemendaalPermalink == 'wiskundea')
        <meta name="description" content="Gemakkelijk Bijles Wiskunde A Aan Huis vinden in Bloemendaal of omgeving. Vind de Bijlesgever Die Bij Je Past. Samen de Vakstof Herhalen en Persoonlijke Tips! Bijles Aan Huis. Voor VMBO, HAVO, VWO én gymnasium. ">
        <meta name="keywords" content="bijles, begeleiding, Wiskunde A, bloemendaal, overveen, aan huis, vmbo, havo, vwo, gymnasium, omegabijles">


        <title>Bijles Wiskunde A in Bloemendaal - Omegabijles </title>

    @elseif($bloemendaalPermalink == 'wiskundeb')
        <meta name="description" content="Gemakkelijk Bijles Wiskunde B Aan Huis vinden in Bloemendaal of omgeving. Vind de Bijlesgever Die Bij Je Past. Samen de Vakstof Herhalen en Persoonlijke Tips! Bijles Aan Huis. Voor VMBO, HAVO, VWO én gymnasium. ">
        <meta name="keywords" content="bijles, begeleiding, Wiskunde B, bloemendaal, overveen, aan huis, vmbo, havo, vwo, gymnasium, omegabijles">


        <title>Bijles Wiskunde B in Bloemendaal - Omegabijles </title>

    @elseif($bloemendaalPermalink == 'wiskundeonderbouw')
        <meta name="description" content="Gemakkelijk Bijles wiskunde onderbouw Aan Huis vinden in Bloemendaal of omgeving. Vind de Bijlesgever Die Bij Je Past. Samen de Vakstof Herhalen en Persoonlijke Tips! Bijles Aan Huis. Voor VMBO, HAVO, VWO én gymnasium. ">
        <meta name="keywords" content="bijles, begeleiding, wiskunde onderbouw, bloemendaal, overveen, aan huis, vmbo, havo, vwo, gymnasium, omegabijles">


        <title>Bijles Wiskunde in Bloemendaal - Omegabijles </title>

    @elseif($bloemendaalPermalink == 'wiskundec')
        <meta name="description" content="Gemakkelijk Bijles Wiskunde C Aan Huis vinden in Bloemendaal of omgeving. Vind de Bijlesgever Die Bij Je Past. Samen de Vakstof Herhalen en Persoonlijke Tips! Bijles Aan Huis. Voor VMBO, HAVO, VWO én gymnasium. ">
        <meta name="keywords" content="bijles, begeleiding, Wiskunde C, bloemendaal, overveen, aan huis, vmbo, havo, vwo, gymnasium, omegabijles">


        <title>Bijles Wiskunde C in Bloemendaal - Omegabijles </title>

    @endif


    <?php
    }
    if(isset($velsenPermalink)){
    ?>

    <script type="application/ld+json" xml="space">// <![CDATA[
    {
    "@context": "http://schema.org",
    "@id": "https://www.omegabijles.nl/#Organization",
    "@type": "Organization",
    "name": "omegabijles",
    "sameAs": "https://www.trustpilot.com/review/omegabijles.nl"
    ,"aggregateRating": {
    "@type": "AggregateRating",
    "bestRating": "5",
    "worstRating": "1",
    "ratingValue": "5",
    "reviewCount": "10",
    "url":""
    }
    }
    // ]]></script>

    @if($velsenPermalink == 'aardrijkskunde')
        <meta name="description" content="Gemakkelijk Bijles {{$subject}} Aan Huis vinden in Velsen of omgeving. Vind de Bijlesgever Die Bij Je Past. Samen de Vakstof Herhalen en Persoonlijke Tips! Bijles Aan Huis. Voor VMBO, HAVO, VWO én gymnasium. ">
        <meta name="keywords" content="bijles, begeleiding, {{$subject}}, velsen, velserbroek, ijmuiden, velsen-zuid, driehuis, santpoort, santpoort-zuid, santpoort-noord, beverwijk, heemskerk, aan huis, vmbo, havo, vwo, gymnasium, omegabijles">

        <title>Bijles {{$subject}} in Velsen - Omegabijles </title>

    @elseif($velsenPermalink == 'biologie')
        <meta name="description" content="Gemakkelijk Bijles {{$subject}} Aan Huis vinden in Velsen of omgeving. Vind de Bijlesgever Die Bij Je Past. Samen de Vakstof Herhalen en Persoonlijke Tips! Bijles Aan Huis. Voor VMBO, HAVO, VWO én gymnasium. ">
        <meta name="keywords" content="bijles, begeleiding, {{$subject}}, velsen, velserbroek, ijmuiden, velsen-zuid, driehuis, santpoort, santpoort-zuid, santpoort-noord, beverwijk, heemskerk, aan huis, vmbo, havo, vwo, gymnasium, omegabijles">

        <title>Bijles {{$subject}} in Velsen - Omegabijles </title>

    @elseif($velsenPermalink == 'duits')
        <meta name="description" content="Gemakkelijk Bijles {{$subject}} Aan Huis vinden in Velsen of omgeving. Vind de Bijlesgever Die Bij Je Past. Samen de Vakstof Herhalen en Persoonlijke Tips! Bijles Aan Huis. Voor VMBO, HAVO, VWO én gymnasium. ">
        <meta name="keywords" content="bijles, begeleiding, {{$subject}}, velsen, velserbroek, ijmuiden, velsen-zuid, driehuis, santpoort, santpoort-zuid, santpoort-noord, beverwijk, heemskerk, aan huis, vmbo, havo, vwo, gymnasium, omegabijles">

        <title>Bijles {{$subject}} in Velsen - Omegabijles </title>

    @elseif($velsenPermalink == 'economie')
        <meta name="description" content="Gemakkelijk Bijles {{$subject}} Aan Huis vinden in Velsen of omgeving. Vind de Bijlesgever Die Bij Je Past. Samen de Vakstof Herhalen en Persoonlijke Tips! Bijles Aan Huis. Voor VMBO, HAVO, VWO én gymnasium. ">
        <meta name="keywords" content="bijles, begeleiding, {{$subject}}, velsen, velserbroek, ijmuiden, velsen-zuid, driehuis, santpoort, santpoort-zuid, santpoort-noord, beverwijk, heemskerk, aan huis, vmbo, havo, vwo, gymnasium, omegabijles">

        <title>Bijles {{$subject}} in Velsen - Omegabijles </title>

    @elseif($velsenPermalink == 'engels')
        <meta name="description" content="Gemakkelijk Bijles {{$subject}} Aan Huis vinden in Velsen of omgeving. Vind de Bijlesgever Die Bij Je Past. Samen de Vakstof Herhalen en Persoonlijke Tips! Bijles Aan Huis. Voor VMBO, HAVO, VWO én gymnasium. ">
        <meta name="keywords" content="bijles, begeleiding, {{$subject}}, velsen, velserbroek, ijmuiden, velsen-zuid, driehuis, santpoort, santpoort-zuid, santpoort-noord, beverwijk, heemskerk, aan huis, vmbo, havo, vwo, gymnasium, omegabijles">

        <title>Bijles {{$subject}} in Velsen - Omegabijles </title>

    @elseif($velsenPermalink == 'filosofie')
        <meta name="description" content="Gemakkelijk Bijles {{$subject}} Aan Huis vinden in Velsen of omgeving. Vind de Bijlesgever Die Bij Je Past. Samen de Vakstof Herhalen en Persoonlijke Tips! Bijles Aan Huis. Voor VMBO, HAVO, VWO én gymnasium. ">
        <meta name="keywords" content="bijles, begeleiding, {{$subject}}, velsen, velserbroek, ijmuiden, velsen-zuid, driehuis, santpoort, santpoort-zuid, santpoort-noord, beverwijk, heemskerk, aan huis, vmbo, havo, vwo, gymnasium, omegabijles">

        <title>Bijles {{$subject}} in Velsen - Omegabijles </title>

    @elseif($velsenPermalink == 'frans')
        <meta name="description" content="Gemakkelijk Bijles {{$subject}} Aan Huis vinden in Velsen of omgeving. Vind de Bijlesgever Die Bij Je Past. Samen de Vakstof Herhalen en Persoonlijke Tips! Bijles Aan Huis. Voor VMBO, HAVO, VWO én gymnasium. ">
        <meta name="keywords" content="bijles, begeleiding, {{$subject}}, velsen, velserbroek, ijmuiden, velsen-zuid, driehuis, santpoort, santpoort-zuid, santpoort-noord, beverwijk, heemskerk, aan huis, vmbo, havo, vwo, gymnasium, omegabijles">

        <title>Bijles {{$subject}} in Velsen - Omegabijles </title>

    @elseif($velsenPermalink == 'geschiedenis')
        <meta name="description" content="Gemakkelijk Bijles {{$subject}} Aan Huis vinden in Velsen of omgeving. Vind de Bijlesgever Die Bij Je Past. Samen de Vakstof Herhalen en Persoonlijke Tips! Bijles Aan Huis. Voor VMBO, HAVO, VWO én gymnasium. ">
        <meta name="keywords" content="bijles, begeleiding, {{$subject}}, velsen, velserbroek, ijmuiden, velsen-zuid, driehuis, santpoort, santpoort-zuid, santpoort-noord, beverwijk, heemskerk, aan huis, vmbo, havo, vwo, gymnasium, omegabijles">

        <title>Bijles {{$subject}} in Velsen - Omegabijles </title>

    @elseif($velsenPermalink == 'grieks')
        <meta name="description" content="Gemakkelijk Bijles {{$subject}} Aan Huis vinden in Velsen of omgeving. Vind de Bijlesgever Die Bij Je Past. Samen de Vakstof Herhalen en Persoonlijke Tips! Bijles Aan Huis. Voor VMBO, HAVO, VWO én gymnasium. ">
        <meta name="keywords" content="bijles, begeleiding, {{$subject}}, velsen, velserbroek, ijmuiden, velsen-zuid, driehuis, santpoort, santpoort-zuid, santpoort-noord, beverwijk, heemskerk, aan huis, vmbo, havo, vwo, gymnasium, omegabijles">

        <title>Bijles {{$subject}} in Velsen - Omegabijles </title>

    @elseif($velsenPermalink == 'latijn')
        <meta name="description" content="Gemakkelijk Bijles {{$subject}} Aan Huis vinden in Velsen of omgeving. Vind de Bijlesgever Die Bij Je Past. Samen de Vakstof Herhalen en Persoonlijke Tips! Bijles Aan Huis. Voor VMBO, HAVO, VWO én gymnasium. ">
        <meta name="keywords" content="bijles, begeleiding, {{$subject}}, velsen, velserbroek, ijmuiden, velsen-zuid, driehuis, santpoort, santpoort-zuid, santpoort-noord, beverwijk, heemskerk, aan huis, vmbo, havo, vwo, gymnasium, omegabijles">

        <title>Bijles {{$subject}} in Velsen - Omegabijles </title>

    @elseif($velsenPermalink == 'm&o')
        <meta name="description" content="Gemakkelijk Bijles M&O Aan Huis vinden in Velsen of omgeving. Vind de Bijlesgever Die Bij Je Past. Samen de Vakstof Herhalen en Persoonlijke Tips! Bijles Aan Huis. Voor VMBO, HAVO, VWO én gymnasium. ">
        <meta name="keywords" content="bijles, begeleiding, M&O, velsen, velserbroek, ijmuiden, velsen-zuid, driehuis, santpoort, santpoort-zuid, santpoort-noord, beverwijk, heemskerk, aan huis, vmbo, havo, vwo, gymnasium, omegabijles">

        <title>Bijles M&O in Velsen - Omegabijles </title>

    @elseif($velsenPermalink == 'maatschappijleer')
        <meta name="description" content="Gemakkelijk Bijles {{$subject}} Aan Huis vinden in Velsen of omgeving. Vind de Bijlesgever Die Bij Je Past. Samen de Vakstof Herhalen en Persoonlijke Tips! Bijles Aan Huis. Voor VMBO, HAVO, VWO én gymnasium. ">
        <meta name="keywords" content="bijles, begeleiding, {{$subject}}, velsen, velserbroek, ijmuiden, velsen-zuid, driehuis, santpoort, santpoort-zuid, santpoort-noord, beverwijk, heemskerk, aan huis, vmbo, havo, vwo, gymnasium, omegabijles">

        <title>Bijles {{$subject}} in Velsen - Omegabijles </title>

    @elseif($velsenPermalink == 'natuurkunde')
        <meta name="description" content="Gemakkelijk Bijles {{$subject}} Aan Huis vinden in Velsen of omgeving. Vind de Bijlesgever Die Bij Je Past. Samen de Vakstof Herhalen en Persoonlijke Tips! Bijles Aan Huis. Voor VMBO, HAVO, VWO én gymnasium. ">
        <meta name="keywords" content="bijles, begeleiding, {{$subject}}, velsen, velserbroek, ijmuiden, velsen-zuid, driehuis, santpoort, santpoort-zuid, santpoort-noord, beverwijk, heemskerk, aan huis, vmbo, havo, vwo, gymnasium, omegabijles">

        <title>Bijles {{$subject}} in Velsen - Omegabijles </title>

    @elseif($velsenPermalink == 'nederlands')
        <meta name="description" content="Gemakkelijk Bijles {{$subject}} Aan Huis vinden in Velsen of omgeving. Vind de Bijlesgever Die Bij Je Past. Samen de Vakstof Herhalen en Persoonlijke Tips! Bijles Aan Huis. Voor VMBO, HAVO, VWO én gymnasium. ">
        <meta name="keywords" content="bijles, begeleiding, {{$subject}}, velsen, velserbroek, ijmuiden, velsen-zuid, driehuis, santpoort, santpoort-zuid, santpoort-noord, beverwijk, heemskerk, aan huis, vmbo, havo, vwo, gymnasium, omegabijles">

        <title>Bijles {{$subject}} in Velsen - Omegabijles </title>

    @elseif($velsenPermalink == 'nlt')
        <meta name="description" content="Gemakkelijk Bijles NLT Aan Huis vinden in Velsen of omgeving. Vind de Bijlesgever Die Bij Je Past. Samen de Vakstof Herhalen en Persoonlijke Tips! Bijles Aan Huis. Voor VMBO, HAVO, VWO én gymnasium. ">
        <meta name="keywords" content="bijles, begeleiding, NLT, velsen, velserbroek, ijmuiden, velsen-zuid, driehuis, santpoort, santpoort-zuid, santpoort-noord, beverwijk, heemskerk, aan huis, vmbo, havo, vwo, gymnasium, omegabijles">

        <title>Bijles NLT in Velsen - Omegabijles </title>

    @elseif($velsenPermalink == 'scheikunde')
        <meta name="description" content="Gemakkelijk Bijles {{$subject}} Aan Huis vinden in Velsen of omgeving. Vind de Bijlesgever Die Bij Je Past. Samen de Vakstof Herhalen en Persoonlijke Tips! Bijles Aan Huis. Voor VMBO, HAVO, VWO én gymnasium. ">
        <meta name="keywords" content="bijles, begeleiding, {{$subject}}, velsen, velserbroek, ijmuiden, velsen-zuid, driehuis, santpoort, santpoort-zuid, santpoort-noord, beverwijk, heemskerk, aan huis, vmbo, havo, vwo, gymnasium, omegabijles">

        <title>Bijles {{$subject}} in Velsen - Omegabijles </title>

    @elseif($velsenPermalink == 'wiskundea')
        <meta name="description" content="Gemakkelijk Bijles Wiskunde A Aan Huis vinden in Velsen of omgeving. Vind de Bijlesgever Die Bij Je Past. Samen de Vakstof Herhalen en Persoonlijke Tips! Bijles Aan Huis. Voor VMBO, HAVO, VWO én gymnasium. ">
        <meta name="keywords" content="bijles, begeleiding, Wiskunde A, wiskunde, velsen, velserbroek, ijmuiden, velsen-zuid, driehuis, santpoort, santpoort-zuid, santpoort-noord, beverwijk, heemskerk, aan huis, vmbo, havo, vwo, gymnasium, omegabijles">

        <title>Bijles Wiskunde A in Velsen - Omegabijles </title>

    @elseif($velsenPermalink == 'wiskundeb')
        <meta name="description" content="Gemakkelijk Bijles Wiskunde B Aan Huis vinden in Velsen of omgeving. Vind de Bijlesgever Die Bij Je Past. Samen de Vakstof Herhalen en Persoonlijke Tips! Bijles Aan Huis. Voor VMBO, HAVO, VWO én gymnasium. ">
        <meta name="keywords" content="bijles, begeleiding, Wiskunde B, wiskunde, velsen, velserbroek, ijmuiden, velsen-zuid, driehuis, santpoort, santpoort-zuid, santpoort-noord, beverwijk, heemskerk, aan huis, vmbo, havo, vwo, gymnasium, omegabijles">

        <title>Bijles Wiskunde B in Velsen - Omegabijles </title>

    @elseif($velsenPermalink == 'wiskundeonderbouw')
        <meta name="description" content="Gemakkelijk Bijles wiskunde onderbouw Aan Huis vinden in Velsen of omgeving. Vind de Bijlesgever Die Bij Je Past. Samen de Vakstof Herhalen en Persoonlijke Tips! Bijles Aan Huis. Voor VMBO, HAVO, VWO én gymnasium. ">
        <meta name="keywords" content="bijles, begeleiding, wiskunde onderbouw, wiskunde, velsen, velserbroek, ijmuiden, velsen-zuid, driehuis, santpoort, santpoort-zuid, santpoort-noord, beverwijk, heemskerk, aan huis, vmbo, havo, vwo, gymnasium, omegabijles">

        <title>Bijles Wiskunde in Velsen - Omegabijles </title>

    @elseif($velsenPermalink == 'wiskundec')
        <meta name="description" content="Gemakkelijk Bijles Wiskunde C Aan Huis vinden in Velsen of omgeving. Vind de Bijlesgever Die Bij Je Past. Samen de Vakstof Herhalen en Persoonlijke Tips! Bijles Aan Huis. Voor VMBO, HAVO, VWO én gymnasium. ">
        <meta name="keywords" content="bijles, begeleiding, Wiskunde C, wiskunde, velsen, velserbroek, ijmuiden, velsen-zuid, driehuis, santpoort, santpoort-zuid, santpoort-noord, beverwijk, heemskerk, aan huis, vmbo, havo, vwo, gymnasium, omegabijles">

        <title>Bijles Wiskunde C in Velsen - Omegabijles </title>

    @endif


    <?php
    }
    ?>



@endsection

@section('css')
<link rel="stylesheet" href="{{ url('public/frontEnd/css/searchprofile.css') }}">
<style>
    footer{
        background-image: linear-gradient(#3555e0,#0171ff);
        padding: 100px 50px 5px;
        text-align: left;
        list-style:none;
    }

    footer a, footer li{
        color: #fff !important;
    }

    footer h3{
        font-size: 1.9rem;
    }

    footer ul li {
    list-style: none;
    }


    @media (min-width: 1500px){
      footer .container {
        width: 100%;
        max-width: 1440px;
    }
</style>
@endsection

@section('content')
          <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGQP5ZlgVr-tUIc2inBMeZgO7iZWkOuv8&libraries=places"
        type="text/javascript"></script>
        <section class="search_profile">
            <h2 class="dpadding bg2">Jouw potentiële bijlesgevers (<span id="totaltutor">{{ $tutorinfo != null ? count($tutorinfo): 0 }}</span>)</h2>
             <div class="alert alert-success" id="exitsuccess" style="display:none;width:50%;margin:0px auto">Uw bericht is verzonden.</div>
            <div class="search_bar dpadding">

                <div class="row no-gutters">

                    <div class="col-4 text-center">

                        <button type="button" class="btn btn-link" id="filter">Filters</button>

                    </div>

                    <div class="col-5 drp_ctn">

                        <div class="sl">

                            Zoeken

                        </div>

                        <form class="sf">

                            <div class="form-row">

                                <div class="col-12">

                                    <label class="sr-only" for="inlineFormInputGroup">Naam bijlesgever</label>

                                    <div class="input-group mb-2">

                                        <div class="input-group-prepend">

                                            <div class="input-group-text"><img src="{{asset('public/frontEnd/img/icons/search_icon.png')}}" alt="serach"></div>

                                        </div>

                                        <input type="search" class="form-control" id="inlineFormInputGroup" onkeyup="getKeyword(this.value)" placeholder="Naam bijlesgever">

                                    </div>

                                </div>

                            </div>

                        </form>

                    </div>

                    <div class="col-3 text-right">

                        <div class="dropdown dropleft">

                            <button class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="Dropleft">

                                Sorteer <img src="{{asset('public/frontEnd/img/icons/arrow-down.svg')}}">

                            </button>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                <a class="dropdown-item" onclick="getSort('bestrate')">Best gewaardeerd</a>

                                <a class="dropdown-item" href="#" onclick="getSort('name')">Naam</a>

                                <a class="dropdown-item" href="#" onclick="getSort('priceasc')">Prijs oplopend</a>

                                <a class="dropdown-item" href="#" onclick="getSort('pricedesc')">Prijs aflopend</a>

                                <a class="dropdown-item" href="#" onclick="getSort('experience')">Ervaring</a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="dpadding search_contents">

                <div class="row">

                    <div class="col-md-4 filters text-center">
                        <form class="card filters_form" id="filter_box">
                            <div class="postcode-search-area">
                                <label for="SelectVakken" class="input_title mt-3 search-label">Mijn postcode:</label>
                                <input type="text" class="postcode-form-control" name="postcode" id="autocomplete" value="{{ isset($postcode)? $postcode: null }}" placeholder="1234AB">
                                <button type="button" class="btn btn-sm btn-tonen" onclick="getDataByPostcode(event)">Tonen</button>
                                <input type="hidden" name="checkpostcode" id="validpostcode" value="">
                            </div>
                            

                            <label for="SelectVakken" class="input_title mt-3">Vak(ken):</label>

                            <div class="form-check">

                                <input class="form-check-input" type="checkbox" onclick="getSubjects(this.value)" value="Aardrijkskunde" id="defaultCheck11" {{ isset($subject) && $subject == 'Aardrijkskunde'? 'checked':'' }}>

                                <label class="form-check-label" for="defaultCheck11">

                                    Aardrijkskunde

                                </label>

                            </div>

                            <div class="form-check">

                                <input class="form-check-input" type="checkbox" value="Biologie" onclick="getSubjects(this.value)" id="defaultCheck7" {{ isset($subject) && $subject == 'Biologie'? 'checked':'' }}>

                                <label class="form-check-label" for="defaultCheck7">

                                    Biologie

                                </label>

                            </div>

                            <div class="form-check">

                                <input class="form-check-input" type="checkbox" onclick="getSubjects(this.value)" value="Duits" id="defaultCheck16" {{ isset($subject) && $subject == 'Duits'? 'checked':'' }}>

                                <label class="form-check-label" for="defaultCheck16">

                                    Duits

                                </label>

                            </div>

                            <div class="form-check">

                                <input class="form-check-input" type="checkbox" onclick="getSubjects(this.value)" value="Economie" id="defaultCheck10" {{ isset($subject) && $subject == 'Economie'? 'checked':'' }}>

                                <label class="form-check-label" for="defaultCheck10">

                                    Economie

                                </label>

                            </div>

                            <div class="form-check">

                                <input class="form-check-input" type="checkbox" onclick="getSubjects(this.value)" value="Engels" id="defaultCheck14" {{ isset($subject) && $subject == 'Engels'? 'checked':'' }}>

                                <label class="form-check-label" for="defaultCheck14">

                                    Engels

                                </label>

                            </div>

                            <p class="underline text-left pointer mb-2" data-toggle="collapse" data-target="#demo2">Toon meer</p>

                            <div class="collapse mt-0" id="demo2">

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" onclick="getSubjects(this.value)" value="Filosofie" id="defaultCheck12" {{ isset($subject) && $subject == 'Filosofie'? 'checked':'' }}>

                                    <label class="form-check-label" for="defaultCheck12">

                                        Filosofie

                                    </label>

                                </div>

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" onclick="getSubjects(this.value)" value="Frans" id="defaultCheck15" {{ isset($subject) && $subject == 'Frans'? 'checked':'' }}>

                                    <label class="form-check-label" for="defaultCheck15">

                                        Frans

                                    </label>

                                </div>

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" onclick="getSubjects(this.value)" value="Geschiedenis" id="defaultCheck8">

                                    <label class="form-check-label" for="defaultCheck8" {{ isset($subject) && $subject == 'Geschiedenis'? 'checked':'' }}>

                                        Geschiedenis

                                    </label>

                                </div>

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" onclick="getSubjects(this.value)" value="Grieks" id="defaultCheck18" {{ isset($subject) && $subject == 'Grieks'? 'checked':'' }}>

                                    <label class="form-check-label" for="defaultCheck18">

                                        Grieks

                                    </label>

                                </div>

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" onclick="getSubjects(this.value)" value="Latijn" id="defaultCheck17" {{ isset($subject) && $subject == 'Latijn'? 'checked':'' }}>

                                    <label class="form-check-label" for="defaultCheck17">

                                        Latijn

                                    </label>

                                </div>

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" onclick="getSubjects(this.value)" value="Maatschappijleer" id="defaultCheck9" {{ isset($subject) && $subject == 'Maatschappijleer'? 'checked':'' }}>

                                    <label class="form-check-label" for="defaultCheck9">

                                        Maatschappijleer

                                    </label>

                                </div>

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" onclick="getSubjects(this.value)" value="Natuurkunde" id="defaultCheck4" {{ isset($subject) && $subject == 'Natuurkunde'? 'checked':'' }}>

                                    <label class="form-check-label" for="defaultCheck4">

                                        Natuurkunde

                                    </label>

                                </div>

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" onclick="getSubjects(this.value)" value="Nederlands" id="defaultCheck13" {{ isset($subject) && $subject == 'Nederlands'? 'checked':'' }}>

                                    <label class="form-check-label" for="defaultCheck13">

                                        Nederlands

                                    </label>

                                </div>

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" onclick="getSubjects(this.value)" value="NLT" id="defaultCheck6" {{ isset($subject) && $subject == 'NLT'? 'checked':'' }}>

                                    <label class="form-check-label" for="defaultCheck6">

                                        NLT

                                    </label>

                                </div>

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" onclick="getSubjects(this.value)" value="Scheikunde" id="defaultCheck5" {{ isset($subject) && $subject == 'Scheikunde'? 'checked':'' }}>

                                    <label class="form-check-label" for="defaultCheck5">

                                        Scheikunde

                                    </label>

                                </div>

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" onclick="getSubjects(this.value)" value="Wiskunde (onderbouw)" id="defaultCheck1" {{ isset($subject) && $subject == 'Wiskundeonderbouw'? 'checked':'' }}>

                                    <label class="form-check-label" for="defaultCheck1">

                                        Wiskunde (onderbouw)

                                    </label>

                                </div>

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" onclick="getSubjects(this.value)" value="Wiskunde A" id="defaultCheck1" {{ isset($subject) && $subject == 'Wiskundea'? 'checked':'' }}>

                                    <label class="form-check-label" for="defaultCheck1">

                                        Wiskunde A

                                    </label>

                                </div>

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" onclick="getSubjects(this.value)" value="Wiskunde B" id="defaultCheck2" {{ isset($subject) && $subject == 'Wiskundeb'? 'checked':'' }}>

                                    <label class="form-check-label" for="defaultCheck2">

                                        Wiskunde B

                                    </label>

                                </div>

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" onclick="getSubjects(this.value)" value="Wiskunde C" id="defaultCheck3" {{ isset($subject) && $subject == 'Wiskundec'? 'checked':'' }}>

                                    <label class="form-check-label" for="defaultCheck3">

                                        Wiskunde C

                                    </label>

                                </div>

                            </div>

                            <div class="form-group">

                                <label for="SelectVakken" class="input_title">Ik zit in klas:</label>

                                <select class="form-control custom-select" id="SelectVakken" onchange="getClasses(this.value)" style="    margin-top: 20px;">

                                    <option value="">Maakt niet uit</option>

                                    <?php for($i=1; $i < 7; $i++){ ?>

                                    <option value="{{ $i }}">Klas {{ $i }}</option>

                                    <?php } ?>

                                    

                                </select>

                            </div>

                            <div class="form-group">

                                <label for="SelectVakken" class="input_title">Ik wil bijles van een:</label>

                                <select class="form-control custom-select" id="SelectVakken" onchange="getTutorType(this.value)">

                                    <option value="1">Een leerling</option>

                                    <option value="2">Een oud-leerling/student</option>

                                    <option selected="selected" value=''>Maakt niet uit</option>

                                </select>

                            </div>

                            <div class="form-group">

                                <label for="SelectVakken" class="input_title">Ervaring:</label>

                                <select class="form-control custom-select" id="SelectVakken" onchange="getExperience(this.value)">

                                    <option value="3">Al meer dan 3 leerlingen bijles gegeven</option>

                                    <option value="2">Al 1-2 leerlingen bijles gegeven</option>

                                    <option value="" selected="selected">Maakt niet uit</option>

                                </select>

                            </div>

                            <div class="form-group">

                                <label for="SelectVakken" class="input_title">Uurtarief:</label>

                                <select class="form-control custom-select" id="SelectVakken" onchange="getPrice(this.value)">

                                    <option value="1">€15,- (leerling)</option>

                                    <option value="2">€21,- (oud-leerling/student)</option>

                                    <option selected="selected" value="">Maakt niet uit</option>

                                </select>

                            </div>

                            <label for="SelectVakken" class="input_title mt-4">Beschikbaarheid:</label>

                            <div class="form-check">

                                    <input class="form-check-input" type="checkbox" value="ochtend" onclick="getTutorTime(this.value, 'mon')" id="defaultCheck19">

                                    <label class="form-check-label" for="defaultCheck19">

                                        Maandag: ochtend

                                    </label>

                                </div>

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" value="middag" onclick="getTutorTime(this.value, 'mon')" id="defaultCheck20">

                                    <label class="form-check-label" for="defaultCheck20">

                                        Maandag: middag

                                    </label>

                                </div>

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" value="avond" onclick="getTutorTime(this.value, 'mon')" id="defaultCheck21">

                                    <label class="form-check-label" for="defaultCheck21">

                                        Maandag: avond

                                    </label>

                                </div>

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" value="ochtend" onclick="getTutorTime(this.value, 'tue')" id="defaultCheck22">

                                    <label class="form-check-label" for="defaultCheck22">

                                        Dinsdag: ochtend

                                    </label>

                                </div>

                            <p class="underline text-left pointer mb-2" data-toggle="collapse" data-target="#demo">Toon meer</p>

                            <div class="collapse mt-0" id="demo">

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" value="middag" onclick="getTutorTime(this.value, 'tue')" id="defaultCheck23">

                                    <label class="form-check-label" for="defaultCheck23">

                                        Dinsdag: middag

                                    </label>

                                </div>

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" onclick="getTutorTime(this.value, 'tue')" value="avond" id="defaultCheck24">

                                    <label class="form-check-label" for="defaultCheck24">

                                        Dinsdag: avond

                                    </label>

                                </div>

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" onclick="getTutorTime(this.value, 'wed')" value="ochtend" id="defaultCheck25">

                                    <label class="form-check-label" for="defaultCheck25">

                                        Woensdag: ochtend

                                    </label>

                                </div>

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" value="middag" onclick="getTutorTime(this.value, 'wed')" id="defaultCheck26">

                                    <label class="form-check-label" for="defaultCheck26">

                                        Woensdag: middag

                                    </label>

                                </div>

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" onclick="getTutorTime(this.value, 'wed')" value="avond" id="defaultCheck27">

                                    <label class="form-check-label" for="defaultCheck27">

                                        Woensdag: avond

                                    </label>

                                </div>

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" value="ochtend" onclick="getTutorTime(this.value, 'thus')" id="defaultCheck28">

                                    <label class="form-check-label" for="defaultCheck28">

                                        Donderdag: ochtend

                                    </label>

                                </div>

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" onclick="getTutorTime(this.value, 'thus')" value="middag" id="defaultCheck29">

                                    <label class="form-check-label" for="defaultCheck29">

                                        Donderdag: middag

                                    </label>

                                </div>

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" value="avond" onclick="getTutorTime(this.value, 'thus')" id="defaultCheck30">

                                    <label class="form-check-label" for="defaultCheck30">

                                        Donderdag: avond

                                    </label>

                                </div>

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" onclick="getTutorTime(this.value, 'fri')" value="ochtend" id="defaultCheck31">

                                    <label class="form-check-label" for="defaultCheck31">

                                        Vrijdag: ochtend

                                    </label>

                                </div>

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" value="middag" onclick="getTutorTime(this.value, 'fri')"id="defaultCheck32">

                                    <label class="form-check-label" for="defaultCheck32">

                                        Vrijdag: middag

                                    </label>

                                </div>

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" onclick="getTutorTime(this.value, 'fri')" value="avond" id="defaultCheck33">

                                    <label class="form-check-label" for="defaultCheck33">

                                        Vrijdag: avond

                                    </label>

                                </div>

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" value="ochtend" onclick="getTutorTime(this.value, 'sat')" id="defaultCheck34">

                                    <label class="form-check-label" for="defaultCheck34">

                                        Zaterdag: ochtend

                                    </label>

                                </div>

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" onclick="getTutorTime(this.value, 'sat')" value="middag" id="defaultCheck35">

                                    <label class="form-check-label" for="defaultCheck35">

                                        Zaterdag: middag

                                    </label>

                                </div>

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" value="avond" onclick="getTutorTime(this.value, 'sat')" id="defaultCheck36">

                                    <label class="form-check-label" for="defaultCheck36">

                                        Zaterdag: avond

                                    </label>

                                </div>

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" value="ochtend" onclick="getTutorTime(this.value, 'sun')" id="defaultCheck37">

                                    <label class="form-check-label" for="defaultCheck37">

                                        Zondag: ochtend

                                    </label>

                                </div>

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" onclick="getTutorTime(this.value, 'sun')" value="middag" id="defaultCheck38">

                                    <label class="form-check-label" for="defaultCheck38">

                                        Zondag: middag

                                    </label>

                                </div>

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" value="avond" onclick="getTutorTime(this.value, 'sun')" id="defaultCheck39">

                                    <label class="form-check-label" for="defaultCheck39">

                                        Zondag: avond

                                    </label>

                                </div>

                            </div>
{{-- 
                            <div class="text-center">

                                <button type="submit" class="btn btn-primary blue">Filter</button>

                            </div> --}}

                            <div class="text-center">

                                <button type="reset" class="btn btn-link underline">Reset filters</button>

                            </div>

                        </form>

                        <div class="contact-info-area" id="contactinfo-area">
                                <div class="contact-info-text">
                                    <span class="contact-span-text-space"><strong>Waarom Omegabijles</strong></span><br>
                                    <i class="fa fa-check check-circle-contact"></i> <span class="contact-span-text">Bijles aan huis</span><br>
                                    <i class="fa fa-check check-circle-contact"></i> <span class="contact-span-text">Minimaal een 7,5 en getraind</span><br>
                                    <i class="fa fa-check check-circle-contact"></i> <span class="contact-span-text">Eerste bijles niet goed? Dan geld terug</span><br>
                                     <i class="fa fa-check check-circle-contact"></i> <span class="contact-span-text">Optimaal vooruit in kennis en zelfvertrouwen!</span><br>
                                     <i class="fa fa-check check-circle-contact"></i> <span class="contact-span-text">Persoonlijk afgestemd</span><br>
                                    <i class="fa fa-check check-circle-contact"></i> <span class="contact-span-text">Maandelijks veilig via iDeal betalen</span><br>
                                    
                                </div>
                                <div class="contact-info-text-mobile">
                                    <span class="contact-span-text-space"><strong>Waarom Omegabijles</strong></span><br>
                                    <i class="fa fa-check check-circle-contact"></i> <span class="contact-span-text">Snel en gemakkelijk bijles </span><br>
                                    <span class="contact-span-text-space">aan huis</span><br>
                                    <i class="fa fa-check check-circle-contact"></i> <span class="contact-span-text">Geselecteerd en getraind</span><br>
                                    <i class="fa fa-check check-circle-contact"></i> <span class="contact-span-text">Eerste bijles niet goed? Dan </span><br>
                                    <span class="contact-span-text-space">geld terug</span><br>
                                    
                                </div>
                                 <div class="contact-info-text-tab">
                                    <span class="contact-span-text-space"><strong>Waarom</strong></span><br>
                                    <span class="contact-span-text-space"><strong>Omegabijles</strong></span><br>
                                    <i class="fa fa-check check-circle-contact"></i> <span class="contact-span-text">Snel en</span><br>
                                    <span class="contact-span-text-space">gemakkelijk </span><br>
                                    <span class="contact-span-text-space">bijles aan</span><br>
                                    <span class="contact-span-text-space">huis</span><br>

                                     <i class="fa fa-check check-circle-contact"></i> <span class="contact-span-text">Geselecteerd </span><br>
                                     <span class="contact-span-text-space">en getraind</span><br>
                                    <i class="fa fa-check check-circle-contact"></i> <span class="contact-span-text">Eerste bijles </span><br>
                                    <span class="contact-span-text-space">niet goed? </span><br>
                                    <span class="contact-span-text-space">Dan geld</span><br>
                                    <span class="contact-span-text-space">terug</span><br>
                                </div>
                            </div>

                    </div>

                    <div class="col-md-8 results_container">

                        <div id="content">
                            {{-- <div class="single_profile" style="height:195px !important">
                                <h4 style="color:#15247B;font-weight: bold">Niet gevonden wat u zocht?</h4>
                                <p style="color:#8A91BD">Ons netwerk is groter dan hier getoond. Neem contact op voor meer informatie.
                                 </p>
                            </div>  --}}
                            
                            
                        @if(count($tutorinfo) > 0)
                        <?php $k = 0; 
                              $l = 0;
                        ?>    
                        @foreach($tutorinfo as $data)
                        <?php $k++; 
                              $l++;
                        ?>
                        <div class="single_profile" style="cursor: pointer" onclick="window.location='{{ url('/tutorprofile/') }}/{{ $data->user_id }}'">

                            <div class="row">

                                <div class="profile_img">

                                    <img src="{{asset('public/uploads')}}/{{ $data->image }}" alt="prfl img">

                                </div>

                                <div class="col">

                                    <div class="row">

                                        <div class="col">

                                            <h2 class="tutor_name">

                                  <a href="{{ url('/tutorprofile/') }}/{{ $data->user_id }}">{{ $data->firstname }}</a>

                                </h2>

                                        </div>

                                        <div class="col text-right">

                                            <h2 class="pricings">€<?php 



                                            if($data->tutor_type == 2){

                                              echo '21';  

                                            }else{

                                                echo '15';

                                            }



                                            ?>,- p/u</h2>

                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-lg-8">

                                            <div class="star_ratings">

                                              @for($i=1; $i <= round($data->avgrating); $i++)

                                                <i class="fas fa-star checked"></i>

                                              @endfor

                                              @for($i = round($data->avgrating) + 1; $i <= 5; $i++)

                                                <i class="fas fa-star"></i>

                                              @endfor

                                            </div>

                                            <address>{{ $data->coursename }}</address>

                                            {{ substr(nl2br($data->Briefintroduction), 0, 100) }}...

                                        </div>

                                        <div class="col-lg-4 justify_end">

                                            <a class="btn btn-primary btn-lg" href="#">Bekijk profiel <img src="{{asset('public/frontEnd/img/icons/arrow-right.svg')}}" alt="arrow-right"></a>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>
                        <?php
                            if($k == 4) {
                        ?>
                        <img src="{{ URL::to('/public/frontEnd/img/infosection.png') }}" class="img-fluid needhelpimg" style="cursor: pointer;" onclick="window.location='{{ url('/contact') }}'">
                        <?php 
                        $k = 0;
                        }elseif($k != 4 && $l == count($tutorinfo)){ ?>
                        <img src="{{ URL::to('/public/frontEnd/img/infosection.png') }}" class="img-fluid needhelpimg" style="cursor: pointer;" onclick="window.location='{{ url('/contact') }}'">
                        <?php } ?>
                        @endforeach

                        @else
                        <img src="{{ URL::to('/public/frontEnd/img/largerneedhelp.PNG') }}" class="img-fluid" onclick="window.location='{{ url('/contact') }}'" style="cursor: pointer;"> 
                        @endif      
                        
                        </div>

                        <!-- Holds your page information!! -->

                        <input type="hidden" id="page" value="1" />

                        <div id="total">

                            <input type="hidden" id="max_page" value="{{ $tutorinfo != null ? count($tutorinfo): 0 }}" />

                        </div>




                        



                        <!-- Your End of page message. Hidden by default -->

                       

                        <div id="end_of_page" style="text-align:center;display:none">

                            <hr/>
                            <span>You've reached the end of the feed.</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="modal exit-modal fade">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-body">
                    <button type="button" class="close pull-right" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    <h3 class="exit-modal-h3">Voordat u gaat...</h3>
                    <span class="exit-modal-span">Is er iets onduidelijk of toch liever persoonlijk advies?</span><br>
                    <span class="exit-modal-span">Wij denken graag met u mee om tot de beste oplossing voor uw kind te komen</span><br>
                    <span class="exit-modal-span">Vult u het formulier in en wij nemen contact met u op:</span><br>
                    <div class="col-md-6" style="float:left;margin-top:15px;">
                        <h5 class="exit-modal-h5">Bel mij terug (binnen 24 uur):</h5>
                        <label class="exit-label">Uw naam</label>
                        <input type="text" class="exit-modal-input" id="exit-name" style="margin-bottom: 5px;">
                        <label class="exit-label">Uw telefoonnummer</label>
                        <input type="text" class="exit-modal-input" id="exit-phone">

                        <button type="submit" class="btn my-btn" onclick="sendEmail(event)">Bel mij terug</button>
                    </div>
                    <div class="col-md-6" style="float:right;">
                        <img src="{{ URL::to('/public/frontEnd/img/exitimage.png') }}" class="img-fluid">
                    </div>
                  </div>
                </div>
            </div>
        </div>
<!--New Text Box -->
<div class="container content" style="padding: 3em 1em 3em;max-width: 100%;border-top: 1px solid rgba(0,0,0,0.20);border-bottom: 1px solid rgba(0,0,0,0.20);">
<div  style="width: calc((100%/12) * 6);text-align: center;margin: auto;float: none;">
   <h3 class="pb-2" style="font-size:24px;text-align:center;">Op zoek naar bijles aan huis voor uw kind?</h3>
   <span class="line"></span>
   <p class="pt-3" style="text-align:center;">Het vinden van de bijlesgever die bij uw kind past, kan soms lastig zijn. Zo zijn er bedrijven waar de prijs-kwaliteit tegenvalt. Om het gemakkelijker te maken kunt u boven uit een selectie van onze geselecteerde en getrainde bijlesgevers de beste bijlesgever voor uw kind kiezen. 
<br>
<br>
      Lijkt de beste bijlesgever hierboven niet te staan? <b>Ons Omegabijles netwerk van bijlesgevers is groter dan hier getoond. </b> Neemt u dus vooral contact op zodat wij kunnen adviseren welke van onze bijlesgevers uw kind weer optimaal vooruit kan helpen!
<br>
<br>
<b>Waarom onze bijlesgevers?</b><br>
     Onze bijlesgevers hebben minimaal een 7,5 voor het betreffende vak, zijn enthousiast en geduldig in hun uitleg en stemmen de bijlessen geheel op uw kind af.
   </p>
</div>


<!--New Text Box -->
</div>

@endsection





@section('script')

    <script type="text/javascript">

        var type = 'onload'

        $('#end_of_page').hide();

        var outerPane = $('#content'),

        didScroll = false;



        $(window).scroll(function() { //watches scroll of the window

            didScroll = true;

        });



        //Sets an interval so your window.scroll event doesn't fire constantly. This waits for the user to stop scrolling for not even a second and then fires the pageCountUpdate function (and then the getPost function)

        setInterval(function() {

            if (didScroll){

               didScroll = false;

               if(($(document).height()-$(window).height())-$(window).scrollTop() < 1){

                pageCountUpdate(); 

                }

           }

        }, 250);



        //This function runs when user scrolls. It will call the new posts if the max_page isn't met and will fade in/fade out the end of page message

        function pageCountUpdate(){

            var page = parseInt($('#page').val());

            var max_page = parseInt($('#max_page').val());



            if(max_page > 0){

               $('#page').val(page+1);

               if(type == 'onload'){

                getPosts();

            }else {

                var pp = $('#page').val();

                getPaginateData(pp)

            }

            $('#end_of_page').hide();

            } else {

              $('#end_of_page').fadeIn();

            }

        }





        //Ajax call to get your new posts

        function getPosts(){

            var page = parseInt($('#page').val());

            $.ajax({

                type: "GET",

                url: '{{ \Request::route()->getName() }}'  + '?page=' + page, // whatever your URL is

                beforeSend: function(){ //This is your loading message ADD AN ID

                    $('#content').append("<div id='loading' class='text-center'>Loading news items...</div>");

                },

                complete: function(){ //remove the loading message

                  $('#loading').remove()

                },

                success: function(data) { // success! YAY!! Add HTML to content container
                   if(page == 2) {
                    var needhelp = parseInt($('#totaltutor').html())
                   } else {
                    var needhelp = parseInt($('#totaltutor').html()) - (4 * (parseInt(page)-2));
                    if(needhelp ==0) {
                        needhelp = 1
                    }
                   }
                   console.log('pp' ,page)
                   console.log('need', needhelp)
                   
                   var html = $('<div />').append(data).find('#content').html()

                   var total = $('<div />').append(data).find('#total').html()

                    $('#total').html(total);

                    var totaltutor = $('#totaltutor').html();

                    var max_page = parseInt($('#max_page').val());

                    totaltutor = parseInt(totaltutor) + parseInt(max_page)

                    $('#totaltutor').html(totaltutor)
                    var htmlarray = html.split('<div class="single_profile"')

                    var finalhtml = ''
                    htmlarray.shift();
                    for(var i=0; i < htmlarray.length; i++){
                        needhelp++
                        htmlarray[i].replace(' ', '<img src="http://Omegabijles.nl/public/frontEnd/img/needhelp.PNG" class="img-fluid needhelpimg" style="cursor: pointer;">')
                        finalhtml += '<div class="single_profile"' + htmlarray[i]
                        if(needhelp == 4) {
                          finalhtml +=  '<img src="{{ URL::to('/public/frontEnd/img/infosection.png') }}" class="img-fluid needhelpimg" style="cursor: pointer;">'
                          needhelp = 0
                        }
                    }
                    $('#content').append(finalhtml);

                }

             });



        } //end of getPosts function


        var postcode = document.getElementById('autocomplete').value

        var subjects = []

        var classes, tutortype, price, sortitem,searchtext,experience

        var sat = []

        var mon = []

        var tue = []

        var wed = []

        var thus = []

        var fri = []

        var sun = []
        var searchsub = "{{ isset($subject) ? $subject : null }}" 
        subjects.push(searchsub)
        console.log(subjects)
        function getSubjects(value) {

            var checkValueExist = subjects.includes(value);

            if(checkValueExist){

                subjects.remove(value)

            }else{

                subjects.push(value)

            }

            getPaginateData(1)

            console.log(subjects)

        }



        function getClasses(value){

            classes = value

            console.log(classes)

            getPaginateData(1)

        }



        function getTutorType(value){

            tutortype = value

            getPaginateData(1)

            console.log(tutortype)

        }



        function getPrice(value){

            price = value

            getPaginateData(1)

        }



        function getTutorTime(value, day){

            if(day == 'sat'){

                let checkValueExist = sat.includes(value);

                if(checkValueExist){

                    sat.remove(value)

                }else{

                    sat.push(value)

                }

            }

            if(day == 'sun'){

                let checkValueExist = sun.includes(value);

                if(checkValueExist){

                    sun.remove(value)

                }else{

                    sun.push(value)

                }

            }

            if(day == 'mon'){

                let checkValueExist = mon.includes(value);

                if(checkValueExist){

                    mon.remove(value)

                }else{

                    mon.push(value)

                }

            }

            if(day == 'tue'){

                let checkValueExist = tue.includes(value);

                if(checkValueExist){

                    tue.remove(value)

                }else{

                    tue.push(value)

                }

            }

            if(day == 'wed'){

                let checkValueExist = wed.includes(value);

                if(checkValueExist){

                    wed.remove(value)

                }else{

                    wed.push(value)

                }

            }

            if(day == 'thus'){

                let checkValueExist = thus.includes(value);

                if(checkValueExist){

                    thus.remove(value)

                }else{

                    thus.push(value)

                }

            }

            if(day == 'fri'){

                let checkValueExist = fri.includes(value);

                if(checkValueExist){

                    fri.remove(value)

                }else{

                    fri.push(value)

                }

            }

            getPaginateData(1)

        }



        function getSort(value){

            sortitem = value

            getPaginateData(1)

        }



        function getKeyword(value){

            searchtext = value

            getPaginateData(1)

        }



        function getExperience(value){

            experience = value

            getPaginateData(1)

        }



        function getPaginateData(value){

         var data = {}

         var token = $('meta[name="csrf-token"]').attr('content')

         if(value == 1){

            document.getElementById('page').value = 1

         }

        data._token = token;

        data.subjects = subjects;

        data.classes = classes;

        data.tutortype = tutortype;

        data.price = price;

        data.sortitem = sortitem;

        data.searchtext = searchtext;

        data.experience = experience

        data.sat = sat;

        data.mon = mon;

        data.tue = tue;

        data.wed = wed;

        data.thus = thus;

        data.fri = fri;

        data.sun = sun;

        data.postcode = postcode

         var url = '{{ url('/search/filter') }}?page=' + value

         $.ajax({

            url: url,

            data:data,

            method: 'POST',              

            success: function(data){

                type = 'filter'

                if(value == 1){

                    showData(data)

                }else {

                    showPaginateData(data, value);

                }

                

            }

        });

      }



      function showData(data){
        let alldata = data.data

        if(alldata.length > 0){

            var html = ''   
            var needhelp = 1

            for(var i =0; i < alldata.length; i++){
                 
                 html += '<div class="single_profile"><div class="row"><div class="profile_img"><img src="{{asset('public/uploads')}}/'+ alldata[i].image +'" alt="prfl img"></div><div class="col"><div class="row"><div class="col"><h2 class="tutor_name"><a href="{{ url('/tutorprofile/') }}/' + alldata[i].user_id + '">' + alldata[i].firstname + '</a></h2></div><div class="col text-right"><h2 class="pricings">€'

                 if(alldata[i].tutor_type == 2) {

                    html += '21'

                 }else{

                    html += '15'

                 }

                 html += ',- p/u</h2></div></div><div class="row"><div class="col-lg-8"><div class="star_ratings">';

                 for(var j=0; j < Math.round(alldata[i].avgrating); j++){

                    html += '<i class="fas fa-star checked"></i>'

                 }



                 for(var k = Math.round(alldata[i].avgrating) + 1; k <= 5; k++){

                    html += '<i class="fas fa-star"></i>'

                 }

                 alldata[i].Briefintroduction = nl2br(alldata[i].Briefintroduction)
                 alldata[i].Briefintroduction = alldata[i].Briefintroduction.substr(0, 100)

                 html += '</div><address>' + alldata[i].coursename + '</address>'+ alldata[i].Briefintroduction +'</div><div class="col-lg-4 justify_end"><a class="btn btn-primary" href="{{ url('/tutorprofile/') }}/' + alldata[i].user_id + '">Bekijk profiel <img src="{{asset('public/frontEnd/img/icons/arrow-right.svg')}}" alt="arrow-right"></a></div></div></div></div></div>'
                 var infoimg = "{{ url('/contact') }}"
                if(needhelp == 4) {
                    html += '<img src="{{ URL::to('/public/frontEnd/img/infosection.png') }}" class="img-fluid needhelpimg" onclick="window.location=\''+infoimg +'\'" style="cursor: pointer;">'
                    needhelp = 0
                }else if (needhelp != 4 && i == (alldata.length -1)) {
                    html += '<img src="{{ URL::to('/public/frontEnd/img/infosection.png') }}" class="img-fluid needhelpimg" onclick="window.location=\''+infoimg +'\'" style="cursor: pointer;">'
                }

                needhelp++

            }

            document.getElementById('content').innerHTML = html 

            document.getElementById('totaltutor').innerHTML = alldata.length

            document.getElementById('max_page').value = alldata.length

        } else {
            var infoimg = "{{ url('/contact') }}"
            var html = '<img src="{{ URL::to('/public/frontEnd/img/largerneedhelp.PNG') }}" class="img-fluid" onclick="window.location=\''+
            infoimg +'\'" style="cursor: pointer;">'

            document.getElementById('content').innerHTML = html

            document.getElementById('totaltutor').innerHTML = '0'

            document.getElementById('max_page').value = 0

        } 
        document.getElementById('filter_box').classList.remove("show_filter")
        document.getElementById('contactinfo-area').classList.remove("showDiv")
      }

      function showPaginateData(data, page){
        let alldata = data.data

        if(alldata.length > 0){

            var html = ''
             var needhelp = parseInt($('#totaltutor').html()) - (4 * (parseInt(page) - 1));
              if(needhelp == 0) {
                needhelp = 1
              }  
              console.log('aa', needhelp)
            for(var i =0; i < alldata.length; i++){
                 
                 html += '<div class="single_profile"><div class="row"><div class="profile_img"><img src="{{asset('public/uploads')}}/'+ alldata[i].image +'" alt="prfl img"></div><div class="col"><div class="row"><div class="col"><h2 class="tutor_name"><a href="{{ url('/tutorprofile/') }}/' + alldata[i].user_id + '">' + alldata[i].firstname  + '</a></h2></div><div class="col text-right"><h2 class="pricings">€'

                 if(alldata[i].tutor_type == 2) {

                    html += '18'

                 }else{

                    html += '11'

                 }

                 html += ',- p/u</h2></div></div><div class="row"><div class="col-lg-8"><div class="star_ratings">';

                 for(var j=0; j < Math.round(alldata[i].avgrating); j++){

                    html += '<i class="fas fa-star checked"></i>'

                 }



                 for(var k = Math.round(alldata[i].avgrating) + 1; k <= 5; k++){

                    html += '<i class="fas fa-star"></i>'

                 }
                 alldata[i].Briefintroduction = nl2br(alldata[i].Briefintroduction)
                 alldata[i].Briefintroduction = alldata[i].Briefintroduction.substr(0, 100)
                 

                 html += '</div><address>' + alldata[i].coursename + '</address>'+ alldata[i].Briefintroduction +'</div><div class="col-lg-4 justify_end"><a class="btn btn-primary" href="{{ url('/tutorprofile/') }}/' + alldata[i].user_id + '">Bekijk profiel <img src="{{asset('public/frontEnd/img/icons/arrow-right.svg')}}" alt="arrow-right"></a></div></div></div></div></div>'
                 console.log('page', needhelp)
                 if(needhelp == 4) {
                    var infoimg = "{{ url('/contact') }}"
                    html += '<img src="{{ URL::to('/public/frontEnd/img/infosection.png') }}" class="img-fluid needhelpimg" onclick="window.location=\''+infoimg +'\'" style="cursor: pointer;">'
                    needhelp = 0
                 console.log(i)   
                 console.log(needhelp)   
                 }else if (needhelp != 4 && i == alldata.length) {
                    html += '<img src="{{ URL::to('/public/frontEnd/img/infosection.png') }}" class="img-fluid needhelpimg" onclick="window.location=\''+infoimg +'\'" style="cursor: pointer;">'
                 }
                 needhelp++

            }

            var totaltutor = document.getElementById('totaltutor').innerHTML

            $('#totaltutor').html(parseInt(totaltutor) + alldata.length)

            $('#content').append(html)

            document.getElementById('max_page').value = alldata.length

        }else{

            document.getElementById('max_page').value = 0

        }

      }



      function nl2br (str) {

        var breakTag = '<br />'

        return (str + '').replace(/([^>\r\n]?)(\r\n|\n\r|\r|\n)/g, '$1' + breakTag + '$2');

      }

        Array.prototype.remove = function() {

            var what, a = arguments, L = a.length, ax;

            while (L && this.length) {

                what = a[--L];

                while ((ax = this.indexOf(what)) !== -1) {

                    this.splice(ax, 1);

                }

            }

            return this;

        };
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/geocomplete/1.7.0/jquery.geocomplete.js"></script>

    <script type="text/javascript">
    $("#autocomplete").geocomplete({
      country: 'nl',
      types:['(regions)']
    }).bind("geocode:result", function(event, result) {
        postcode = result.address_components[0].long_name
        if(postcode) {
            if (isNaN(postcode.charAt(0))) {
                alert('Vul aub uw postcode in. Bijv. ' + document.getElementById('autocomplete').value)
                postcode = null
                document.getElementById('autocomplete').value = ''
                return false
            } else {
                document.getElementById('autocomplete').value = result.address_components[0].long_name
                document.getElementById('validpostcode').value = 'valid'
                getPaginateData(1)
            }
        }else {
            alert('Vul aub uw postcode in. Bijv. ' + document.getElementById('autocomplete').value)
            postcode = null
            document.getElementById('autocomplete').value = ''
            return false
        }
    }); 

    function getDataByPostcode(e){
        var postcode = document.getElementById('validpostcode').value
        if (postcode == 'valid') {
            getPaginateData(1)
            e.preventDefault()
        }else {
            alert('Vul aub uw postcode in. Bijv. ' + document.getElementById('autocomplete').value)
            return false
             e.preventDefault()
        }
    }

    // function checkPostcode () {

    // }


     
</script>
 
 <script type="text/javascript" src="{{ URL::to('/public/frontEnd/js/jquery.exit-modal.js') }}"></script>

    <script type="text/javascript">

        $(document).ready(function(){

            var timer;

            var exitModalParams = {
                numberToShown:1,
                callbackOnModalShow:function() {
                    var counter = $('.exit-modal').data('exitModal').showCounter;
                    // $('.exit-modal .modal-body p').text("Exit modal shown "+counter+" times");
                },
                callbackOnModalShown:function() {
                    // timer = setTimeout(function(){
                    //     // window.location.href = "http://www.jqueryscript.net";
                    //     $('.exit-modal').exitModal('hideModal');
                    // }, 4000)
                },
                callbackOnModalHide:function() {
                    clearTimeout(timer);
                }
            }

            // $('.destroy-exit-modal').on("click", function(e){
            //     e.preventDefault();
            //     if($('.exit-modal').data('exit-modal')) {
            //         $(".initialized-state").hide();
            //         $(".destroyed-state").show();
            //     }
            //     $('.exit-modal').exitModal('hideModal');
            //     $('.exit-modal').exitModal('destroy');
            //     $(".initialized").hide();
            // });

            // $('.init-exit-modal').on('click', function(e){
            //     e.preventDefault();
                
            // });

            $('.exit-modal').exitModal(exitModalParams);
            if($('.exit-modal').data('exit-modal')) {
                $(".destroyed-state").hide();
                $(".initialized-state").show();
            }

            $('.close-exit-modal').on('click', function(e){
                e.preventDefault();
                $('.exit-modal').exitModal('hideModal');
            });

        });


        function sendEmail(event) {
            var name = document.getElementById('exit-name').value
            var phone = document.getElementById('exit-phone').value
            var postcode = document.getElementById('autocomplete').value

            var data = {}
            data.name = name
            data.phone = phone
            data.postcode = postcode
            event.preventDefault()
            $.ajax({
                url:"{{ url('/sendIntentMail') }}",
                method:"POST", //First change type to method here
                data: data,
                success:function(response) {
                  $('.exit-modal').exitModal('hideModal');
                  document.getElementById('exitsuccess').style.display = 'block'
               }

              });
        }
    </script>
@endsection