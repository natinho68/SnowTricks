<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_eb6671fd161dda1e2ada626f4ea4641e222ea370ced56298a81af7ff993518dc extends Twig_Template
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
        $__internal_84aa75cea4f140fd7723b712d2eb16be400b3e4ab3e7c2c6cdafe3e423cbb386 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84aa75cea4f140fd7723b712d2eb16be400b3e4ab3e7c2c6cdafe3e423cbb386->enter($__internal_84aa75cea4f140fd7723b712d2eb16be400b3e4ab3e7c2c6cdafe3e423cbb386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_a7c6d6dd6d33c9356e64a2595c1fa073024f5d8a8da34e8d0747625e1cb92bf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7c6d6dd6d33c9356e64a2595c1fa073024f5d8a8da34e8d0747625e1cb92bf0->enter($__internal_a7c6d6dd6d33c9356e64a2595c1fa073024f5d8a8da34e8d0747625e1cb92bf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_84aa75cea4f140fd7723b712d2eb16be400b3e4ab3e7c2c6cdafe3e423cbb386->leave($__internal_84aa75cea4f140fd7723b712d2eb16be400b3e4ab3e7c2c6cdafe3e423cbb386_prof);

        
        $__internal_a7c6d6dd6d33c9356e64a2595c1fa073024f5d8a8da34e8d0747625e1cb92bf0->leave($__internal_a7c6d6dd6d33c9356e64a2595c1fa073024f5d8a8da34e8d0747625e1cb92bf0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
