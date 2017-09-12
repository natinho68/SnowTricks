<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_c2dfaa1b23b216bbc9ce988c377e43521d892024c3340fa257080de42f18e0c4 extends Twig_Template
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
        $__internal_926ec79c39bcd79443c63088559ef0e7048c8e7b160fd4a9c202cb77e8ab0770 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_926ec79c39bcd79443c63088559ef0e7048c8e7b160fd4a9c202cb77e8ab0770->enter($__internal_926ec79c39bcd79443c63088559ef0e7048c8e7b160fd4a9c202cb77e8ab0770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_bfea2906a922aef09cd4fd158f03af95a18f983d7890aa2146186bc562cbc22a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfea2906a922aef09cd4fd158f03af95a18f983d7890aa2146186bc562cbc22a->enter($__internal_bfea2906a922aef09cd4fd158f03af95a18f983d7890aa2146186bc562cbc22a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_926ec79c39bcd79443c63088559ef0e7048c8e7b160fd4a9c202cb77e8ab0770->leave($__internal_926ec79c39bcd79443c63088559ef0e7048c8e7b160fd4a9c202cb77e8ab0770_prof);

        
        $__internal_bfea2906a922aef09cd4fd158f03af95a18f983d7890aa2146186bc562cbc22a->leave($__internal_bfea2906a922aef09cd4fd158f03af95a18f983d7890aa2146186bc562cbc22a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
