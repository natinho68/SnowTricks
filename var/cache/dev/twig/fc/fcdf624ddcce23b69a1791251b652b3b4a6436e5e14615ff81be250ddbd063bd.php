<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_75f0d6782c8770f49cb335a145077e81a9d90aa1874c18de0c5e2c408861be67 extends Twig_Template
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
        $__internal_21deb2938b64a7e2f8cf9775e3f9c1e8f122a38e7c7c137de22d11e27b839382 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21deb2938b64a7e2f8cf9775e3f9c1e8f122a38e7c7c137de22d11e27b839382->enter($__internal_21deb2938b64a7e2f8cf9775e3f9c1e8f122a38e7c7c137de22d11e27b839382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_8f97a00a95bc763ba3f2209087d000a5a0cef7ea9a234034cddc2c61dd09a641 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f97a00a95bc763ba3f2209087d000a5a0cef7ea9a234034cddc2c61dd09a641->enter($__internal_8f97a00a95bc763ba3f2209087d000a5a0cef7ea9a234034cddc2c61dd09a641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_21deb2938b64a7e2f8cf9775e3f9c1e8f122a38e7c7c137de22d11e27b839382->leave($__internal_21deb2938b64a7e2f8cf9775e3f9c1e8f122a38e7c7c137de22d11e27b839382_prof);

        
        $__internal_8f97a00a95bc763ba3f2209087d000a5a0cef7ea9a234034cddc2c61dd09a641->leave($__internal_8f97a00a95bc763ba3f2209087d000a5a0cef7ea9a234034cddc2c61dd09a641_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
