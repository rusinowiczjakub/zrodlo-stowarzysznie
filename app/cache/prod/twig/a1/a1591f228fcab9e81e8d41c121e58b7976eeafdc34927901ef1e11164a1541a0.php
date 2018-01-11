<?php

/* front/about.html.twig */
class __TwigTemplate_69860b396f8a23361ef81d09c5f64fbf040d4bc951f21bd9ffc8018a2c049ff1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "front/about.html.twig", 1);
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
        $__internal_e16d315c7c574d9534561bd4b77316e38494c57c126b93bfc63d970ddeaa32f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e16d315c7c574d9534561bd4b77316e38494c57c126b93bfc63d970ddeaa32f7->enter($__internal_e16d315c7c574d9534561bd4b77316e38494c57c126b93bfc63d970ddeaa32f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "front/about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e16d315c7c574d9534561bd4b77316e38494c57c126b93bfc63d970ddeaa32f7->leave($__internal_e16d315c7c574d9534561bd4b77316e38494c57c126b93bfc63d970ddeaa32f7_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ceb69edd63705715bca9236519e1e2cd699f61eeefd9a068544fa09c04c23152 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceb69edd63705715bca9236519e1e2cd699f61eeefd9a068544fa09c04c23152->enter($__internal_ceb69edd63705715bca9236519e1e2cd699f61eeefd9a068544fa09c04c23152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/about.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_ceb69edd63705715bca9236519e1e2cd699f61eeefd9a068544fa09c04c23152->leave($__internal_ceb69edd63705715bca9236519e1e2cd699f61eeefd9a068544fa09c04c23152_prof);

    }

    // line 6
    public function block_header($context, array $blocks = array())
    {
        $__internal_b422ec6fd5d631a6a49ab882e12c7ca69fff3f0cf942850f2e02430730d8b574 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b422ec6fd5d631a6a49ab882e12c7ca69fff3f0cf942850f2e02430730d8b574->enter($__internal_b422ec6fd5d631a6a49ab882e12c7ca69fff3f0cf942850f2e02430730d8b574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 7
        echo "        <h1>Kilka słów o Nas</h1>
    ";
        
        $__internal_b422ec6fd5d631a6a49ab882e12c7ca69fff3f0cf942850f2e02430730d8b574->leave($__internal_b422ec6fd5d631a6a49ab882e12c7ca69fff3f0cf942850f2e02430730d8b574_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d32f0ecb3f462e44b2b6d20b7badb58cf541d92d010744bfb394897d1ffe23fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d32f0ecb3f462e44b2b6d20b7badb58cf541d92d010744bfb394897d1ffe23fe->enter($__internal_d32f0ecb3f462e44b2b6d20b7badb58cf541d92d010744bfb394897d1ffe23fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d32f0ecb3f462e44b2b6d20b7badb58cf541d92d010744bfb394897d1ffe23fe->leave($__internal_d32f0ecb3f462e44b2b6d20b7badb58cf541d92d010744bfb394897d1ffe23fe_prof);

    }

    public function getTemplateName()
    {
        return "front/about.html.twig";
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
{% endblock %}", "front/about.html.twig", "/home/kuba/Workspace/app/Resources/views/front/about.html.twig");
    }
}
