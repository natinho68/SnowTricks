<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_04dce6188bf89aab671423f45cf580b533129d98e369dbf6f72e4edb0549e81b extends Twig_Template
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
        $__internal_6cb079cc7493ab9e7eedf756db105141ce07ea5cfa033a4ebcd1fd1edce657f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cb079cc7493ab9e7eedf756db105141ce07ea5cfa033a4ebcd1fd1edce657f7->enter($__internal_6cb079cc7493ab9e7eedf756db105141ce07ea5cfa033a4ebcd1fd1edce657f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_0bfce91d900384d70782f156ae08c7323e824e122026e3cbc6dcf508c202eedd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bfce91d900384d70782f156ae08c7323e824e122026e3cbc6dcf508c202eedd->enter($__internal_0bfce91d900384d70782f156ae08c7323e824e122026e3cbc6dcf508c202eedd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_6cb079cc7493ab9e7eedf756db105141ce07ea5cfa033a4ebcd1fd1edce657f7->leave($__internal_6cb079cc7493ab9e7eedf756db105141ce07ea5cfa033a4ebcd1fd1edce657f7_prof);

        
        $__internal_0bfce91d900384d70782f156ae08c7323e824e122026e3cbc6dcf508c202eedd->leave($__internal_0bfce91d900384d70782f156ae08c7323e824e122026e3cbc6dcf508c202eedd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
