<?php

/* :front:index.html.twig */
class __TwigTemplate_be3715db5ddac445579ed6a29fd3b656fd5fc0110112a124f249cc2c40e4be25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":front:index.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/index.css"), "html", null, true);
        echo "\" />
    <link href=\"https://fonts.googleapis.com/css?family=Alegreya+Sans\" rel=\"stylesheet\">
";
    }

    // line 8
    public function block_header($context, array $blocks = array())
    {
        // line 9
        echo "    <div class=\"header__content\">
        <h1>\"Źródło\"</h1>
        <h2>Stowarzyszenie Na Rzecz Wychowanków Zespołu Szkół Specjalnych</h2>
        <h2>Pomagamy!</h2>
        <h2>Pomóż i Ty.</h2>
    </div>
";
    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        // line 18
        echo "<main>
    <section>
        <h1> Przekaż swój 1% na Stowarzyszenie Na Rzecz Wychowanków Zespołu Szkół Specjalnych \"Źródło\"</h1>
        <h2>Wystarczy tylko w podatkowej deklaracji rocznej podać nasz numer KRS. Ty nic nie tracisz ,a osoby z niepełnsprawnością zyskują pomoc i wsparcie!</h2>
        <h2>Jesteśmy organizacją pożytku publicznego dzialającą na rzecz uczniów, absolwentów Zespołu Szkół Specjalnych.</h2>
    </section>
    <section id=\"first\">
        <article class=\"info\">
            <div class=\"info__left\">
                <div class=\"info__left-image\"></div>
            </div>
            <div class=\"info__right\">
                <h1>Jak działamy?</h1>
                <ul>
                    <li>organizujemy pomoc w bieżących problemach w funkcjonowaniu, pomoc interwencyjną w waznych sprawach związanych z różnego rodzaju instytucjami</li>
                    <li>organizujemy imprezy dla uczniów, absolwentów oraz ich rodzin</li>
                    <li>organizujemy ciekawe zajęcia specjalistyczne wzmacniające rozwój uczniów niepełnosprawnych – hipoterapia, dogoterapia</li>
                    <li>pozyskujemy dotacje oraz fundusze na wiele zajęć pozalekcyjnych, które zapewniają wszechstronny rozwój wychowanków jak również pozwalają im na ciekawe spędzanie czasu wolnego.</li>
                    <li>organizujemy specjalistyczne szkolenia dla kadry oraz rodziców</li>
                </ul>
            </div>
        </article>
        <article class=\"KRS\">
            <div class=\"KRS__left\">
                <h1>Stowarzyszenie Źródło</h1>
                <p>Ul. Iłżecka 31, Ostrowiec Św, tel. +48 784 510 686</p>
                <h1>KRS 0000309966</h1>
                <div>
                    <img src=";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/logo-1-procent.png"), "html", null, true);
        echo ">
                </div>
                <h1>Dziękujemy za wsparcie!</h1>
            </div>
            <div class=\"KRS__right\">
                <div class=\"KRS__right-image\"></div>
            </div>
        </article>
    </section>
    <footer>
        <h2>Odwiedź nas na facebooku i stronie internetowej</h2>
        <a href=\"https://www.facebook.com/Stowarzyszenie-Źródło-160272364071646/\"><i class=\"fa fa-facebook-square\" aria-hidden=\"true\"></i></a>
        <a href=\"https://zssostrowiec.edupage.org/\"><i class=\"fa fa-internet-explorer\" aria-hidden=\"true\"></i></a>
        <i></i>
    </footer>
</main>

";
    }

    public function getTemplateName()
    {
        return ":front:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 46,  57 => 18,  54 => 17,  44 => 9,  41 => 8,  33 => 4,  30 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":front:index.html.twig", "/home/kuba/Workspace/app/Resources/views/front/index.html.twig");
    }
}
