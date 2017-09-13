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
        $__internal_f7c971a6e0532ae5f87c29140a02f140fb6fd00ecb9a5c2d8865353cbd95a6ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7c971a6e0532ae5f87c29140a02f140fb6fd00ecb9a5c2d8865353cbd95a6ce->enter($__internal_f7c971a6e0532ae5f87c29140a02f140fb6fd00ecb9a5c2d8865353cbd95a6ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_23fbe1e2bd3421b9fa2f4183f7bdecc5f5aadd2ff373e028a0f9adb7bb9413cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23fbe1e2bd3421b9fa2f4183f7bdecc5f5aadd2ff373e028a0f9adb7bb9413cb->enter($__internal_23fbe1e2bd3421b9fa2f4183f7bdecc5f5aadd2ff373e028a0f9adb7bb9413cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_f7c971a6e0532ae5f87c29140a02f140fb6fd00ecb9a5c2d8865353cbd95a6ce->leave($__internal_f7c971a6e0532ae5f87c29140a02f140fb6fd00ecb9a5c2d8865353cbd95a6ce_prof);

        
        $__internal_23fbe1e2bd3421b9fa2f4183f7bdecc5f5aadd2ff373e028a0f9adb7bb9413cb->leave($__internal_23fbe1e2bd3421b9fa2f4183f7bdecc5f5aadd2ff373e028a0f9adb7bb9413cb_prof);

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
