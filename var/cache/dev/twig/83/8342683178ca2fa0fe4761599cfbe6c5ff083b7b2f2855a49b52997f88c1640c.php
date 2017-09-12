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
        $__internal_b0202f2ce330267d5a02202fe74c03cc04cb681da66d2f3e85bdc04f04802296 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0202f2ce330267d5a02202fe74c03cc04cb681da66d2f3e85bdc04f04802296->enter($__internal_b0202f2ce330267d5a02202fe74c03cc04cb681da66d2f3e85bdc04f04802296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_65126bd7a0b837d66b823f6c91a22824940229b4a37e93f08e398b52f610bcc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65126bd7a0b837d66b823f6c91a22824940229b4a37e93f08e398b52f610bcc3->enter($__internal_65126bd7a0b837d66b823f6c91a22824940229b4a37e93f08e398b52f610bcc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_b0202f2ce330267d5a02202fe74c03cc04cb681da66d2f3e85bdc04f04802296->leave($__internal_b0202f2ce330267d5a02202fe74c03cc04cb681da66d2f3e85bdc04f04802296_prof);

        
        $__internal_65126bd7a0b837d66b823f6c91a22824940229b4a37e93f08e398b52f610bcc3->leave($__internal_65126bd7a0b837d66b823f6c91a22824940229b4a37e93f08e398b52f610bcc3_prof);

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
