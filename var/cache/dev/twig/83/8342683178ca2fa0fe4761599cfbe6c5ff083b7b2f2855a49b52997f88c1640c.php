<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_cd2162b286b425d51d5c42f4cd691cacba6943476b4b5a3f0ee6eecf0ee59060 extends Twig_Template
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
        $__internal_9e0e68a254d4a6d5973db2e6e7a14814eb31efcf556885cd044bda04315af3d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e0e68a254d4a6d5973db2e6e7a14814eb31efcf556885cd044bda04315af3d3->enter($__internal_9e0e68a254d4a6d5973db2e6e7a14814eb31efcf556885cd044bda04315af3d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_099e48ea5e66324de1dcbfd70f0c91dcbe51a7fc11f50bb4a76dcd314c0956f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_099e48ea5e66324de1dcbfd70f0c91dcbe51a7fc11f50bb4a76dcd314c0956f2->enter($__internal_099e48ea5e66324de1dcbfd70f0c91dcbe51a7fc11f50bb4a76dcd314c0956f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_9e0e68a254d4a6d5973db2e6e7a14814eb31efcf556885cd044bda04315af3d3->leave($__internal_9e0e68a254d4a6d5973db2e6e7a14814eb31efcf556885cd044bda04315af3d3_prof);

        
        $__internal_099e48ea5e66324de1dcbfd70f0c91dcbe51a7fc11f50bb4a76dcd314c0956f2->leave($__internal_099e48ea5e66324de1dcbfd70f0c91dcbe51a7fc11f50bb4a76dcd314c0956f2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
