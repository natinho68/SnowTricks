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
        $__internal_03647e23c06f37be4b01f01e92c72e480dcfb1cb9b6ad14674161df23b33613d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03647e23c06f37be4b01f01e92c72e480dcfb1cb9b6ad14674161df23b33613d->enter($__internal_03647e23c06f37be4b01f01e92c72e480dcfb1cb9b6ad14674161df23b33613d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_d6c9e94d9fe93b2c5d010737abdb4d101b096775ac2e8044ab043f4d0fd03816 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6c9e94d9fe93b2c5d010737abdb4d101b096775ac2e8044ab043f4d0fd03816->enter($__internal_d6c9e94d9fe93b2c5d010737abdb4d101b096775ac2e8044ab043f4d0fd03816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_03647e23c06f37be4b01f01e92c72e480dcfb1cb9b6ad14674161df23b33613d->leave($__internal_03647e23c06f37be4b01f01e92c72e480dcfb1cb9b6ad14674161df23b33613d_prof);

        
        $__internal_d6c9e94d9fe93b2c5d010737abdb4d101b096775ac2e8044ab043f4d0fd03816->leave($__internal_d6c9e94d9fe93b2c5d010737abdb4d101b096775ac2e8044ab043f4d0fd03816_prof);

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
