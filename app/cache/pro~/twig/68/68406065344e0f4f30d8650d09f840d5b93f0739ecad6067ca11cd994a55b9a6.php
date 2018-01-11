<?php

/* :front:about.html.twig */
class __TwigTemplate_c1640b7464a74bbb4b1c37dd584922c984ba1fd0346a6e4beeba40530ef40c8d extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/about.css"), "html", null, true);
        echo "\" />
";
    }

    // line 6
    public function block_header($context, array $blocks = array())
    {
        // line 7
        echo "        <h1>Kilka słów o Nas</h1>
    ";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
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
                <img src=\"assets/images/o_nas_trip.jpg\">
                <img src=\"assets/images/o_nas_trip2.jpg\">
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
        return array (  98 => 55,  51 => 10,  48 => 9,  43 => 7,  40 => 6,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":front:about.html.twig", "/home/kuba/zrodlo/app/Resources/views/front/about.html.twig");
    }
}
