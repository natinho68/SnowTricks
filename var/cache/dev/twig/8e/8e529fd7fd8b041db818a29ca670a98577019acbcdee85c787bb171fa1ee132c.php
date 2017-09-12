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
        $__internal_080411c0477c266155567492588f4d3413912e387247b96a1d246d86b1f32bc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_080411c0477c266155567492588f4d3413912e387247b96a1d246d86b1f32bc1->enter($__internal_080411c0477c266155567492588f4d3413912e387247b96a1d246d86b1f32bc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_c580c11e2e0781e9a7985805c532adf7c87a6a3d4885c2a21c5e515cfb13773e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c580c11e2e0781e9a7985805c532adf7c87a6a3d4885c2a21c5e515cfb13773e->enter($__internal_c580c11e2e0781e9a7985805c532adf7c87a6a3d4885c2a21c5e515cfb13773e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_080411c0477c266155567492588f4d3413912e387247b96a1d246d86b1f32bc1->leave($__internal_080411c0477c266155567492588f4d3413912e387247b96a1d246d86b1f32bc1_prof);

        
        $__internal_c580c11e2e0781e9a7985805c532adf7c87a6a3d4885c2a21c5e515cfb13773e->leave($__internal_c580c11e2e0781e9a7985805c532adf7c87a6a3d4885c2a21c5e515cfb13773e_prof);

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
