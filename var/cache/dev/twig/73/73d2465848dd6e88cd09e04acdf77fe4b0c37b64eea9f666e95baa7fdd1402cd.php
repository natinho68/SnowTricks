<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_458d21bc00723d898918721ce1cc1220dbc8e16363130bb73be0532ff98570f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a1c9da24d7e123ac1b182b2f2ffeea02d28dfc95d3903664ed244e3010fce850 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1c9da24d7e123ac1b182b2f2ffeea02d28dfc95d3903664ed244e3010fce850->enter($__internal_a1c9da24d7e123ac1b182b2f2ffeea02d28dfc95d3903664ed244e3010fce850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_ccaf872dbd16ebd0410857ae183a2407ed8854141d1548a5ec7e3e7254a4b853 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccaf872dbd16ebd0410857ae183a2407ed8854141d1548a5ec7e3e7254a4b853->enter($__internal_ccaf872dbd16ebd0410857ae183a2407ed8854141d1548a5ec7e3e7254a4b853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_a1c9da24d7e123ac1b182b2f2ffeea02d28dfc95d3903664ed244e3010fce850->leave($__internal_a1c9da24d7e123ac1b182b2f2ffeea02d28dfc95d3903664ed244e3010fce850_prof);

        
        $__internal_ccaf872dbd16ebd0410857ae183a2407ed8854141d1548a5ec7e3e7254a4b853->leave($__internal_ccaf872dbd16ebd0410857ae183a2407ed8854141d1548a5ec7e3e7254a4b853_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
