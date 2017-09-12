<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_400140564fe7c0f57636f821a8d903e35b349bf7f883f0efa1e61139e7c8f527 extends Twig_Template
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
        $__internal_dea91377dfef2183a02f52929fbd31e0039e58b26eac7253b778d8204fb1e555 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dea91377dfef2183a02f52929fbd31e0039e58b26eac7253b778d8204fb1e555->enter($__internal_dea91377dfef2183a02f52929fbd31e0039e58b26eac7253b778d8204fb1e555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_0a2f9cb49364fe3c7234df10dde6763cd1630a2d31a1cbe973eda0db278f0526 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a2f9cb49364fe3c7234df10dde6763cd1630a2d31a1cbe973eda0db278f0526->enter($__internal_0a2f9cb49364fe3c7234df10dde6763cd1630a2d31a1cbe973eda0db278f0526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_dea91377dfef2183a02f52929fbd31e0039e58b26eac7253b778d8204fb1e555->leave($__internal_dea91377dfef2183a02f52929fbd31e0039e58b26eac7253b778d8204fb1e555_prof);

        
        $__internal_0a2f9cb49364fe3c7234df10dde6763cd1630a2d31a1cbe973eda0db278f0526->leave($__internal_0a2f9cb49364fe3c7234df10dde6763cd1630a2d31a1cbe973eda0db278f0526_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
