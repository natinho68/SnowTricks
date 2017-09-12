<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_556f64efd5b13a6c9d370fe4cc9226876bc241dd3522814a3525e7463f56f309 extends Twig_Template
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
        $__internal_8747f48b7e9ec995b95ce9bfac5c966ec123cf66ff6c179a4a925424ad66d06c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8747f48b7e9ec995b95ce9bfac5c966ec123cf66ff6c179a4a925424ad66d06c->enter($__internal_8747f48b7e9ec995b95ce9bfac5c966ec123cf66ff6c179a4a925424ad66d06c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_2e9166a2f32d1582011cd32dd195e5097f65b876f8ffe39abe82d98dfbe13cba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e9166a2f32d1582011cd32dd195e5097f65b876f8ffe39abe82d98dfbe13cba->enter($__internal_2e9166a2f32d1582011cd32dd195e5097f65b876f8ffe39abe82d98dfbe13cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_8747f48b7e9ec995b95ce9bfac5c966ec123cf66ff6c179a4a925424ad66d06c->leave($__internal_8747f48b7e9ec995b95ce9bfac5c966ec123cf66ff6c179a4a925424ad66d06c_prof);

        
        $__internal_2e9166a2f32d1582011cd32dd195e5097f65b876f8ffe39abe82d98dfbe13cba->leave($__internal_2e9166a2f32d1582011cd32dd195e5097f65b876f8ffe39abe82d98dfbe13cba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
