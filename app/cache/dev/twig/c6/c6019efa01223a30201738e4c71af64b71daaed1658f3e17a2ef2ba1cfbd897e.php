<?php

/* :front:about.html.twig */
class __TwigTemplate_f12c796b228efc7332465922ca0f21534668c0d05218a83237c7ae384e5e775d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":front:about.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_89db663d77c4f1377a1d01fd54f0cfc4ef70203a9b10f0634857a8be699ee227 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89db663d77c4f1377a1d01fd54f0cfc4ef70203a9b10f0634857a8be699ee227->enter($__internal_89db663d77c4f1377a1d01fd54f0cfc4ef70203a9b10f0634857a8be699ee227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":front:about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89db663d77c4f1377a1d01fd54f0cfc4ef70203a9b10f0634857a8be699ee227->leave($__internal_89db663d77c4f1377a1d01fd54f0cfc4ef70203a9b10f0634857a8be699ee227_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fe86251f62762cdd1c466894faf95304be93fe9e4d4396a5109680c8d6994aad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe86251f62762cdd1c466894faf95304be93fe9e4d4396a5109680c8d6994aad->enter($__internal_fe86251f62762cdd1c466894faf95304be93fe9e4d4396a5109680c8d6994aad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/about.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_fe86251f62762cdd1c466894faf95304be93fe9e4d4396a5109680c8d6994aad->leave($__internal_fe86251f62762cdd1c466894faf95304be93fe9e4d4396a5109680c8d6994aad_prof);

    }

    // line 6
    public function block_header($context, array $blocks = array())
    {
        $__internal_0e0f78c8e2067fb1755c8cba66ce744a1740e1567ee56f4a3fd3fde0ce79113c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e0f78c8e2067fb1755c8cba66ce744a1740e1567ee56f4a3fd3fde0ce79113c->enter($__internal_0e0f78c8e2067fb1755c8cba66ce744a1740e1567ee56f4a3fd3fde0ce79113c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 7
        echo "        <h1>Kilka słów o Nas</h1>
    ";
        
        $__internal_0e0f78c8e2067fb1755c8cba66ce744a1740e1567ee56f4a3fd3fde0ce79113c->leave($__internal_0e0f78c8e2067fb1755c8cba66ce744a1740e1567ee56f4a3fd3fde0ce79113c_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ceb188d1a5d6c03878809abe9ca1c9f50db543452a5d607dea1b8dec405e0e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ceb188d1a5d6c03878809abe9ca1c9f50db543452a5d607dea1b8dec405e0e8->enter($__internal_6ceb188d1a5d6c03878809abe9ca1c9f50db543452a5d607dea1b8dec405e0e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
    <main>
        <div class=\"route\"><br></div>
        <div class=\"container\">
            <p><b>Stowarzyszenie na Rzecz Wychowanków Zespołu Szkół Specjalnych w Ostrowcu Świętokrzyskim „Źródło”</b></p>
            <p>Celem stowarzyszenia jest działanie na rzecz wyrównywania szans dzieci i młodzieży z niepełnosprawnością intelektualną, prowadzenie ich ku aktywnemu uczestnictwu w życiu społecznym oraz wspieranie ich rodzin.</p>
            <p>Stowarzyszenie realizuje wskazany cel poprzez: </p>
            <ol>
                <li>organizowanie różnych form zajęć umożliwiających dzieciom uczestnictwo, rozwój i organizację sportu, rekreację, rehabilitację ruchową ,turystykę i inne formy mające wpływ na popularyzację i doskonalenie sprawności fizycznych i psychofizycznych</li>
                <li>zajęcia terapeutyczne indywidualne i zbiorowe,</li>
                <li>inicjowanie i organizowanie spotkań rodziców w celu wymiany doświadczeń i wsparcia emocjonalnego,</li>
                <li>zapewnienie dzieciom aktywnych form spędzania wolnego czasu,</li>
                <li>podejmowanie działań proekologicznych i promujących zdrowy styl życia, organizacja edukacji ekologicznej i regionalnej,</li>
                <li>prowadzenie działalności gospodarczej w różnorodnych formach organizacyjnych umożliwiających zdobycie środków na realizację celów statutowych,</li>
                <li>prowadzenie działalności charytatywnej,</li>
                <li>współpracę z administracją samorządową i rządową, organizacjami pozarządowymi i społecznością lokalną, kościołem katolickim a także innymi instytucjami pomocy społecznej,</li>
                <li>pozyskiwanie i gromadzenie środków materialnych i finansowych na realizację zadań Stowarzyszenia,</li>
                <li>inne działania sprzyjające realizacji statutowych celów Stowarzyszenia.</li>
            </ol>
            <div class=\"images\">
                <img src=";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/o_nas_trip.jpg"), "html", null, true);
        echo " >
                <img src=";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/o_nas_trip2.jpg"), "html", null, true);
        echo ">
            </div>
            <br><p><b>Zarząd: </b></p>
            <ol>
                <li>prezes : Ewa Grudniewska</li>
                <li>wiceprezes : Ewa Ciastek</li>
                <li>sekretarz : Małgorzata Stramowska</li>
                <li>skarbnik : Ernest Krajewski</li>
                <li>członkowie:  Małgorzata Czyż, Justyna Wołowiec, Elżbieta Wypchło</li>
            </ol>
            <br><p><b>Komisja Rewizyjna: </b></p>
            <ol>
                <li>Agnieszka Wziątek-Dryjas</li>
                <li>Anna Polit</li>
                <li>Aneta Stawczyk</li>
            </ol>
            <div class=\"statut\">
                <h2> ROK 2009 - STATUT STOWARZYSZENIA </h2>
                <hr>
                <h3>Statut</h3>
                <h3>Stowarzyszenia na Rzecz</h3>
                <h3>Wychowanków Zespołu Szkół Specjalnych</h3>
                <h3>w Ostrowcu Świętokrzyskim</h3>
                <h3>\"Źródło\"</h3>
                <button class=\"btn btn-yellow\"><a target=\"_blank\" href=";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/additions/Statut_2009.pdf"), "html", null, true);
        echo ">Czytaj więcej</a></button>
            </div>
        </div>
    </main>
";
        
        $__internal_6ceb188d1a5d6c03878809abe9ca1c9f50db543452a5d607dea1b8dec405e0e8->leave($__internal_6ceb188d1a5d6c03878809abe9ca1c9f50db543452a5d607dea1b8dec405e0e8_prof);

    }

    public function getTemplateName()
    {
        return ":front:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 55,  98 => 31,  94 => 30,  72 => 10,  66 => 9,  58 => 7,  52 => 6,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/about.css') }}\" />
{% endblock %}
    {% block header %}
        <h1>Kilka słów o Nas</h1>
    {% endblock %}
{% block body %}

    <main>
        <div class=\"route\"><br></div>
        <div class=\"container\">
            <p><b>Stowarzyszenie na Rzecz Wychowanków Zespołu Szkół Specjalnych w Ostrowcu Świętokrzyskim „Źródło”</b></p>
            <p>Celem stowarzyszenia jest działanie na rzecz wyrównywania szans dzieci i młodzieży z niepełnosprawnością intelektualną, prowadzenie ich ku aktywnemu uczestnictwu w życiu społecznym oraz wspieranie ich rodzin.</p>
            <p>Stowarzyszenie realizuje wskazany cel poprzez: </p>
            <ol>
                <li>organizowanie różnych form zajęć umożliwiających dzieciom uczestnictwo, rozwój i organizację sportu, rekreację, rehabilitację ruchową ,turystykę i inne formy mające wpływ na popularyzację i doskonalenie sprawności fizycznych i psychofizycznych</li>
                <li>zajęcia terapeutyczne indywidualne i zbiorowe,</li>
                <li>inicjowanie i organizowanie spotkań rodziców w celu wymiany doświadczeń i wsparcia emocjonalnego,</li>
                <li>zapewnienie dzieciom aktywnych form spędzania wolnego czasu,</li>
                <li>podejmowanie działań proekologicznych i promujących zdrowy styl życia, organizacja edukacji ekologicznej i regionalnej,</li>
                <li>prowadzenie działalności gospodarczej w różnorodnych formach organizacyjnych umożliwiających zdobycie środków na realizację celów statutowych,</li>
                <li>prowadzenie działalności charytatywnej,</li>
                <li>współpracę z administracją samorządową i rządową, organizacjami pozarządowymi i społecznością lokalną, kościołem katolickim a także innymi instytucjami pomocy społecznej,</li>
                <li>pozyskiwanie i gromadzenie środków materialnych i finansowych na realizację zadań Stowarzyszenia,</li>
                <li>inne działania sprzyjające realizacji statutowych celów Stowarzyszenia.</li>
            </ol>
            <div class=\"images\">
                <img src={{ asset(\"assets/images/o_nas_trip.jpg\") }} >
                <img src={{ asset(\"assets/images/o_nas_trip2.jpg\") }}>
            </div>
            <br><p><b>Zarząd: </b></p>
            <ol>
                <li>prezes : Ewa Grudniewska</li>
                <li>wiceprezes : Ewa Ciastek</li>
                <li>sekretarz : Małgorzata Stramowska</li>
                <li>skarbnik : Ernest Krajewski</li>
                <li>członkowie:  Małgorzata Czyż, Justyna Wołowiec, Elżbieta Wypchło</li>
            </ol>
            <br><p><b>Komisja Rewizyjna: </b></p>
            <ol>
                <li>Agnieszka Wziątek-Dryjas</li>
                <li>Anna Polit</li>
                <li>Aneta Stawczyk</li>
            </ol>
            <div class=\"statut\">
                <h2> ROK 2009 - STATUT STOWARZYSZENIA </h2>
                <hr>
                <h3>Statut</h3>
                <h3>Stowarzyszenia na Rzecz</h3>
                <h3>Wychowanków Zespołu Szkół Specjalnych</h3>
                <h3>w Ostrowcu Świętokrzyskim</h3>
                <h3>\"Źródło\"</h3>
                <button class=\"btn btn-yellow\"><a target=\"_blank\" href={{ asset('assets/additions/Statut_2009.pdf') }}>Czytaj więcej</a></button>
            </div>
        </div>
    </main>
{% endblock %}", ":front:about.html.twig", "/home/kuba/Workspace/app/Resources/views/front/about.html.twig");
    }
}
